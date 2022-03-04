<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; 
use App\Mail\EventInvitation;
use App\Models\Events;
use App\Models\Institutions;
use App\Models\User;
use App\Models\Speakers;
use Illuminate\Http\Request;
use Session;
use URL;


class EventsController extends Controller
{
    public function index(Request $request)
    {
        $data['meses'] = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septimbre','Octubre','Noviembre','Diciembre'];
        $data['categories'] = [
            'Hipotecario',
            'Empresarial',
            'Seguros',
        ];
        $data['types'] = [
            'Webinar' => 'Webinar',
            'Cursos' => 'Cursos',
            'Certificaciones' => 'Certificaciones',
            'Promoción y Capacitación' => 'Promocion',
            'Capacitación' => 'Capacitacion',
            'Aula SOC' => 'Aula',
        ];
        $institutions = Institutions::OrderBy('name')->get();
        foreach($institutions as $institution){
            $data['institutions'][$institution['id_institution']] = $institution;
        }
        // $data['institutions'] = Institutions::OrderBy('name')->get();
        $data['events'] = Events::where('enable_event',1)
                                  ->where(
                                      function($query) {
                                        $query->where('date_start','>',date('Y-m-d'))
                                            ->orWhere('date_end','>',date('Y-m-d'));
                                  })
                                  ->OrderBy('date_start')
                                  ->OrderBy('schedule_from')
                                  ->get();

        return view('home',$data);
    }
    
    public function getAllEvents(Request $request)
    {
        $events = Events::all();
        return view('events',['events' => $events]);
    }
    public function orderEvents(Request $request)
    {
        $events = Events::orderBy('date', $request->order)->get();
        return response()->json(['events' => $events]);
    }
    public function searchEvents(Request $request)
    {
        $events = Events::where('name', 'like', '%'.$request->search.'%')->get();
        return response()->json(['events' => $events]);
    }
    public function getAllEventsAdmin(Request $request)
    {
        $events = Events::all();
        return view('admin-events',['events' => $events]);
    }
    public function insertEvents(Request $request)
    {
        if($request->hasfile('imagen'))
         {
                $image = rand().time().'.'.$request->file('imagen')->extension();
                $request->file('imagen')->move(public_path().'/images/events/', $image);  
         }

         $insertEvent = Events::insertGetId(
            [
                'name' => $request->name, 
                'description' => $request->description,
                'video' => $request->video,
                'category' => $request->category,
                'language' => $request->language,
                'image' => $image,
                'spaces' => $request->spaces,
                'date' => $request->date
            ]
        );

         if($request->hasfile('speaker_image'))
         {
            $contador_array = 0;
            $speakers_count = 0;
            $host_count = 0;
            foreach($request->file('speaker_image') as $file)
            {

                if($request->speaker_type[$contador_array] == "host"){
                    $host_count++;
                }elseif($request->speaker_type[$contador_array] == "speaker"){
                    $speakers_count++;
                }else{

                }
                $name = rand().time().'.'.$file->extension();
                $file->move(public_path().'/images/speakers/', $name);  
                Speakers::insertGetId([
                    'name' => $request->speaker_name[$contador_array],
                    'image' => $name,
                    'type' => $request->speaker_type[$contador_array],
                    'event_id' => $insertEvent
                ]);
                $contador_array++;  
            }
         }

        $event = Events::find($insertEvent);

        $event->speakers = $speakers_count;
        $event->hosts = $host_count;

        $event->save();

        $events = Events::all();
        return view('admin-events',['events' => $events]);
    }

/* 
 * ADMINISTRADOR DE CONTENIDO | EVENTOS
 */
    public function admin(Request $request){
        $data = [];
        $user_session = $request->session()->get('user_session');
        if(Session::has('fail')){
            $data['fail'] = Session::get('fail'); }
        
        if(!isset($user_session['loggedin']) || $user_session['loggedin'] != TRUE){
            return view('admin.login',$data);
        } else{
            if(
                date('Y-m-d H:i:s') >= date('Y-m-d H:i:s',strtotime($user_session['expiration']))
            ){
                return view('admin.login',$data);
            }
            
            $user_session['expiration'] = $user_session['keep_signed'] != TRUE ? date('Y-m-d H:i:s',strtotime('+10 minutes')) : date('Y-m-d H:i:s',strtotime('+1 year'));
            
            if(null !== $request->input('q')){
                $request->session()->put('user_session',$user_session);
                
                $query = $request->input('q');
                $data['events'] = Events::OrderBy('date_start')
                                        ->OrderBy('schedule_from')
                                        ->where('name', 'like', '%'.$query.'%')
    									->orWhere('speakers', 'like', '%'.$query.'%')
    									->orWhere('appointment', 'like', '%'.$query.'%')
    									->orWhere('description', 'like', '%'.$query.'%')
                                        ->paginate(6);
                $institutions = Institutions::OrderBy('name')->get();
                foreach($institutions as $institution){
                    $data['institutions'][$institution['id_institution']] = $institution;
                }
            } else{
                $data['events'] = Events::OrderBy('date_start')->OrderBy('schedule_from')->paginate(6);
                $institutions = Institutions::OrderBy('name')->get();
                foreach($institutions as $institution){
                    $data['institutions'][$institution['id_institution']] = $institution;
                }
            }
            
            return view('admin.events',$data);
        }
    }

    public function new_event(Request $request){
        $session = TRUE;
        
        // $data['event'] = NULL;
        $data['categories'] = ['Hipotecario','Empresarial','Seguros'];
        $data['types'] = ['Webinar','Cursos','Certificaciones','Promoción y Capacitación','Capacitación','Aula SOC'];
        $data['institutions'] = Institutions::OrderBy('name')->get();
        return view('admin.new_event',$data);
    }

    public function edit_event(Request $request){
        $session = TRUE;
        $data['event'] = Events::where('id_event',$request->segment(3))->first()->toArray();
        $data['categories'] = ['Hipotecario','Empresarial','Seguros'];
        $data['types'] = ['Webinar','Cursos','Certificaciones','Promoción y Capacitación','Capacitación','Aula SOC'];
        $data['institutions'] = Institutions::OrderBy('name')->get();
        return view('admin.new_event',$data);
    }
    
    public function upload_event(Request $request){
        $speakers = [];
        $appointment = [];
        foreach($request->input('speakers') as $s){ if(!empty($s)){ $speakers[] = $s; } }
        foreach($request->input('appointment') as $a){ if(!empty($a)){ $appointment[] = $a; } }
        
        $data = [
            'id_institution' => $request->input('id_institution'),
            'enable_event' => 1,
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            // 'video' => $request->input('video'),
            // 'image' => $request->input('image'),
            'speakers' => serialize($speakers),
            'appointment' => serialize($appointment),
            'date_start' => $request->input('date_start'),
            'date_end' => $request->input('date_end'),
            'schedule_from' => $request->input('time_start'),
            'schedule_to' => $request->input('time_end'),
        ];
        
        Events::create($data);
        
        return redirect('/admin');
    }
    
    public function update_event(Request $request){
        $speakers = [];
        $appointment = [];
        foreach($request->input('speakers') as $s){ if(!empty($s)){ $speakers[] = $s; } }
        foreach($request->input('appointment') as $a){ if(!empty($a)){ $appointment[] = $a; } }
        
        $data = [
            'id_event' => $request->input('id_event'),
            'id_institution' => $request->input('id_institution'),
            'enable_event' => 1,
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            // 'video' => $request->input('video'),
            // 'image' => $request->input('image'),
            'speakers' => serialize($speakers),
            'appointment' => serialize($appointment),
            'date_start' => $request->input('date_start'),
            'date_end' => $request->input('date_end'),
            'schedule_from' => $request->input('time_start'),
            'schedule_to' => $request->input('time_end'),
        ];
        
        Events::where('id_event', $data['id_event'])->update($data);
        
        return redirect('/admin');
    }
    
    public function enable_event(Request $request){
        $id = $request->segment(3);
        if($request->segment(2) == 'activar-evento'){
            Events::where('id_event',$id)->update(['enable_event'=>1]);
        } else{
            Events::where('id_event',$id)->update(['enable_event'=>0]);
        }
        // return redirect('/admin'.(?));
        return redirect(URL::previous());
    }
    
    public function delete_event(Request $request){
        Events::where('id_event', $request->segment(3))->delete();
        return redirect('/admin');
    }

    public function login(Request $request){
        $user = trim($request->input('user_name'));
        $pass = trim($request->input('password'));
        $keep_signed = $request->input('signed');

        if(!empty($user) && !empty($pass)){
            $count = User::where('name', $user)->where('password',$pass)->count();
            if($count <= 0){
                $count = User::where('email', $user)->where('password',$pass)->count(); }
                
            if($count > 0){
                $session['user_session'] = [
                    'user' => $user,
                    'loggedin' => TRUE,
                    'expiration' => $keep_signed != 1 ? date('Y-m-d H:i:s',strtotime('+10 minutes')) : date('Y-m-d H:i:s',strtotime('+1 year')),
                    'keep_signed' => $keep_signed,
                ];
                $request->session()->put($session);
            }
            
            $user_verification = User::where('name', $user)->orWhere('email',$user)->count();
            if($user_verification <= 0){
                return redirect('/admin')->withFail(['user_error' => html_entity_decode('El usuario es incorrecto. Verifiquelo y vuelva a intentar')]);
            }
            
            return redirect('/admin')->withFail(['pass_error' => html_entity_decode('La contrase&ntilde;a es incorrecta')]);
        }
    }
    
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/admin');
    }
}
