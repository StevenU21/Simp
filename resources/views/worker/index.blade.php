@extends('layouts.panel')

@section('template_title')
    Trabajadores
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajadores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('workers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Telefono Personal</th>
										<th>Direccion</th>
										<th>Especialidad</th>
										<th>ID Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workers as $worker)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $worker->name }}</td>
											<td>{{ $worker->last_name }}</td>
											<td>{{ $worker->phone_number }}</td>
											<td>{{ $worker->address }}</td>
											<td>{{ $worker->specialty }}</td>
											<td>{{ $worker->category_id }}</td>

                                            <td>
                                                <form action="{{ route('workers.destroy',$worker->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('workers.edit',$worker->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $workers->links() !!}
            </div>
        </div>
    </div>
@endsection
