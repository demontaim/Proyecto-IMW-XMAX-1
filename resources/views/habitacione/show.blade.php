@extends('layouts.app')

@section('template_title')
    {{ $habitacione->name ?? 'Show Habitacione' }}
@endsection

@section('content')
<div class="d-none">
    @if ($habitacione->categoria_id == 1)
        {{$habitacione->categoria_id = "Suite"}}
    @elseif ($habitacione->categoria_id == 2)
        {{$habitacione->categoria_id = "Simple"}}
    @elseif ($habitacione->categoria_id == 3)
        {{$habitacione->categoria_id = "Doble"}}
    @elseif ($habitacione->categoria_id == 4)
        {{$habitacione->categoria_id = "Triple"}}
    @endif
</div>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostar Habitación</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Tipo de habitación:</strong>
                            {{ $habitacione->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $habitacione->nombre }}
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habitaciones.index') }}"> Volver</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
