
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Puntuación') }}</label>
    <div>
        {{ Form::text('puntuacion', $tbResena->puntuacion, ['class' => 'form-control' .
        ($errors->has('puntuacion') ? ' is-invalid' : ''), 'placeholder' => 'Puntuacion']) }}
        {!! $errors->first('puntuacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>puntuación</b> de la reseña</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Descripción') }}</label>
    <div>
        {{ Form::text('descripcion', $tbResena->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>descripción</b> de la reseña</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Usuario') }}</label>
    <div>
        {{ Form::text('fk_id_usuario', $tbResena->usuario->nombre . " " . $tbResena->usuario->app . " ". $tbResena->usuario->apm, ['class' => 'form-control' .
        ($errors->has('fk_id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Fk Id Usuario']) }}
        {!! $errors->first('fk_id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Elija el <b>usuario</b> de la reseña</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('tb-resena.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
