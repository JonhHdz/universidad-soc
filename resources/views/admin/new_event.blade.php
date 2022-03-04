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
    <body class="relative p-9">
        <div class="loader"><div><div><span></span></div></div></div>
        <div class="container max-w-6xl mx-auto">
            <?php /*
            <figure>
                <img class="w-auto block mx-auto h-16" src="{{ URL::asset('images/universidad-logo.png') }}" alt="" />
            </figure>
            */ ?>
            <form class="max-w-lg mx-auto block mb-4" action="{{ Request::segment(2) == 'nuevo-evento' ? URL::to('admin/upload_event') : URL::to('admin/update_event') }}" method="POST">
                @csrf
                <input type="hidden" name="id_event" value="{{ @$event['id_event'] }}" />
                <div class="mb-3">
                    <label>Tipo de evento</label>
					<div class="relative bg-white text-black border border-grey-200 rounded">
						<span class="absolute z-0 w-8 inset-y-0 flex items-center justify-center right-0 text-gray-400"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
						<select name="type" class="relative z-10 bg-transparent appearance-none w-full h-10 pl-2 pr-8 text-gray-400 text-sm focus:outline-none">
							<option {{ !isset($event['type']) || empty($event['type']) ? 'selected' : '' }} disabled class="bg-white text-black">Selecciona un tipo de evento</option>
							@foreach($types as $type)
							<option {{ $type == @$event['type'] ? 'selected' : '' }} value="{{ $type }}">{{ $type }}</option>
							@endforeach
						</select>
					</div>
                </div>
                <div class="mb-3">
                    <label>L&iacute;nea de negocio</label>
					<div class="relative bg-white text-black border border-grey-200 rounded">
						<span class="absolute z-0 w-8 inset-y-0 flex items-center justify-center right-0 text-gray-400"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
						<select name="category" class="relative z-10 bg-transparent appearance-none w-full h-10 pl-2 pr-8 text-gray-400 text-sm focus:outline-none">
							<option {{ !isset($event['category']) || empty($event['category']) ? 'selected' : '' }} disabled class="bg-white text-black">Selecciona la línea de negocio</option>
							@foreach($categories as $category)
							<option {{ $category == @$event['category'] ? 'selected' : '' }} value="{{ $category }}">{{ $category }}</option>
							@endforeach
						</select>
					</div>
                </div>
                <div class="mb-3">
                    <label>Tema</label>
                    <input value="{{ @$event['name'] }}" name="name" placeholder="Ej. Productos y Herramientas SOC" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                </div>
                <div class="mb-3">
                    <label>Fecha</label>
                    <div class="grid md:gap-x-8 gap-x-4 gap-y-8 grid-cols-2">
                        <div>
                            <input id="date1" value="{{ isset($event['date_start']) && !empty($event['date_start']) ? date('Y-m-d',strtotime($event['date_start'])) : '' }}" name="date_start" placeholder="dd / mm / aaaa" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="date" />
                        </div>
                        <div>
                            <input id="date2" value="{{ isset($event['date_end']) && !empty($event['date_end']) ? date('Y-m-d',strtotime($event['date_end'])) : '' }}" name="date_end" placeholder="dd / mm / aaaa" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="date" />
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Horario</label>
                    <div class="grid md:gap-x-8 gap-x-4 gap-y-8 grid-cols-2">
                        <div>
                            <input id="time1" value="{{ isset($event['schedule_from']) && !empty($event['schedule_from']) ? date('H:i',strtotime($event['schedule_from'])) : '' }}" name="time_start" placeholder="HH:mm" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                        </div>
                        <div>
                            <input id="time2" value="{{ isset($event['schedule_to']) && !empty($event['schedule_to']) ? date('H:i',strtotime($event['schedule_to'])) : '' }}" name="time_end" placeholder="HH:mm" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                        </div>
                    </div>
                </div>
                <div id="speakers" class="grid sm:grid-cols-2 md:gap-x-8 gap-x-4 gap-y-2 mb-3">
                    <?php $speakers = @unserialize($event['speakers']);
                          $appointments = @unserialize($event['appointment']); ?>
                    @if(!empty($speakers) && count($speakers) > 0)
                    @for($i = 0; $i < count($speakers); $i++)
                                    
                    <div>
                        <label {{ $i > 0 ? 'class="md:hidden"' : '' }}>Ponente</label>
                        <input value="{{ $speakers[$i] }}" name="speakers[]" placeholder="Ej. Juan H&eacute;rnandez" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                    </div>
                    <div>
                        <label {{ $i > 0 ? 'class="md:hidden"' : '' }}>Cargo</label>
                        <input value="{{ $appointments[$i] }}" name="appointment[]" placeholder="Ej. Ejecutivo de capacitaci&oacute;n" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                    </div>
                    @endfor
                    @else
                    <div>
                        <label>Ponente</label>
                        <input name="speakers[]" placeholder="Ej. Juan H&eacute;rnandez" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                    </div>
                    <div>
                        <label>Cargo</label>
                        <input name="appointment[]" placeholder="Ej. Ejecutivo de capacitaci&oacute;n" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" />
                    </div>
                    @endif
                    
                    <div>
                        <a id="add_speaker" class="text-sm text-gray-400 font-light cursor-pointer">+ A&ntilde;adir <i>Ponente</i></a>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Instituci&oacute;n que imparte la actividad</label>
					<div class="relative bg-white text-black border border-grey-200 rounded">
						<span class="absolute z-0 w-8 inset-y-0 flex items-center justify-center right-0 text-gray-400"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
						<select name="id_institution" class="relative z-10 bg-transparent appearance-none w-full h-10 pl-2 pr-8 text-gray-400 text-sm focus:outline-none">
							<option {{ !isset($event['id_institution']) || empty($event['id_institution']) ? 'selected' : '' }} disabled class="bg-white text-black">Selecciona instituci&oacute;n</option>
							@foreach($institutions as $institution)
							<option {{ $institution['id_institution'] == @$event['id_institution'] ? 'selected' : '' }} value="{{ $institution['id_institution'] }}">{{ $institution['name'] }}</option>
							@endforeach
							
						</select>
					</div>
                </div>
                <div class="mb-3">
                    <label>Descripci&oacute;n del evento</label>
                    <textarea name="description" placeholder="Ej. A trav&eacute;s de esta certificaci&oacute;n podr&aacute;s especializarte y conocer el detalle del producto ..." class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2">{{ @$event['description'] }}</textarea>
                </div>
                <div>
                    <button type="submit" class="font-bold text-white bg-secundary rounded py-1 block mx-auto w-36">Guardar</button>
                </div>
            </form>
        </div>
    </body>
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $('form').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url: $('form').attr('action'),
                type: 'post',
                data: $('form').serialize(),
			    beforeSend: function() {
			    	$('.loader').addClass('loading');
			    },
                success: function (res) {
                    window.parent.Fancybox.close();
                },
			    error: function (x) {
			    	console.log(x);
			    }
            });
        });
        
        $('#add_speaker').on('click',function(){
            var structure = '<div><label>Ponente</label><input name="speakers[]" placeholder="Ej. Juan H&eacute;rnandez" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" /></div><div><label>Cargo</label><input name="appointment[]" placeholder="Ej. Ejecutivo de capacitaci&oacute;n" class="text-sm focus:outline-none w-full border border-grey-200 rounded px-4 py-2" type="text" /></div>';
            $(structure).insertBefore($(this).parent());
        });
            
        $("#date1").flatpickr({
            dateFormat: "Y-m-d",
            // minDate: "today",
            "locale": {
                "firstDayOfWeek": 1 // set start day of week to Monday
            },
        });
        $("#date2").flatpickr({
            dateFormat: "Y-m-d",
            // minDate: "today",
            "locale": {
                "firstDayOfWeek": 1 // set start day of week to Monday
            },
        });
        $("#time1").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });
        $("#time2").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });
    </script>
    <style>
        .loader{
            opacity: 0;
            -webkit-transition: opacity ease-in-out 0.3s;
            -o-transition: opacity ease-in-out 0.3s;
            transition: opacity ease-in-out 0.3s;
        }
        
        .loader.loading{
            opacity: 1;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.35);
            z-index: 5; }
        
        .loader > div{
            width: 100%;
            height: 100%;
            display: table; }
        
        .loader > div > div{
            display: table-cell;
            vertical-align: middle;
            text-align: center; }
        
        .loader.loading span,
        .loader.loading span:before,
        .loader.loading span:after {
            background: #FFF;
            -webkit-animation: load 1s infinite ease-in-out;
            animation: load 1s infinite ease-in-out;
            width: 1em;
            height: 4em; }
        
        .loader.loading span:before,
        .loader.loading span:after {
            position: absolute;
            top: 0;
            content: ''; }
        
        .loader.loading span:before {
            left: -1.5em; }
        
        .loader.loading span {
            display: inline-block;
            text-indent: -9999em;
            position: relative;
            font-size: 11px;
            -webkit-animation-delay: 0.16s;
            animation-delay: 0.16s; }
        
        .loader.loading span:after {
            left: 1.5em;
            -webkit-animation-delay: 0.32s;
            animation-delay: 0.32s; }
        
        @-webkit-keyframes load {
            0%,
            80%,
            100% {
                box-shadow: 0 0 #FFF;
                height: 4em;
            }
            40% {
                box-shadow: 0 -2em #ffffff;
                height: 5em;
            }
        }
        
        @keyframes load {
            0%,
            80%,
            100% {
                box-shadow: 0 0 #FFF;
                height: 4em;
            }
            40% {
                box-shadow: 0 -2em #ffffff;
                height: 5em;
            }
        }
    </style>
</html>