<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
class EmpleadosController extends Controller
{
    //
    public function listarEmpleados(){
        $empleados=Empleados::all();
        return view("principal")->with("empleados",$empleados);
    }
}
