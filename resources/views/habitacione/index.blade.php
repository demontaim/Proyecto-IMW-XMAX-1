@extends('layouts.app')

@section('template_title')
    Habitacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de habitaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('habitaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva habitación') }}
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
                                        
										<th>Tipo de Habitación</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($habitaciones as $habitacione)

                                        <div class="d-none">
                                            @if ($habitacione->categoria_id == 1)
                                                {{$habitacione->categoria_id = "Suite"}}
                                            @elseif ($habitacione->categoria_id == 2)
                                                {{$habitacione->categoria_id = "Simple"}}
                                            @elseif ($habitacione->categoria_id == 3)
                                                {{$habitacione->categoria_id = "Doble"}}
                                            @elseif ($habitacione->categoria_id == 4)
                                                {{$habitacione->categoria_id = "Triple"}}
                                            @elseif ($habitacione->categoria_id == 5)
                                                {{$habitacione->categoria_id = "Matrimonio"}}
                                            @elseif ($habitacione->categoria_id == 6)
                                                {{$habitacione->categoria_id = "Presidencial"}}
                                            @endif
                                        </div>

                                        <tr>
                                            <td align="center">{{ ++$i }}</td>
											<td align="center">{{ $habitacione->categoria_id }}</td>
											<td align="center">{{ $habitacione->nombre }}</td>

                                            <td align="right">
                                                <form action="{{ route('habitaciones.destroy',$habitacione->id) }}" method="POST" id="form-eliminar">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('habitaciones.show',$habitacione->id) }}"><i class="fa fa-fw fa-eye"></i> Mostar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('habitaciones.edit',$habitacione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $habitaciones->links() !!}
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
