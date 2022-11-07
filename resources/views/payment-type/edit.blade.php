@extends('layouts.app')

@section('template_title')
    Update Payment Type
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Payment Type</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payment-types.update', $paymentType->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('payment-type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
