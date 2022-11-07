<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('begin') }}
            {{ Form::text('begin', $contract->begin, ['class' => 'form-control' . ($errors->has('begin') ? ' is-invalid' : ''), 'placeholder' => 'Begin']) }}
            {!! $errors->first('begin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end') }}
            {{ Form::text('end', $contract->end, ['class' => 'form-control' . ($errors->has('end') ? ' is-invalid' : ''), 'placeholder' => 'End']) }}
            {!! $errors->first('end', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>