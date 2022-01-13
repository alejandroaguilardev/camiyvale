<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>CAMI & VALE INDUSTRIAL S.A.C</h1>
    <p style="margin-bottom:2rem;"><strong>Asunto:</strong> {{$param['asunto']}}</p>
    <p><strong>Nombre:</strong>{{$param['nombre']}}</p>
    <p><strong>Email:</strong>{{$param['correo']}}</p>
    <p><strong>telefono:</strong>{{$param['telefono']}}</p>
    <hr>
    <p><strong>Descripción:</strong>{{$param['mensaje']}}</p>
    
</body>
</html>