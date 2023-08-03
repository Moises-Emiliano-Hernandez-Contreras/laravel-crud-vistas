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
    public function agregarEmpleados(Request $request){
        $empleados=new Empleados();
        $empleados->nombre=$request->nombre; 
        $empleados->edad=$request->edad; 
        $empleados->genero=$request->genero; 
        $empleados->matricula=$request->mat; 
        $empleados->cargo=$request->cargo; 
        $empleados->save();
        return redirect("/");
    }
    public function borrarEmpleado(Request $request){
        $empleado=Empleados::findOrFail($request->id);
        $empleado->destroy();
        return redirect("/");
    }
}
