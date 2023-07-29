<!--  PLANTILLA DE ADMINLTE  -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>LISTA DE SOBRENOSOTROS</h1>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h3 class="m-0">Registrar Sobre Nosotros</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sobre Nosotros</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('sobrenosotro.insertar')
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        @include('sobrenosotro.buscar')
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="style-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Logo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sobrenosotros as $sobrenosotro)
                                    <tr>
                                        <td>{{ $sobrenosotro->id }}</td>
                                        <td>{{ $sobrenosotro->fecha }}</td>
                                        <td>{{ $sobrenosotro->titulo }}</td>
                                        <td>{{ $sobrenosotro->descripcion }}</td>
                                        <td><img src="{{ asset($sobrenosotro->logo) }}" width="100" height="100" alt=""></td>
                                        <td>
                                            @include('sobrenosotro.actualizar')
                                            @include('sobrenosotro.eliminar')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $sobrenosotros->links() }}
        </div>
    </section>
@stop
