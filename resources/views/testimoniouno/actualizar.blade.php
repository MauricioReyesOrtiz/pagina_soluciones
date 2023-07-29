<a href="#" type="button" class="btn btn-sm style-success btn-success" data-toggle="modal"
    data-target="#update-testimoniouno{{ $testimoniouno->id }}">
    <i class="fas fa-edit"></i>
</a>
<div id="update-testimoniouno{{ $testimoniouno->id }}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Modificar Comentario Cliente Uno</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('testimoniouno.update', ['id' => $testimoniouno->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group"><!--Nombre-->
                        <input required type="text" class="form-control form-control-sm" name="nombre" value="{{ $testimoniouno->nombre }}">
                        <small id="helpId" class="text-muted">Escribir Nombre (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Paterno-->
                        <input required type="text" class="form-control form-control-sm" name="paterno" value="{{ $testimoniouno->paterno }}">
                        <small id="helpId" class="text-muted">Escribir Apellido Paterno (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Materno-->
                        <input required type="text" class="form-control form-control-sm" name="materno" value="{{ $testimoniouno->materno }}">
                        <small id="helpId" class="text-muted">Escribir Apellido Materno (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Profesion-->
                        <input required type="text" class="form-control form-control-sm" name="profesion" value="{{ $testimoniouno->profesion }}">
                        <small id="helpId" class="text-muted">Escribir Profesion (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Comentario-->
                        <input type="text" class="form-control form-control-sm" name="comentario" value="{{ $testimoniouno->comentario }}">
                        <small id="helpId" class="text-muted">Escribir comentario cliente(campo obligatorio)</small>
                    </div>
                    
                    <div class="col-md-12"><!--Imagen-->
                        <div class="form-group">
                            <input type="file" name="imagen" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Seleccione una imagen (Campo obligatorio)</small>
                        </div>
                    </div>
                    <img src="{{ asset($testimoniouno->logo) }}" width="100" height="100" alt="">
                    <small id="helpId" class="text-muted">imagen actual (Al guardar se actualizara la imagen)</small>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success style-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
