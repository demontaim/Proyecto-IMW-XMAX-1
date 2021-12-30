<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('opinion') }}
            {{ Form::text('opinion', $opinione->opinion, ['class' => 'form-control' . ($errors->has('opinion') ? ' is-invalid' : ''), 'placeholder' => 'Escribe aquí tu opinión...']) }}
            {!! $errors->first('opinion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('Número de Habitación') }}
            {{ Form::select('habitacion_id', $habitaciones, $opinione->habitacion_id, ['class' => 'form-control' . ($errors->has('habitacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione...']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('Número de Cliente') }}
            {{ Form::select('cliente_id', $clientes, $opinione->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione...']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>