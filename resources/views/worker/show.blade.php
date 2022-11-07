@extends('layouts.app')

@section('template_title')
    {{ $worker->name ?? 'Show Worker' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Worker</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('workers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $worker->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $worker->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $worker->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $worker->address }}
                        </div>
                        <div class="form-group">
                            <strong>Specialty:</strong>
                            {{ $worker->specialty }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $worker->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
