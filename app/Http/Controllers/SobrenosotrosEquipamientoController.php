<?php

namespace App\Http\Controllers;

use App\Models\SobrenosotrosEquipamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SobrenosotrosEquipamientoController extends Controller
{
    public function mostrar(Request $request){
        $sobrenosotroequipamiento=SobrenosotrosEquipamiento::all();
        if($request){
            $query = trim($request->get('searchText'));
            $sobrenosotroequipamiento = SobrenosotrosEquipamiento::select('id','fecha','titulo','descripcion','logo')
            ->where('fecha','LIKE','%'.$query.'%')
            ->orWhere('titulo','LIKE','%'.$query.'%')
            ->paginate(5);
        }else{
            $sobrenosotroequipamiento = SobrenosotrosEquipamiento::paginate(5);
        }

        return view('sobrenosotroequipamiento.mostrar',[
            'sobrenosotrosequipamientos' => $sobrenosotroequipamiento, 'searchText'=>$query
        ]);
    }
    public function insertar(Request $request){
        $sobrenosotroequipamiento            = new SobrenosotrosEquipamiento();
        $sobrenosotroequipamiento->fecha    = $request->get('fecha');
        $sobrenosotroequipamiento->titulo    = $request->get('titulo');
        $sobrenosotroequipamiento->descripcion    = $request->get('descripcion');
       
        if($request->file('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $sobrenosotroequipamiento->logo = $path; 
        }else{
            $sobrenosotroequipamiento->logo = 'imagenes/sobrenosotroequipamiento.png';
        }
        
        $sobrenosotroequipamiento->save();

        return redirect('/sobrenosotroequipamiento/mostrar');

    }
    public function actualizar(Request $request){
        $sobrenosotroequipamiento            = SobrenosotrosEquipamiento::findOrFail($request->id);
        $sobrenosotroequipamiento->fecha    = $request->get('fecha');
        $sobrenosotroequipamiento->titulo    = $request->get('titulo');
        $sobrenosotroequipamiento->descripcion    = $request->get('descripcion');
        
        if($request->hasFile('imagen')){
            $path = Storage::disk('public')->put('imagenes',$request->file('imagen'));
            $sobrenosotroequipamiento->logo = $path; 
        }
    
        $sobrenosotroequipamiento->update();

        return redirect('/sobrenosotroequipamiento/mostrar');
    }
    public function eliminar(Request $request){
        $sobrenosotroequipamiento             = SobrenosotrosEquipamiento::findOrFail($request->id);
        $sobrenosotroequipamiento->delete();

        return redirect('/sobrenosotroequipamiento/mostrar');
    }
}
