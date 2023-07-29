<!--  PLANTILLA DE ADMINLTE  -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>LISTA DE COMENTARIO CLIENTE DOS</h1>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h3 class="m-0">Registrar Comentario Cliente Dos</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Comentario Dos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('testimoniodo.insertar')
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        @include('testimoniodo.buscar')
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="style-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Logo</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Profesion</th>
                                    <th>Comentario Cliente</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimoniodos as $testimoniodo)
                                    <tr>
                                        <td>{{ $testimoniodo->id }}</td>
                                        <td><img src="{{ asset($testimoniodo->logo) }}" width="100" height="100" alt=""></td>
                                        <td>{{ $testimoniodo->nombre }}</td>
                                        <td>{{ $testimoniodo->paterno }} {{ $testimoniodo->materno }}</td>
                                        <td>{{ $testimoniodo->profesion }}</td>
                                        <td>{{ $testimoniodo->comentario }}</td>
                                        <td>
                                            @include('testimoniodo.actualizar')
                                            @include('testimoniodo.eliminar')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $testimoniodos->links() }}
        </div>
    </section>
@stop
