<button class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#create-sobrenosotro">
    <i class="fa fas-plus"></i> Agregar Sobre Nosotros
</button>
<div id="create-sobrenosotro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Agregar Sobre Nosotros</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('sobrenosotro.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group"><!--Fecha-->
                        <input type="text" placeholder="Escribir Fecha" required class="form-control form-control-sm" name="fecha">
                        <small id="helpId" class="text-muted">Escribir Fecha (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--titulo-->
                        <input type="text" placeholder="Escribir titulo" required class="form-control form-control-sm" name="titulo">
                        <small id="helpId" class="text-muted">Escribir titulo (campo obligatorio)</small>
                    </div>
                    
                    <div class="md-form form-group col-12"><!-- descripcion-->
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" name="descripcion" class="md-textarea form-control" rows="3" placeholder="Escribir descripcion">
                        </textarea>
                        <small id="helpId" class="text-muted">Escriba una descripcion (Campo Obligatorio)</small>
                    </div>

                    <div class="col-md-12">
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
