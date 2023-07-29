<?php

namespace App\Http\Controllers;

use App\Models\Testimoniotre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniotreController extends Controller
{
    public function mostrar(Request $request){
        $testimoniotre=Testimoniotre::all();
        if($request){
            $query = trim($request->get('searchText'));
            $testimoniotre = Testimoniotre::select('id','nombre','paterno','materno','profesion','comentario','logo')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orWhere('paterno','LIKE','%'.$query.'%')
            ->orWhere('materno','LIKE','%'.$query.'%')
            ->orWhere('profesion','LIKE','%'.$query.'%')
            ->paginate(10);
        }else{
            $testimoniotre = Testimoniotre::paginate(10);
        }

        return view('testimoniotre.mostrar',[
            'testimoniotres' => $testimoniotre, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $testimoniotre            = new Testimoniotre();
        $testimoniotre->nombre    = $request->get('nombre');
        $testimoniotre->paterno    = $request->get('paterno');
        $testimoniotre->materno    = $request->get('materno');
        $testimoniotre->profesion    = $request->get('profesion');
        $testimoniotre->comentario    = $request->get('comentario');
        
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $testimoniotre->logo = $path; 
        }else{
            $testimoniotre->logo = 'imagenes/testimoniotre.png';
        }
        
        $testimoniotre->save();

        return redirect('/testimoniotre/mostrar');

    }
    public function actualizar(Request $request){
        $testimoniotre            = Testimoniotre::findOrFail($request->id);
        $testimoniotre->nombre    = $request->get('nombre');
        $testimoniotre->paterno    = $request->get('paterno');
        $testimoniotre->materno    = $request->get('materno');
        $testimoniotre->profesion    = $request->get('profesion');
        $testimoniotre->comentario    = $request->get('comentario');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $testimoniotre->logo = $path; 
        }
    
        $testimoniotre->update();

        return redirect('/testimoniotre/mostrar');
    }
    public function eliminar(Request $request){
        $testimoniotre             = Testimoniotre::findOrFail($request->id);
        $testimoniotre->delete();

        return redirect('/testimoniotre/mostrar');
    }
}
