<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>EDICION DE DATOS DE LOS CENTROS</title>
</head>
<body>
    <div class="container">
        <h1>EDICION DE DATOS</h1>

        <form action="{{route('centro.update', $center->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label>
                codigo del centro:
                <br>
                <input type="string" name="code_center" value= "{{ $center->code_center }}" placeholder="codigo del centro">
            </label>
            <br>
            <label>
                nombre del centro:
                <br>
                <input type="string" name="name_center" value="{{ $center->name_center }}" placeholder="nombre del centro">
            </label>
            <br>
            <label>
                direccion del centro:
                <br>
                <input type="string" name="direction_center" value= "{{ $center->direction_center }}" placeholder="direccion del centro">
            </label>
            <br>
            <label>
                poblacion del centro:
                <br>
                <input type="string" name="population" value= "{{ $center->population }}" placeholder="poblacion del centro">
            </label>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>