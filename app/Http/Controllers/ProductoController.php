<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; //con esto le decimos que usaremos el Modelo Producto

class ProductoController extends Controller
{
    //PROTEGER VISTA DE LA PLANTILLA PARA QUE NO SE PUEDA ENTRAR
    //SIN HABERSE LOGUEADO
    public function __construct(){
        $this->middleware('auth');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosproductos = Producto::all();
        return view('producto.index')->with('productos',$datosproductos);
    }                 //vista index   |  se envia 2 paremetros(producto y la variable que contiene los registros)

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna la vista create.blade.php de Producto
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        //Crear un objeto del Modelo(es una clase) Producto
        $producto = new Producto();

        //CAPTURAR LOS DATOS ENVIADOS DESDE EL FORMULARIO
        //esto funciona igual como en PHP normal con $_POST['txtNombre'];
        
        $producto->descripcion = $request->get('descripcion');//se captura con el metodo get y se lo pasa al objeto con la variable descripcion
        $producto->precio = $request->get('precio');
        $producto->stock = $request->get('stock');
        //guardar los datos en la tabla
        $producto->save();
        //redireccionar a la ruta producto al guardar, para ver el nuevo registro guardado
        return redirect('/producto'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //EDITAR PRODUCTO
        $datosproducto = Producto::find($id);//con metodo find,solo trae los datos del id que le pasemos
        return view('producto.edit')->with('producto',$datosproducto);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ///Crear un objeto del Modelo(es una clase) Producto
        $producto = new Producto();

        //CAPTURAR LOS DATOS A EDITAR
        $producto = Producto::find($id);//agarra el id a editar

        $producto->descripcion = $request->get('descripcion');//se captura con el metodo get y se lo pasa al objeto con la variable descripcion
        $producto->precio = $request->get('precio');
        $producto->stock = $request->get('stock');
        //guardar los datos en la tabla
        $producto->save();
        //redireccionar a la ruta producto al editar, para ver el nuevo registro editado
        return redirect('/producto'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar Producto
        $producto = Producto::find($id);//captura el id del producto a eliminar
        $producto->delete();//luego aqui ya lo elimina con el metodo delete
        return redirect('/producto');//recarga la pagina para que ver los cambios
    }
}
