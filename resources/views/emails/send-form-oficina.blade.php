<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
    <p>Estos son los datos del interesado:</p>
    <ul>
        <li>Nombre: {{ $request->name }}</li>
        <li>Email: {{ $request->email }}</li>
        <li>Tipo de certificación: {{ $request->type }}</li>
        <li>Nombre de la franquicia: {{ $request->franquicia }}</li>
        <li>Estado: {{ $request->estado }}</li>
        <li>Zona: {{ $request->zona }}</li>
    </ul>
</body>
</html>