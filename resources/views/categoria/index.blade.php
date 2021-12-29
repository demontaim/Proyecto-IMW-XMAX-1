@extends('layouts.app')

@section('template_title')
    Categoria
@endsection

@section('content')
    <div class="container-fluid" id="panel-control">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Categorías') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear una nueva categoría') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr align="center">
                                        <th>No</th>

                                        <th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td align="center">{{ ++$i }}</td>

                                            <td align="center">{{ $categoria->nombre }}</td>

                                            <td align="right">
                                                <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                    method="POST" id="form-eliminar">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('categorias.show', $categoria->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('categorias.edit', $categoria->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm btn-eliminar"><i
                                                            class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#form-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro de que quieres borrarlo?',
                text: "No podrás revertir estos cambios.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, continuar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire(
                    //     '¡Borrado!',
                    //     'Tú categoría ha sido correctamente borrada.',
                    //     'success'
                    // )
                    this.submit();
                }
                

            })
        })
    </script>
@endsection

@include('sweetalert::alert')
