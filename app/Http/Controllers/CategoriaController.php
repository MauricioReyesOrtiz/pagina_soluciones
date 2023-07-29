<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller {

    public function mostrar(Request $request){
        $categoria=Categoria::all();
        if($request){
            $query = trim($request->get('searchText'));
            $categoria = Categoria::select('id','nombre','paterno','materno','profesion','linkredsocialuno','linkredsocialdos','linkredsocialtres','logo')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orWhere('paterno','LIKE','%'.$query.'%')
            ->orWhere('materno','LIKE','%'.$query.'%')
            ->orWhere('profesion','LIKE','%'.$query.'%')
            ->paginate(10);
        }else{
            $categoria = Categoria::paginate(10);
        }

        return view('categoria.mostrar',[
            'categorias' => $categoria, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $categoria            = new Categoria();
        $categoria->nombre    = $request->get('nombre');
        $categoria->paterno    = $request->get('paterno');
        $categoria->materno    = $request->get('materno');
        $categoria->profesion    = $request->get('profesion');
        $categoria->linkredsocialuno    = $request->get('linkredsocialuno');
        $categoria->linkredsocialdos    = $request->get('linkredsocialdos');
        $categoria->linkredsocialtres    = $request->get('linkredsocialtres');
        
       
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $categoria->logo = $path; 
        }else{
            $categoria->logo = 'imagenes/categoria.png';
        }
        
        $categoria->save();

        return redirect('/categoria/mostrar');

    }
    public function actualizar(Request $request){
        $categoria            = Categoria::findOrFail($request->id);
        $categoria->nombre    = $request->get('nombre');
        $categoria->paterno    = $request->get('paterno');
        $categoria->materno    = $request->get('materno');
        $categoria->profesion    = $request->get('profesion');
        $categoria->linkredsocialuno    = $request->get('linkredsocialuno');
        $categoria->linkredsocialdos    = $request->get('linkredsocialdos');
        $categoria->linkredsocialtres    = $request->get('linkredsocialtres');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $categoria->logo = $path; 
        }
    
        $categoria->update();

        return redirect('/categoria/mostrar');
    }
    public function eliminar(Request $request){
        $categoria             = Categoria::findOrFail($request->id);
        $categoria->delete();

        return redirect('/categoria/mostrar');
    }

}