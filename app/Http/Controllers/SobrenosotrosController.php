<?php

namespace App\Http\Controllers;

use App\Models\Sobrenosotros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SobrenosotrosController extends Controller
{
    public function mostrar(Request $request){
        $sobrenosotro=Sobrenosotros::all();
        if($request){
            $query = trim($request->get('searchText'));
            $sobrenosotro = Sobrenosotros::select('id','fecha','titulo','descripcion','logo')
            ->where('fecha','LIKE','%'.$query.'%')
            ->orWhere('titulo','LIKE','%'.$query.'%')
            ->paginate(5);
        }else{
            $sobrenosotro = Sobrenosotros::paginate(5);
        }

        return view('sobrenosotro.mostrar',[
            'sobrenosotros' => $sobrenosotro, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $sobrenosotro            = new Sobrenosotros();
        $sobrenosotro->fecha    = $request->get('fecha');
        $sobrenosotro->titulo    = $request->get('titulo');
        $sobrenosotro->descripcion    = $request->get('descripcion');
       
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $sobrenosotro->logo = $path; 
        }else{
            $sobrenosotro->logo = 'imagenes/sobrenosotro.png';
        }
        
        $sobrenosotro->save();

        return redirect('/sobrenosotro/mostrar');

    }
    public function actualizar(Request $request){
        $sobrenosotro            = Sobrenosotros::findOrFail($request->id);
        $sobrenosotro->fecha    = $request->get('fecha');
        $sobrenosotro->titulo    = $request->get('titulo');
        $sobrenosotro->descripcion    = $request->get('descripcion');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $sobrenosotro->logo = $path; 
        }
    
        $sobrenosotro->update();

        return redirect('/sobrenosotro/mostrar');
    }
    public function eliminar(Request $request){
        $sobrenosotro             = Sobrenosotros::findOrFail($request->id);
        $sobrenosotro->delete();

        return redirect('/sobrenosotro/mostrar');
    }
}
