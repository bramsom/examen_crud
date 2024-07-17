<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>asociacion de abilidades a empleados:</h1>

    <form action="{{route('habilidad_empleado.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>empleados:</h1>
        <select name="employee_id">
            @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->id }} - {{ $employee->phone }}</option>
            @endforeach
        </select>
        <br>
        <h1>habilidades:</h1>    
        <select name="ability_id">
            @foreach($abilities as $ability)
                <option value="{{ $ability->id }}">{{ $ability>id }} - {{ $ability->description_ability}}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>