<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group mt-3">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $categoria->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
</div>