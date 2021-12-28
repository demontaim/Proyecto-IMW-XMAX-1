@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Enhorabuena, has iniciado sesión!') }}

                    <img src="http://pradilloarquitectura.com/wp-content/uploads/2017/05/Original-Logo-Hotel-Emperador-_-Madrid-Alta-300x285.jpg" class="img-responsive rounded mx-auto d-block">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
