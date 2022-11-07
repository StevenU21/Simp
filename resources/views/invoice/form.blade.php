<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cost') }}
            {{ Form::text('cost', $invoice->cost, ['class' => 'form-control' . ($errors->has('cost') ? ' is-invalid' : ''), 'placeholder' => 'Cost']) }}
            {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $invoice->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $invoice->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('order_number') }}
            {{ Form::text('order_number', $invoice->order_number, ['class' => 'form-control' . ($errors->has('order_number') ? ' is-invalid' : ''), 'placeholder' => 'Order Number']) }}
            {!! $errors->first('order_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pay_code') }}
            {{ Form::text('pay_code', $invoice->pay_code, ['class' => 'form-control' . ($errors->has('pay_code') ? ' is-invalid' : ''), 'placeholder' => 'Pay Code']) }}
            {!! $errors->first('pay_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unit_price') }}
            {{ Form::text('unit_price', $invoice->unit_price, ['class' => 'form-control' . ($errors->has('unit_price') ? ' is-invalid' : ''), 'placeholder' => 'Unit Price']) }}
            {!! $errors->first('unit_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sub_total') }}
            {{ Form::text('sub_total', $invoice->sub_total, ['class' => 'form-control' . ($errors->has('sub_total') ? ' is-invalid' : ''), 'placeholder' => 'Sub Total']) }}
            {!! $errors->first('sub_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IVA') }}
            {{ Form::text('IVA', $invoice->IVA, ['class' => 'form-control' . ($errors->has('IVA') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('IVA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $invoice->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>