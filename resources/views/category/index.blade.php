@extends('layouts.panel')

@section('template_title')
    Categorias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categorias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories as $category)
                                        <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                                            <!-- Block1 -->
                                            <div class="block1 wrap-pic-w">
                                                <img src="images/electricidad.jpeg" alt="IMG-BANNER">

                                                <a href="/producto" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                                    <div class="block1-txt-child1 flex-col-l">
                                                        <span class="block1-name ltext-102 trans-04 p-b-8">
                                                            {{ $category->name }}
                                                        </span>
                                                    </div>

                                                    <div class="block1-txt-child2 p-b-4 trans-05">
                                                        <div class="block1-link stext-101 cl0 trans-09">
                                                            {{ $category->image }}
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                            <a class="btn btn-sm btn-success" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                        </form>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
