<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use App\Models\Employee;
use Illuminate\Http\Request;

class AbilityEmployeecontroller extends Controller
{
    //

    public function asociar(){
        $employees= Employee::all();
        $abilities= Ability::all();
        
        return view('habilidad_empleado.asociar', compact('employees','abilities'));
    }

    public function store(Request $request){
        $employee=Employee::find($request->employee_id);

        $employee->Abilities()->attach($request->ability_id);

        return 'SE HA CREADO UNA NUEVA ASOCIACION DE EMPLEADOS Y HABILIDADES CON EXITO';
    }
}
