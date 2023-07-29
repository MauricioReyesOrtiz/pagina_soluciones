<button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#create-portafolio">
    <i class="fa fas-plus"></i> Agregar Portafolio
</button>
<div id="create-portafolio" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Agregar Portafolio</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('portafolio.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group"><!--Nombre-->
                        <input type="text" placeholder="Escribir Nombre" required class="form-control form-control-sm" name="nombre">
                        <small id="helpId" class="text-muted">Escribir Nombre (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Descripcion Corta-->
                        <input type="text" placeholder="Escribir descripcion corta" required class="form-control form-control-sm" name="descripcion_corta">
                        <small id="helpId" class="text-muted">Escribir descripcion corta (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Descripcion Larga-->
                        <input type="text" placeholder="Escribir descripcion larga" required class="form-control form-control-sm" name="descripcion_larga">
                        <small id="helpId" class="text-muted">Escribir descripcion larga (campo obligatorio)</small>
                    </div>

                    <div class="col-md-12"><!--Imagen-->
                        <div class="form-group">
                            <input type="file" name="imagen" value="" class="form-control form-control-sm">
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
