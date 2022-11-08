@extends('layouts.app')

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
                                {{ __('Worker') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('workers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>

										<th>Name</th>
										<th>Last Name</th>
										<th>Phone Number</th>
										<th>Address</th>
										<th>Specialty</th>
										<th>Category Id</th>

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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('workers.show',$worker->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('workers.edit',$worker->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
