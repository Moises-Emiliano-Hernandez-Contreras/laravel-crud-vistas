<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

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

Route::get('/', [EmpleadosController::class,"listarEmpleados"]);
Route::post('/add', [EmpleadosController::class,"agregarEmpleados"]);
//Route::delete('/del/{id}', [EmpleadosController::class,"borrarEmpleado"]);
Route::delete('delete/{id}', [EmpleadosController::class,"borrarEmpleado"])->name('employed.destroy');
Route::put('edit/{id}', [EmpleadosController::class,"editEmpleado"])->name('employed.update');