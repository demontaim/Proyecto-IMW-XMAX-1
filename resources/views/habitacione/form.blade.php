<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group mt-3">
            {{ Form::label('Tipo de Habitación') }}
            {{ Form::select('categoria_id', $categorias, $habitacione->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione...']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group mt-3">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $habitacione->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-3">Crear</button>
    </div>
</div>