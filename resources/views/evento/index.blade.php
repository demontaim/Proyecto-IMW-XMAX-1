@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div id="agenda">

        </div>
    </div>


    <!-- Botón Modal -->
    <button type="button" class="btn btn-primary btn-lg d-none" data-toggle="modal" data-target="#evento">
        Modal
    </button>

    <!--Modal-->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="formulario">

                        <div class="form-group">
                            <label for="id">ID:</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="Escribe el Título del Evento..." aria-describedby="helpId">
                            <small id="" class="form-text text-muted">Cena Italiana en el Restaurante Principal...</small>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Escribe el Título del Evento..." aria-describedby="helpId">
                            <small id="" class="form-text text-muted">Aquí puedes poner un título que describa el recordatorio...</small>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="start">Comienza</label>
                            <input type="text" class="form-control" name="start" id="start" placeholder="Escribe el Título del Evento..." aria-describedby="helpId">
                            <small id="" class="form-text text-muted">Help Text</small>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="end">Finaliza</label>
                            <input type="text" class="form-control" name="end" id="end" placeholder="Escribe el Título del Evento..." aria-describedby="helpId">
                            <small id="" class="form-text text-muted">Help Text</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



@endsection
