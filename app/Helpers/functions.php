<?php
use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Portafolio;
use App\Models\Sobrenosotros;
use App\Models\SobrenosotrosEquipamiento;
use App\Models\Testimoniodo;
use App\Models\Testimoniotre;
use App\Models\Testimoniouno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

function categorias(){
    $categoria= Categoria::all();
    return $categoria;
}

function categoria($id){
    $categoria = Categoria::findOrFail($id);
    return $categoria;
}

function servicios(){
    $servicio= Servicio::all();
    return $servicio;
}

function servicio($id){
    $servicio = Servicio::findOrFail($id);
    return $servicio;
}

function portafolios(){
    $portafolio= Portafolio::all();
    return $portafolio;
}

function portafolio($id){
    $portafolio = Portafolio::findOrFail($id);
    return $portafolio;
}

function sobrenosotros(){
    $sobrenosotro= Sobrenosotros::all();
    return $sobrenosotro;
}

function sobrenosotro($id){
    $sobrenosotro = Sobrenosotros::findOrFail($id);
    return $sobrenosotro;
}

function sobrenosotroequipamientos(){
    $sobrenosotroequipamiento= SobrenosotrosEquipamiento::all();
    return $sobrenosotroequipamiento;
}

function sobrenosotroequipamiento($id){
    $sobrenosotroequipamiento = SobrenosotrosEquipamiento::findOrFail($id);
    return $sobrenosotroequipamiento;
}

function testimoniounos(){
    $testimoniouno= Testimoniouno::all();
    return $testimoniouno;
}

function testimoniodos(){
    $testimoniodo= Testimoniodo::all();
    return $testimoniodo;
}
function testimoniotres(){
    $testimoniotre= Testimoniotre::all();
    return $testimoniotre;
}


?>