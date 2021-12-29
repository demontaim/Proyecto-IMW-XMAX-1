<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('opinion') }}
            {{ Form::text('opinion', $opinione->opinion, ['class' => 'form-control' . ($errors->has('opinion') ? ' is-invalid' : ''), 'placeholder' => 'Escribe aquí tu opinión...']) }}
            {!! $errors->first('opinion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>