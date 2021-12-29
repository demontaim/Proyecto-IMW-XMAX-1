@extends('layouts.app')

@section('template_title')
    {{ $opinione->name ?? 'Show Opinione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostar Opinión</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('opiniones.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Opinion:</strong>
                            {{ $opinione->opinion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
