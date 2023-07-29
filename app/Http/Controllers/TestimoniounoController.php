<?php

namespace App\Http\Controllers;

use App\Models\Testimoniouno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniounoController extends Controller
{
    public function mostrar(Request $request){
        $testimoniouno=Testimoniouno::all();
        if($request){
            $query = trim($request->get('searchText'));
            $testimoniouno = Testimoniouno::select('id','nombre','paterno','materno','profesion','comentario','logo')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orWhere('paterno','LIKE','%'.$query.'%')
            ->orWhere('materno','LIKE','%'.$query.'%')
            ->orWhere('profesion','LIKE','%'.$query.'%')
            ->paginate(10);
        }else{
            $testimoniouno = Testimoniouno::paginate(10);
        }

        return view('testimoniouno.mostrar',[
            'testimoniounos' => $testimoniouno, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $testimoniouno            = new Testimoniouno();
        $testimoniouno->nombre    = $request->get('nombre');
        $testimoniouno->paterno    = $request->get('paterno');
        $testimoniouno->materno    = $request->get('materno');
        $testimoniouno->profesion    = $request->get('profesion');
        $testimoniouno->comentario    = $request->get('comentario');
        
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $testimoniouno->logo = $path; 
        }else{
            $testimoniouno->logo = 'imagenes/testimoniouno.png';
        }
        
        $testimoniouno->save();

        return redirect('/testimoniouno/mostrar');

    }
    public function actualizar(Request $request){
        $testimoniouno            = Testimoniouno::findOrFail($request->id);
        $testimoniouno->nombre    = $request->get('nombre');
        $testimoniouno->paterno    = $request->get('paterno');
        $testimoniouno->materno    = $request->get('materno');
        $testimoniouno->profesion    = $request->get('profesion');
        $testimoniouno->comentario    = $request->get('comentario');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $testimoniouno->logo = $path; 
        }
    
        $testimoniouno->update();

        return redirect('/testimoniouno/mostrar');
    }
    public function eliminar(Request $request){
        $testimoniouno             = Testimoniouno::findOrFail($request->id);
        $testimoniouno->delete();

        return redirect('/testimoniouno/mostrar');
    }
}
