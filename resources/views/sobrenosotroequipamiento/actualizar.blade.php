<a href="#" type="button" class="btn btn-sm style-success btn-success" data-toggle="modal"
    data-target="#update-sobrenosotroequipamiento{{ $sobrenosotroequipamiento->id }}">
    <i class="fas fa-edit"></i>
</a>
<div id="update-sobrenosotroequipamiento{{ $sobrenosotroequipamiento->id }}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header style-warning">
                <h5 class="modal-title" id="my-modal-title">Modificar Sobre Nosotros Equipamiento</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('sobrenosotroequipamiento.update', ['id' => $sobrenosotroequipamiento->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group"><!--fecha-->
                        <input required type="text" class="form-control form-control-sm" name="fecha" value="{{ $sobrenosotroequipamiento->fecha }}">
                        <small id="helpId" class="text-muted">Escribir Fecha (campo obligatorio)</small>
                    </div>
                    <div class="form-group"><!--titulo-->
                        <input required type="text" class="form-control form-control-sm" name="titulo" value="{{ $sobrenosotroequipamiento->titulo }}">
                        <small id="helpId" class="text-muted">Escribir Titulo (campo obligatorio)</small>
                    </div>

                    <div class="md-form form-group col-12"> <!--DESCRIPCION-->
                        <label for="form10">Descripcion</label>
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" name="descripcion" class="md-textarea form-control" rows="3" placeholder="{{ $sobrenosotroequipamiento->descripcion }}"></textarea>
                        <small id="helpId" class="text-muted">Escriba una descripcion (Campo Obligatorio)</small>
                    </div>

                    <div class="col-md-12"><!--Imagen-->
                        <div class="form-group">
                            <input type="file" name="imagen" class="form-control form-control-sm">
                            <small id="helpId" class="text-muted">Seleccione una imagen (Campo obligatorio)</small>
                        </div>
                    </div>
                    <img src="{{ asset($sobrenosotroequipamiento->logo) }}" width="100" height="100" alt="">
                    <small id="helpId" class="text-muted">imagen actual (Al guardar se actualizara la imagen)</small>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success style-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
