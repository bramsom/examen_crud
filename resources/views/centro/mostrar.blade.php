<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETALLES DE LOS CENTROS</title>
    </head>
<body>
    <div class="container">
        <h1>DATOS DEL CENTRO</h1>
        <div>
            <p>ID: {{$center->id}}</p>
            <p>CODIGO DEL CENTRO {{$center->code_center}}</p>
            <p>NOMBRE DEL CENTRO{{$center->name_center}}</p>
            <p>DIRECCION DEL CENTRO {{$center->direction_center}}</p>
            <p>POBLACION DEL CENTRO: {{$center->population}}</p>
        </div>
    </div>
</body>
</html>