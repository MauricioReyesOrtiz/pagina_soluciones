<button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#create-categoria">
    <i class="fa fas-plus"></i> Agregar Dentista
</button>
<div id="create-categoria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Agregar Dentista</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('categoria.store') }}" method="post" enctype="multipart/form-data">
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
                    <div class="form-group"><!--Link WhatsApp-->
                        <input type="text" placeholder="Escribir Link WhatsApp"  class="form-control form-control-sm" name="linkredsocialuno">
                        <small id="helpId" class="text-muted">Escribir Link WhatsApp (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Link Facebook-->
                        <input type="text" placeholder="Escribir Link Facebook"  class="form-control form-control-sm" name="linkredsocialdos">
                        <small id="helpId" class="text-muted">Escribir Link Facebook (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--Link TikTok-->
                        <input type="text" placeholder="Escribir Link TikTok" class="form-control form-control-sm" name="linkredsocialtres">
                        <small id="helpId" class="text-muted">Escribir Link TikTok (campo obligatorio)</small>
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
