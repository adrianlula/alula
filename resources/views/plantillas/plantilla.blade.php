

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <style>
    .activo{
        color:red;
        font: optional; 
    }
    </style>
</head>
<body>
    
@include('plantillas.partes.heder')

@yield('cuerpo')

</body>
</html>