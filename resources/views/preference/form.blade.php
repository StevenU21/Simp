<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('wishlist') }}
            {{ Form::text('wishlist', $preference->wishlist, ['class' => 'form-control' . ($errors->has('wishlist') ? ' is-invalid' : ''), 'placeholder' => 'Wishlist']) }}
            {!! $errors->first('wishlist', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carshop') }}
            {{ Form::text('carshop', $preference->carshop, ['class' => 'form-control' . ($errors->has('carshop') ? ' is-invalid' : ''), 'placeholder' => 'Carshop']) }}
            {!! $errors->first('carshop', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>