<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortafolioController extends Controller
{
    public function mostrar(Request $request){
        $portafolio=Portafolio::all();
        if($request){
            $query = trim($request->get('searchText'));
            $portafolio = Portafolio::select('id','nombre','descripcion_corta','descripcion_larga','logo')
            ->where('nombre','LIKE','%'.$query.'%')
            ->paginate(6);
        }else{
            $portafolio = Portafolio::paginate(6);
        }

        return view('portafolio.mostrar',[
            'portafolios' => $portafolio, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $portafolio            = new Portafolio();
        $portafolio->nombre    = $request->get('nombre');
        $portafolio->descripcion_corta    = $request->get('descripcion_corta');
        $portafolio->descripcion_larga    = $request->get('descripcion_larga');
       
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $portafolio->logo = $path; 
        }else{
            $portafolio->logo = 'imagenes/servicio.png';
        }
        
        $portafolio->save();

        return redirect('/portafolio/mostrar');

    }
    public function actualizar(Request $request){
        $portafolio            = Portafolio::findOrFail($request->id);
        $portafolio->nombre    = $request->get('nombre');
        $portafolio->descripcion_corta    = $request->get('descripcion_corta');
        $portafolio->descripcion_larga    = $request->get('descripcion_larga');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $portafolio->logo = $path; 
        }
    
        $portafolio->update();

        return redirect('/portafolio/mostrar');
    }
    public function eliminar(Request $request){
        $portafolio             = Portafolio::findOrFail($request->id);
        $portafolio->delete();

        return redirect('/portafolio/mostrar');
    }
}
