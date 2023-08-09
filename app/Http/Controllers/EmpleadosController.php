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
        $empleado=Empleados::find($request->id);
        $empleado->delete();
        return redirect("/");        
    }
    public function editEmpleado(Request $request){
        $empleado=Empleados::find($request->id);
        $empleado->nombre=$request->nombre; 
        $empleado->edad=$request->edad; 
        $empleado->genero=$request->genero; 
        $empleado->matricula=$request->mat; 
        $empleado->cargo=$request->cargo; 
        $empleado->save();    
        return redirect("/");                 
    }
}
