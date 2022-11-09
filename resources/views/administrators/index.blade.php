@extends('layouts.panel')

@section('template_title')
    Administradores
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administradores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('administrators.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                    <tr>
                                        <th>ID</th>

										<th>Nombre</th>
										<th>Correo</th>
                                        <th>Direccion</th>
                                        <th>Cedula</th>
                                        <th>Rol</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administrators as $administrator)
                                        <tr>

											<td>{{ $administrator->id }}</td>
                                            <td>{{ $administrator->name }}</td>
											<td>{{ $administrator->email }}</td>
                                            <td>{{ $administrator->address }}</td>
                                            <td>{{ $administrator->identity_card }}</td>
                                            <td>{{ $administrator->role }}</td>

                                            <td>
                                                <form action="{{ route('administrators.destroy',$administrator->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('administrators.edit',$administrator->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
