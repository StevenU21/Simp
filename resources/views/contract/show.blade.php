@extends('layouts.app')

@section('template_title')
    {{ $contract->name ?? 'Show Contract' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contract</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Begin:</strong>
                            {{ $contract->begin }}
                        </div>
                        <div class="form-group">
                            <strong>End:</strong>
                            {{ $contract->end }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
