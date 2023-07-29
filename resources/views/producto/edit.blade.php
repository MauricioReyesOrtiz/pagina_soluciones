
<!-- PLANTILLA LTE -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>EDITAR PRODUCTO</h1>
@stop

@section('content')
    <!--FORMULARIO DE ENVIO DE DATOS PARA CREAR-->
<form action="/producto/{{$producto->id}}" method="POST" class="shadow p-3 mb-5 bg-body rounded bg-white"> <!--en el action se le pasa el "id" del producto a editar-->
    @csrf   <!--Genera un Token-->
    @method('PUT') <!--Con esto decimos que ocuparemos el metodo PUT para editar-->

    <div class="mb-3">
      <label for="" class="form-label">Descripción</label>
      <input id="descripcion" name="descripcion" type="text"  class="form-control" tabindex="1" value="{{$producto->descripcion}}"><!--en value se mostrar el dato de descripcion-->
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Precio</label>
      <input id="precio" name="precio" type="number" step="any" class="form-control" tabindex="2" value="{{$producto->precio}}"><!--en value se mostrar el dato de precio-->
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Stock</label>
      <input id="stock" name="stock" type="number"  class="form-control" tabindex="3" value="{{$producto->stock}}"><!--en value se mostrar el dato de stock-->
    </div>
    
    <a href="/producto" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop