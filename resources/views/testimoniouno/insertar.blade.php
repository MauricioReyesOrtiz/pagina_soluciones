<button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#create-testimoniouno">
    <i class="fa fas-plus"></i> Agregar Comentario Cliente Uno
</button>
<div id="create-testimoniouno" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Agregar Comentario  Cliente Uno</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('testimoniouno.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group"><!--Nombre-->
                        <input type="text" placeholder="Escribir Nombre" required class="form-control form-control-sm" name="nombre">
                        <small id="helpId" class="text-muted">Escribir Nombre (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Paterno-->
                        <input type="text" placeholder="Escribir apellido paterno" required class="form-control form-control-sm" name="paterno">
                        <small id="helpId" class="text-muted">Escribir apellido paterno (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Materno-->
                        <input type="text" placeholder="Escribir apellido materno" required class="form-control form-control-sm" name="materno">
                        <small id="helpId" class="text-muted">Escribir apellido materno (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Profesion-->
                        <input type="text" placeholder="Escribir Profesion" required class="form-control form-control-sm" name="profesion">
                        <small id="helpId" class="text-muted">Escribir Profesion (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Comentario-->
                        <input type="text" placeholder="Escribir comentario de cliente"  class="form-control form-control-sm" name="comentario">
                        <small id="helpId" class="text-muted">Escribir comentario de cliente (campo obligatorio)</small>
                    </div>

                    <div class="col-md-12"><!--Imagen-->
                        <div class="form-group">
                            <input type="file" required name="imagen" value="" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Seleccione una imagen (Campo obligatorio)</small>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
