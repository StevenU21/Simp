@extends('layouts.app')

@section('template_title')
    {{ $invoice->name ?? 'Show Invoice' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Invoice</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $invoice->cost }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $invoice->description }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $invoice->date }}
                        </div>
                        <div class="form-group">
                            <strong>Order Number:</strong>
                            {{ $invoice->order_number }}
                        </div>
                        <div class="form-group">
                            <strong>Pay Code:</strong>
                            {{ $invoice->pay_code }}
                        </div>
                        <div class="form-group">
                            <strong>Unit Price:</strong>
                            {{ $invoice->unit_price }}
                        </div>
                        <div class="form-group">
                            <strong>Sub Total:</strong>
                            {{ $invoice->sub_total }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $invoice->IVA }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $invoice->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
