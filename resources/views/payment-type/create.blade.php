@extends('layouts.app')

@section('template_title')
    Create Payment Type
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Payment Type</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payment-types.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('payment-type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
