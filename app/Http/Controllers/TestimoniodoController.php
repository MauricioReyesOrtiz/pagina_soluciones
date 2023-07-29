<?php

namespace App\Http\Controllers;

use App\Models\Testimoniodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniodoController extends Controller
{
    public function mostrar(Request $request){
        $testimoniodo=Testimoniodo::all();
        if($request){
            $query = trim($request->get('searchText'));
            $testimoniodo = Testimoniodo::select('id','nombre','paterno','materno','profesion','comentario','logo')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orWhere('paterno','LIKE','%'.$query.'%')
            ->orWhere('materno','LIKE','%'.$query.'%')
            ->orWhere('profesion','LIKE','%'.$query.'%')
            ->paginate(10);
        }else{
            $testimoniodo = Testimoniodo::paginate(10);
        }

        return view('testimoniodo.mostrar',[
            'testimoniodos' => $testimoniodo, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $testimoniodo            = new Testimoniodo();
        $testimoniodo->nombre    = $request->get('nombre');
        $testimoniodo->paterno    = $request->get('paterno');
        $testimoniodo->materno    = $request->get('materno');
        $testimoniodo->profesion    = $request->get('profesion');
        $testimoniodo->comentario    = $request->get('comentario');
        
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $testimoniodo->logo = $path; 
        }else{
            $testimoniodo->logo = 'imagenes/testimoniodo.png';
        }
        
        $testimoniodo->save();

        return redirect('/testimoniodo/mostrar');

    }
    public function actualizar(Request $request){
        $testimoniodo            = Testimoniodo::findOrFail($request->id);
        $testimoniodo->nombre    = $request->get('nombre');
        $testimoniodo->paterno    = $request->get('paterno');
        $testimoniodo->materno    = $request->get('materno');
        $testimoniodo->profesion    = $request->get('profesion');
        $testimoniodo->comentario    = $request->get('comentario');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $testimoniodo->logo = $path; 
        }
    
        $testimoniodo->update();

        return redirect('/testimoniodo/mostrar');
    }
    public function eliminar(Request $request){
        $testimoniodo             = Testimoniodo::findOrFail($request->id);
        $testimoniodo->delete();

        return redirect('/testimoniodo/mostrar');
    }
}
