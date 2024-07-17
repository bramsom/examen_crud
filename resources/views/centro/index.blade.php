<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista de centros</title>
    <!-- Agregamos la librería de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>lista de centros</h1>

        <table class="custom-table"> <!-- Agregamos una clase para la tabla -->
            <tr>
                <th>ID</th>
                <th>CODIGO DEL CENTRO</th>
                <th>NOMBRE DEL CENTRO</th>
                <th>DIRECCION DEL CENTRO</th>
                <th>POBLACION DEL CENTRO</th>
                <th>MOSTRAR</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            @foreach ($centers as $center)
            {{-- creo una fila --}}
            <tr>
                <td>{{$center->id}}</td>
                <td>{{$center->code_center}}</td>
                <td>{{$center->name_center}}</td>
                <td>{{$center->direction_center}}</td>
                <td>{{$center->population}}</td>
                <!-- Usamos iconos de FontAwesome para mostrar y eliminar -->
                <td><a href="{{route('centro.show', $center->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{route('center.edit', $center->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>

                <form action="{{route('center.destroy',$center->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <!-- Cambiamos el color del botón de la caneca a rosa pastel -->
                    <td><button type="submit" class="trash-button"><i class="fas fa-trash-alt"></i></button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>