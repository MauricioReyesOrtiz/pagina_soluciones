<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function mostrar(Request $request){
        $servicio=Servicio::all();
        if($request){
            $query = trim($request->get('searchText'));
            $servicio = Servicio::select('id','nombre','descripcion','logo')
            ->where('nombre','LIKE','%'.$query.'%')
            ->paginate(10);
        }else{
            $servicio = Servicio::paginate(10);
        }

        return view('servicio.mostrar',[
            'servicios' => $servicio, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $servicio            = new Servicio();
        $servicio->nombre    = $request->get('nombre');
        $servicio->descripcion    = $request->get('descripcion');
       
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $servicio->logo = $path; 
        }else{
            $servicio->logo = 'imagenes/servicio.png';
        }
        
        $servicio->save();

        return redirect('/servicio/mostrar');

    }
    public function actualizar(Request $request){
        $servicio            = Servicio::findOrFail($request->id);
        $servicio->nombre    = $request->get('nombre');
        $servicio->descripcion    = $request->get('descripcion');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $servicio->logo = $path; 
        }
    
        $servicio->update();

        return redirect('/servicio/mostrar');
    }
    public function eliminar(Request $request){
        $servicio             = Servicio::findOrFail($request->id);
        $servicio->delete();

        return redirect('/servicio/mostrar');
    }
}
