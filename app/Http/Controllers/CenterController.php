<?php

namespace App\Http\Controllers;
use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    //
    public function create (){
        return view('centro.create');
    }

    public function store(Request $request){

        $center = new center();
        $center->code_center=$request->code_center;
        $center->name_center=$request->name_center;
        $center->direction_center=$request->direction_center;
        $center->population=$request->population;
        $center->save();
        return $request;
     }

     public function index(){

        $centers = center::orderBy('id', 'desc')->get();
        return view('centro.index', compact('centers'));
    }
    public Function show ($id){

        $center =Center::find($id);
        return view('centro/mostrar', compact('center'));

    }
     public function destroy($id) {
         $center = Center::findOrFail($id);
         $center->delete();
         return redirect()->route('centro.index');
     }
     public function edit (Center $center)
     {
         return view('centro/editar', compact('center'));
     }
    public function update(Request $request, Center $center)
    {

    $center->code_center=$request->code_center;
    $center->name_center=$request->name_center;
    $center->direction_center=$request->direction_center;
    $center->population=$request->population;
    $center->save();

    return redirect()->route('centro.index');
}
}
