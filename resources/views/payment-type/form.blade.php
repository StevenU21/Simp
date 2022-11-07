<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $paymentType->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $paymentType->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('card_number') }}
            {{ Form::text('card_number', $paymentType->card_number, ['class' => 'form-control' . ($errors->has('card_number') ? ' is-invalid' : ''), 'placeholder' => 'Card Number']) }}
            {!! $errors->first('card_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('special_number') }}
            {{ Form::text('special_number', $paymentType->special_number, ['class' => 'form-control' . ($errors->has('special_number') ? ' is-invalid' : ''), 'placeholder' => 'Special Number']) }}
            {!! $errors->first('special_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end') }}
            {{ Form::text('end', $paymentType->end, ['class' => 'form-control' . ($errors->has('end') ? ' is-invalid' : ''), 'placeholder' => 'End']) }}
            {!! $errors->first('end', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>