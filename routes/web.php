<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TestimoniounoController;
use App\Http\Controllers\TestimoniodoController;
use App\Http\Controllers\TestimoniotreController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\SobrenosotrosController;
use App\Http\Controllers\SobrenosotrosEquipamientoController;
use App\Http\Controllers\ContactoController;//Contacto Cliente
use App\Models\Sobrenosotros;
use App\Models\SobrenosotrosEquipamiento;
use App\Models\Testimoniodo;
use App\Models\Testimoniotre;
use App\Models\Testimoniouno;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//RUTA RAIZ
Route::get('/login', function () {
    return view('auth.login'); //redireccionar directo al login
});
//RUTA TEMPLATE CLIENTE
Route::get('/', function () {
    return view('layouts.template'); //redireccionar directo al login
});

//RUTA DEL CONTROLADOR PRODUCTO
Route::resource('producto','App\Http\Controllers\ProductoController');

//RUTA CATEGORIA
Route::get('/categoria/mostrar', [CategoriaController::class, 'mostrar'])->name('categoria.index');
Route::post('/categoria/insertar', [CategoriaController::class, 'insertar'])->name('categoria.store');
Route::post('/categoria/actualizar', [CategoriaController::class, 'actualizar'])->name('categoria.update');
Route::post('/categoria/eliminar', [CategoriaController::class, 'eliminar'])->name('categoria.delete');

//RUTA COMENTARIO UNO
Route::get('/testimoniouno/mostrar', [TestimoniounoController::class, 'mostrar'])->name('testimoniouno.index');
Route::post('/testimoniouno/insertar', [TestimoniounoController::class, 'insertar'])->name('testimoniouno.store');
Route::post('/testimoniouno/actualizar', [TestimoniounoController::class, 'actualizar'])->name('testimoniouno.update');
Route::post('/testimoniouno/eliminar', [TestimoniounoController::class, 'eliminar'])->name('testimoniouno.delete');

//RUTA COMENTARIO DOS
Route::get('/testimoniodo/mostrar', [TestimoniodoController::class, 'mostrar'])->name('testimoniodo.index');
Route::post('/testimoniodo/insertar', [TestimoniodoController::class, 'insertar'])->name('testimoniodo.store');
Route::post('/testimoniodo/actualizar', [TestimoniodoController::class, 'actualizar'])->name('testimoniodo.update');
Route::post('/testimoniodo/eliminar', [TestimoniodoController::class, 'eliminar'])->name('testimoniodo.delete');

//RUTA COMENTARIO TRES
Route::get('/testimoniotre/mostrar', [TestimoniotreController::class, 'mostrar'])->name('testimoniotre.index');
Route::post('/testimoniotre/insertar', [TestimoniotreController::class, 'insertar'])->name('testimoniotre.store');
Route::post('/testimoniotre/actualizar', [TestimoniotreController::class, 'actualizar'])->name('testimoniotre.update');
Route::post('/testimoniotre/eliminar', [TestimoniotreController::class, 'eliminar'])->name('testimoniotre.delete');

//RUTA SERVICIO
Route::get('/servicio/mostrar', [ServicioController::class, 'mostrar'])->name('servicio.index');
Route::post('/servicio/insertar', [ServicioController::class, 'insertar'])->name('servicio.store');
Route::post('/servicio/actualizar', [ServicioController::class, 'actualizar'])->name('servicio.update');
Route::post('/servicio/eliminar', [ServicioController::class, 'eliminar'])->name('servicio.delete');

//RUTA PORTAFOLIO
Route::get('/portafolio/mostrar', [PortafolioController::class, 'mostrar'])->name('portafolio.index');
Route::post('/portafolio/insertar', [PortafolioController::class, 'insertar'])->name('portafolio.store');
Route::post('/portafolio/actualizar', [PortafolioController::class, 'actualizar'])->name('portafolio.update');
Route::post('/portafolio/eliminar', [PortafolioController::class, 'eliminar'])->name('portafolio.delete');

//RUTA SOBRE NOSOTROS
Route::get('/sobrenosotro/mostrar', [SobrenosotrosController::class, 'mostrar'])->name('sobrenosotro.index');
Route::post('/sobrenosotro/insertar', [SobrenosotrosController::class, 'insertar'])->name('sobrenosotro.store');
Route::post('/sobrenosotro/actualizar', [SobrenosotrosController::class, 'actualizar'])->name('sobrenosotro.update');
Route::post('/sobrenosotro/eliminar', [SobrenosotrosController::class, 'eliminar'])->name('sobrenosotro.delete');

//RUTA SOBRE NOSOTROS EQUIPAMIENTO
Route::get('/sobrenosotroequipamiento/mostrar', [SobrenosotrosEquipamientoController::class, 'mostrar'])->name('sobrenosotroequipamiento.index');
Route::post('/sobrenosotroequipamiento/insertar', [SobrenosotrosEquipamientoController::class, 'insertar'])->name('sobrenosotroequipamiento.store');
Route::post('/sobrenosotroequipamiento/actualizar', [SobrenosotrosEquipamientoController::class, 'actualizar'])->name('sobrenosotroequipamiento.update');
Route::post('/sobrenosotroequipamiento/eliminar', [SobrenosotrosEquipamientoController::class, 'eliminar'])->name('sobrenosotroequipamiento.delete');

//ENVIAR CORREOS
//Redirecciona directamente a la ruta contacto
Route::get('/', function() {
    return redirect('/');
});

//Ruta Contacto Cliente
Route::get('/',[ContactoController::class, 'index'])->name('/.index');
Route::post('/',[ContactoController::class, 'store'])->name('/.store');


//RUTA DE AUTENTICACION CON JETSTREAM
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
