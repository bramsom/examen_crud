<?php

use App\Http\Controllers\AbilityEmployeecontroller;
use App\Http\Controllers\CenterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('centro/listar', [CenterController::class, 'index'])->name('centro.index');
Route::get('centro/create', [CenterController::class, 'create']);
Route::post('centro/store', [CenterController::class, 'store'])->name('centro.store');
Route::get('centro/{center}', [CenterController::class, 'show'])->name('centro.show');
Route::put('center/{center}', [CenterController::class, 'update'])->name('centro.update');
Route::delete('centros/{center}', [CenterController::class, 'destroy'])->name('center.destroy');
Route::get('centro/{center}/editar', [CenterController::class, 'edit'])->name('center.edit');


Route::get('empleado/asociar',[AbilityEmployeecontroller::class,'asociar']);
Route::post('empleado/store',[AbilityEmployeecontroller::class,'store'])->name('habilidad_empleado.store');
