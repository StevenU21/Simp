@extends('layouts.app')

@section('template_title')
    {{ $contac->name ?? 'Show Contac' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contac</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contacs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contac->email }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $contac->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $contac->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
