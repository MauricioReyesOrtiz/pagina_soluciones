<!--  PLANTILLA DE ADMINLTE  -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>LISTA DE DENTISTAS</h1>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h3 class="m-0">Registrar Dentista</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dentista</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('categoria.insertar')
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        @include('categoria.buscar')
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
                                    <th>Link Red Social WhatsApp</th>
                                    <th>Link Red Social Facebook</th>
                                    <th>Link Red Social Tik Tok</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{ $categoria->id }}</td>
                                        <td><img src="{{ asset($categoria->logo) }}" width="100" height="100" alt=""></td>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>{{ $categoria->paterno }} {{ $categoria->materno }}</td>
                                        <td>{{ $categoria->profesion }}</td>
                                        <td>{{ $categoria->linkredsocialuno }}</td>
                                        <td>{{ $categoria->linkredsocialdos }}</td>
                                        <td>{{ $categoria->linkredsocialtres }}</td>
                                        <td>
                                            @include('categoria.actualizar')
                                            @include('categoria.eliminar')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $categorias->links() }}
        </div>
    </section>
@stop
