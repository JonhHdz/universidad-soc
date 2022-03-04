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
    	<!-- FONTS -->
    	<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="admin block w-96 lg:mt-32 md:mt-24 mt-16 mx-auto bg-white border border-grey-200 p-5 shadow-md relative">
            <form class="Acces-Form" action="{{ URL::to('admin/login') }}" method="POST">
                @csrf
                <div class="Hd-Logo">
                    <img class="w-auto block mx-auto h-36" src="http://universidad.socasesores.com/images/universidad-logo.png" alt="" />
                </div>
                <div class="usuario my-3">
                    <input class="block bg-grey-100 w-full py-2 px-3 border-grey-200 border" type="text" name="user_name" id="usuario" placeholder="Usuario" />
                    @if(isset($fail['user_error']))
                    <span class="text-red-600 text-xs">
                       {{ $fail['user_error'] }}
                    </span>
                    @endif
                    
                </div>
    
                <div class="contrasena my-3">
                    <input class="block bg-grey-100 w-full py-2 px-3 border-grey-200 border" type="password" name="password" id="contrasena" placeholder="Contrase&ntilde;a" />
                    @if(isset($fail['pass_error']))
                    <span class="text-red-600 text-xs">
                       {{ $fail['pass_error'] }}
                    </span>
                    @endif
                    
                </div>
    
                <label>
                    <input type="checkbox" value="1" name="signed" />
                    <span class="text-xs">Mantener mi sesi&oacute;n</span>
                </label>
    
                <button class="block w-full py-2 px-3 my-3 bg-primary text-white" name="submit" type="submit">Ingresar</button>
    
                {{-- <a class="text-sm text-center font-bold block" href="{{ URL::to('panel/password') }}">No recuerdo mi n&uacute;mero de contrato</a> --}}
            </form>
        </div>
    </body>
</html>