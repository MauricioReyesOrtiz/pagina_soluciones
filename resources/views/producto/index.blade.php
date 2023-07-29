
<!--  PLANTILLA DE ADMINLTE  -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>LISTA DE PRODUCTOS</h1>
@stop

@section('content')
    <!---Vista Lista de Productos-->

    <!--BOTON CREAR PRODUCTO-->
    <a href="producto/create" class="btn btn-success" mb-3>CREAR PRODUCTO</a>
    
    <br><br>

    <!--TABLA MOSTRAR REGISTROS-->
    <table id="producto" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
        <thead class="bg-primary text-white">
            <tr> <!--Columnas de la tabla-->
                <th scope="col">ID</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
                <!--Mostrar los Registros de los Productos-->
            @foreach ($productos as $producto) <!---aqui se utiliza la variable $producto que contiene los registros y se le cambia el nombre-->
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>Bs.{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td width="210px" style="text-align: center">
                        <form action="{{ route ('producto.destroy',$producto->id)}}" method="POST">
                            <a href="/producto/{{ $producto->id }}/edit" class="btn btn-warning">Editar</a>
                            @csrf
                            @method('DELETE') <!--le decimos que usaremos metodo DELETE-->
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!--Contenido del Datatables con CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop


<!--Contenido de Datatables con Javascript-->
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!--Crear un tabscript para inicializar Datatables-->
<script>
    $(document).ready(function () {
        $('#producto').DataTable({
            "lengthMenu": [[3,5,10,30,50,-1], [3,5,10,30,50,"All"]],
            "language":{
                "search":   "Buscar",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "info":   "Mostrando página _PAGE_ de _PAGES_",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "first": "Primero",
                    "last": "Último",
                } 
            }
        });
    });
</script>
@stop