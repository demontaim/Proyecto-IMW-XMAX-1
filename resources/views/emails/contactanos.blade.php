<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electrónico</h1>
    <p>Este es el primer correo de prueba.</p>

    <p><strong>Nombre:</strong>{{$contacto['nombre']}}</p>
    <p><strong>Correo:</strong>{{$contacto['email']}}</p>
    <p><strong>Mensaje:</strong>{{$contacto['mensaje']}}</p>
</body>
</html>