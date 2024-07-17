<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>REGISTRAR CENTROS</h1>

<form action="{{route('centro.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    codigo del centro:
    <br>
    <input type="string" name="code_center">
</label>
<br>
<label>
    Nombre del centro:
    <br>
    <input type="string" name="name_center">
</label>
    <br>
<label>
    Direccion del centro:
    <br>
    <input type="string" name="direction_center">
</label>
<br>
    Poblacion:
    <br>
    <input type="string" name="population">
</label>

<button type="submit">Enviar Formulario</button>
</form>
<br>
<form action="{{route('centro.index')}}">
    <button type="submit" class="view-button">ver registros de los centros</button>
</form>
</body>
</html>