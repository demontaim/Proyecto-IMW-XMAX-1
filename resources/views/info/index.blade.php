@extends('layouts.app')



@section('content')
    <h2 class="text-center">Déjanos un mensaje</h2>


    <div class="d-flex justify-content-center align-items-center bg-secondary w-25 mx-auto rounded border border-dark">
        <form action="{{ route('info.store') }}" method="POST">
            @csrf
            <label for="Nombre" class="mt-4">
                <b>Nombre</b>
                <br>
                <input type="text" name="nombre" class="rounded">
            </label>

            <br>

            @error('nombre')
                <p><strong>{{ $message }}</strong></p>
            @enderror

            <label for="Email">
                <b>Email</b>
                <br>
                <input type="text" name="email" class="rounded">
            </label>

            <br>

            @error('email')
                <p><strong>{{ $message }}</strong></p>
            @enderror

            <label for="Mensaje">
                <b>Mensaje</b>
                <br>
                <textarea name="mensaje" rows="4" cols="22" placeholder="Escribe aquí tu mensaje..." class="rounded"></textarea>
            </label>

            <br>

            @error('mensaje')
                <p><strong>{{ $message }}</strong></p>
            @enderror

            <button type="submit" class="btn btn-primary mb-4 border border-dark">Enviar mensaje</button>

        </form>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif
@endsection
