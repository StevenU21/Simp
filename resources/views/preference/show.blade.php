@extends('layouts.app')

@section('template_title')
    {{ $preference->name ?? 'Show Preference' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Preference</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preferences.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Wishlist:</strong>
                            {{ $preference->wishlist }}
                        </div>
                        <div class="form-group">
                            <strong>Carshop:</strong>
                            {{ $preference->carshop }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
