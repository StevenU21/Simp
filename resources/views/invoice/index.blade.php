@extends('layouts.app')

@section('template_title')
    Invoice
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Invoice') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('invoices.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>

										<th>Cost</th>
										<th>Description</th>
										<th>Date</th>
										<th>Order Number</th>
										<th>Pay Code</th>
										<th>Unit Price</th>
										<th>Sub Total</th>
										<th>Iva</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoice)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $invoice->cost }}</td>
											<td>{{ $invoice->description }}</td>
											<td>{{ $invoice->date }}</td>
											<td>{{ $invoice->order_number }}</td>
											<td>{{ $invoice->pay_code }}</td>
											<td>{{ $invoice->unit_price }}</td>
											<td>{{ $invoice->sub_total }}</td>
											<td>{{ $invoice->IVA }}</td>
											<td>{{ $invoice->total }}</td>

                                            <td>
                                                <form action="{{ route('invoices.destroy',$invoice->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('invoices.show',$invoice->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('invoices.edit',$invoice->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $invoices->links() !!}
            </div>
        </div>
    </div>
@endsection
