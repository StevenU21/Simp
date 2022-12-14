@extends('layouts.panel')

@section('template_title')
    Crear Cliente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clients.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Direccion</label>
                                        <input type="text" name="address" class="form-control" value="{{ old('address')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="identity_card">Cedula</label>
                                        <input type="text" name="identity_card" class="form-control" value="{{ old('identity_card')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="role">Rol</label>
                                        <input type="text" name="role" class="form-control" value="{{ old('role')}}">
                                    </div>

                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
