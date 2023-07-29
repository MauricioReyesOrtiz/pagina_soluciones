<!--  PLANTILLA DE ADMINLTE  -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>LISTA DE COMENTARIO CLIENTE UNO</h1>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h3 class="m-0">Registrar Comentario Cliente Uno</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Comentario Uno</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('testimoniouno.insertar')
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        @include('testimoniouno.buscar')
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
                                @foreach ($testimoniounos as $testimoniouno)
                                    <tr>
                                        <td>{{ $testimoniouno->id }}</td>
                                        <td><img src="{{ asset($testimoniouno->logo) }}" width="100" height="100" alt=""></td>
                                        <td>{{ $testimoniouno->nombre }}</td>
                                        <td>{{ $testimoniouno->paterno }} {{ $testimoniouno->materno }}</td>
                                        <td>{{ $testimoniouno->profesion }}</td>
                                        <td>{{ $testimoniouno->comentario }}</td>
                                        <td>
                                            @include('testimoniouno.actualizar')
                                            @include('testimoniouno.eliminar')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $testimoniounos->links() }}
        </div>
    </section>
@stop
