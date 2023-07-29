<!--  PLANTILLA DE ADMINLTE  -->
@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>LISTA DE PORTAFOLIOS</h1>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h3 class="m-0">Registrar Portafolio</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Portafolio</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('portafolio.insertar')
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        @include('portafolio.buscar')
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="style-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Portafolio</th>
                                    <th>Descripcion Corta</th>
                                    <th>Descripcion Larga</th>
                                    <th>Logo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portafolios as $portafolio)
                                    <tr>
                                        <td>{{ $portafolio->id }}</td>
                                        <td>{{ $portafolio->nombre }}</td>
                                        <td>{{ $portafolio->descripcion_corta }}</td>
                                        <td>{{ $portafolio->descripcion_larga }}</td>
                                        <td><img src="{{ asset($portafolio->logo) }}" width="100" height="100" alt=""></td>
                                        <td>
                                            @include('portafolio.actualizar')
                                            @include('portafolio.eliminar')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $portafolios->links() }}
        </div>
    </section>
@stop
