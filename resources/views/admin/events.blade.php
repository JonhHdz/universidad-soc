<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!--[if lt IE 9]>
    	    <script>
    	        var e = ("abbr,article,aside,audio,canvas,datalist,details," +
    	        "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
    	        "progress,section,time,video").split(',');
    	        for (var i = 0; i < e.length; i++) {
    	            document.createElement(e[i]);
    	        }
    	    </script>
    	<![endif]-->
    	<title>Aula SOC</title>
    
    	<!-- TALWIND CSS -->
    	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    	<!-- CUSTOM CSS -->
    	<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
    	<link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">
    	<!-- FONTS -->
    	<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="container max-w-6xl mx-auto mb-5">
            <div class="flex md:-mx-4 mb-3 items-center">
                <figure class="md:w-1/3 px-4 w-1/2">
                    <a href="{{ URL::to('/admin') }}"><img class="w-auto h-16" src="{{ URL::asset('images/universidad-logo.png') }}" alt="" /></a>
                </figure>
                <div class="md:w-1/3 px-4 w-1/2 md:order-last text-right">
                    <a href="{{ URL::to('/admin/logout') }}" class="p-2 inline-block text-primary">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="md:inline-block hidden">Salir</span>
                    </a>
                </div>
                <div class="md:w-1/3 px-4">
                    <form class="relative block w-full">
                        <input class="text-sm focus:outline-none w-full border border-grey-200 rounded pr-14 pl-10 py-2" name="q" placeholder="Buscar evento" {{ isset($_GET['q']) && !empty($_GET['q']) ? 'value="'.$_GET['q'].'"' : '' }} />
                        <button type="submit" class="w-8 absolute inset-y-0 left-0"><i class="fa fa-search"></i></button>
                        @if(isset($_GET['q']) && !empty($_GET['q']))
                        <a href="{{ URL::to('/admin') }}" class="w-4 py-3 absolute inset-y-0 right-0 fa fa-times"></a>
                        @endif
                        
                    </form>
                </div>
            </div>
            
            <a data-fancybox data-type="iframe" class="rounded-full py-1 px-3 inline-block bg-primary text-white" href="{{ URL::to('/admin/nuevo-evento') }}">Nuevo evento <i class="inline-block ml-2 fa fa-plus"></i></a>
            
            <?php
                $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septimbre','Octubre','Noviembre','Diciembre']; ?>
            @if(!empty($events) && $events->count())
            <div class="grid md:gap-8 gap-4 lg:grid-cols-3 md:grid-cols-2 mt-3 mb-5" id="events_grid">
                @foreach($events as $key => $event)
                <?php
                    $date = !empty($event['date_start']) ? strtotime($event['date_start']) : '';
                    $date_2 = !empty($event['date_end']) ? strtotime($event['date_end']) : '';
                    $time = !empty($event['schedule_from']) ? strtotime($event['schedule_from']) : '';
                    $time_2 = !empty($event['schedule_to']) ? strtotime($event['schedule_to']) : '';
                ?>
                <div class="p-3 shadow-md rounded-md bg-green-light">
                    {{-- <a href="" data-id="1" class="view-more"><img src="http://universidad.socasesores.com/images/vuesax-twotone-more.svg"></a> --}}
                    <div class="w-full h-full flex justify-between">
                        <div class="flex h-full flex-col justify-between overflow-hidden">
                            <div class="info-event">
                                <span class="block text-sm text-green-600">{{ $event['type'].' '.$event['category'] }}</span>
                                <h4 class="text-primary text-xl font-bold mb-3">{{ $event['name'] }}</h4>
                                
                                @if(!empty($date))
                                <div class="flex mb-3">
                                    <figure class="mr-2 flex-none w-6"><img class="w-6" src="http://universidad.socasesores.com/images/vuesax-twotone-note-text.svg" alt=""></figure>
                                    <p>
                                         {{ date('d',$date).' de '.$meses[date('n',$date) - 1] }}
                                         {{ !empty($date_2) && date('Y-m-d',$date) !== date('Y-m-d',$date_2)  ? ' al '.date('d',$date_2).' de '.$meses[date('n',$date_2) - 1] : '' }}
                                    </p>
                                </div>
                                @endif
                                @if(!empty($time))
                                <div class="flex mb-3">
                                    <figure class="mr-2 flex-none w-6"><img class="w-6" src="http://universidad.socasesores.com/images/vuesax-twotone-clock.svg" alt=""></figure>
                                    <p>
                                        {{ date('H:i',$time).(!empty($time_2) ? ' - '.date('H:i',$time_2) : '') }} Hrs
                                    </p>
                                </div>
                                @endif
                                <div class="speakers flex mb-3">
                                    <figure class="mr-2 flex-none w-6"><img class="w-6" src="http://universidad.socasesores.com/images/vuesax-twotone-user.svg" alt=""></figure>
                                    <div>
                                        <?php $speakers = @unserialize($event['speakers']);
                                              $appointments = @unserialize($event['appointment']); ?>
                                        @if(!empty($speakers) && count($speakers) > 0)
                                        @for($i = 0; $i < count($speakers); $i++)
                                        <p><strong>{{ @$speakers[$i] }}</strong> {{ @$appointments[$i] }}</p>
                                        @endfor 
                                        @else
                                        <p><strong>Pendiente</strong></p>
                                        @endif
                                    </div>
                                    
                                </div>
                                
                                @if(!empty($event['description']))
                                <div class="flex mb-3">
                                    <p class="ml-8 text-sm"><small class="block text-primary font-bold">Descripci&oacute;n</small> <small>{{ $event['description'] }}</small></p>
                                </div>
                                @endif
                                
                            </div>
                            <?php /* Genero el ciclo para evitar conflicto con el orden de */ ?>
                            @if(!empty($event['id_institution']))
                                @if(!empty($institutions[$event['id_institution']]['image']))
                            <img class="justify-self-end bank block w-20" src="{{ URL::asset('images/institutions/'.$institutions[$event['id_institution']]['image']) }}" title="{{ $institutions[$event['id_institution']]['name'] }}" alt="{{ $institutions[$event['id_institution']]['name'] }}" />
                            @else
                            <span>{{ $institutions[$event['id_institution']]['name'] }}</span>
                            @endif
                            @endif
                        </div>
                        <div class="flex flex-col w-6 ml-4">
                            @if($event['enable_event'] == 1)
                            <a href="{{ URL::to('/admin/desactivar-evento/'.$event['id_event']) }}" class="cursor-pointer w-6 h-6 p-2 text-secundary fa fa-check"></a>
                            @else
                            <a href="{{ URL::to('/admin/activar-evento/'.$event['id_event']) }}" class="cursor-pointer w-6 h-6 p-2 text-red-900 fa fa-times"></a>
                            @endif
                            <a data-fancybox data-type="iframe" href="{{ URL::to('/admin/editar-evento/'.$event['id_event']) }}" class="cursor-pointer w-6 h-6 p-2 text-primary fa fa-edit"></a>
                            <a href="{{ URL::to('/admin/eliminar-evento/'.$event['id_event']) }}" class="cursor-pointer w-6 h-6 p-2 text-red-600 fa fa-trash"></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            
            {{ $events->links() }}
            
            @else
            <p>There are no data.</p>
            @endif
        </div>
    	
    	<!-- Fancybox CSS -->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
        <!-- Fancybox JS -->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <style>
            .fancybox__content{
                padding:0px;
                max-width:512px !important;
            }
        </style>
        <script>
            Fancybox.bind( "[data-fancybox]", {
                on: {
                    closing: function (fancybox, event) {
                        location.reload();
                    }
                }
            } );
        </script>
    </body>
</html>