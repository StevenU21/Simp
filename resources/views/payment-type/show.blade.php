@extends('layouts.app')

@section('template_title')
    {{ $paymentType->name ?? 'Show Payment Type' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Payment Type</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('payment-types.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $paymentType->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $paymentType->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Card Number:</strong>
                            {{ $paymentType->card_number }}
                        </div>
                        <div class="form-group">
                            <strong>Special Number:</strong>
                            {{ $paymentType->special_number }}
                        </div>
                        <div class="form-group">
                            <strong>End:</strong>
                            {{ $paymentType->end }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
