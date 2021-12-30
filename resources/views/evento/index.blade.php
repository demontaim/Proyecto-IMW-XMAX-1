@extends('layouts.app')

@section('content')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var calendarEl = document.getElementById("agenda");
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: "dayGridMonth",

                locale: "es",

                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth, timeGridWeek, listWeek',
                },

                dateClick: function(info) {
                    $("#evento").modal("show");
                },
            });
            calendar.render();
        });
    </script>

    <div class="container">
        <div id="agenda">

        </div>
    </div>



    <!-- Botón Modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
        Launch
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
                    <p>Aquí puedes introducir tus recordatorios.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection
