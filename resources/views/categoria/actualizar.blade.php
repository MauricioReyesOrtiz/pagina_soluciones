<a href="#" type="button" class="btn btn-sm style-success btn-success" data-toggle="modal"
    data-target="#update-categoria{{ $categoria->id }}">
    <i class="fas fa-edit"></i>
</a>
<div id="update-categoria{{ $categoria->id }}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Modificar Dentista</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('categoria.update', ['id' => $categoria->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group"><!--Nombre-->
                        <input required type="text" class="form-control form-control-sm" name="nombre" value="{{ $categoria->nombre }}">
                        <small id="helpId" class="text-muted">Escribir Nombre (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Paterno-->
                        <input required type="text" class="form-control form-control-sm" name="paterno" value="{{ $categoria->paterno }}">
                        <small id="helpId" class="text-muted">Escribir Apellido Paterno (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Materno-->
                        <input required type="text" class="form-control form-control-sm" name="materno" value="{{ $categoria->materno }}">
                        <small id="helpId" class="text-muted">Escribir Apellido Materno (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Profesion-->
                        <input required type="text" class="form-control form-control-sm" name="profesion" value="{{ $categoria->profesion }}">
                        <small id="helpId" class="text-muted">Escribir Profesion (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Link Red Social WhatsApp-->
                        <input type="text" class="form-control form-control-sm" name="linkredsocialuno" value="{{ $categoria->linkredsocialuno }}">
                        <small id="helpId" class="text-muted">Escribir Link Red Social WhatsApp (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Link Red Social Facebook-->
                        <input type="text" class="form-control form-control-sm" name="linkredsocialdos" value="{{ $categoria->linkredsocialdos }}">
                        <small id="helpId" class="text-muted">Escribir Link Red Social Facebook (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Link Red Social TikTok-->
                        <input type="text" class="form-control form-control-sm" name="linkredsocialtres" value="{{ $categoria->linkredsocialtres }}">
                        <small id="helpId" class="text-muted">Escribir Link Red Social TikTok (campo obligatorio)</small>
                    </div>
                    <div class="col-md-12"><!--Imagen-->
                        <div class="form-group">
                            <input type="file" name="imagen" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Seleccione una imagen (Campo obligatorio)</small>
                        </div>
                    </div>
                    <img src="{{ asset($categoria->logo) }}" width="100" height="100" alt="">
                    <small id="helpId" class="text-muted">imagen actual (Al guardar se actualizara la imagen)</small>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success style-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
