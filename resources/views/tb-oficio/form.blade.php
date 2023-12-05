
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre de la profesión o el oficio') }}</label>
    <div>
        {{ Form::text('nombre_prof', $tbOficio->nombre_prof, ['class' => 'form-control' .
        ($errors->has('nombre_prof') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Prof']) }}
        {!! $errors->first('nombre_prof', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca el <b>nombre</b> de la profesión o el oficio</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Especialidad') }}</label>
    <div>
        {{ Form::text('especialidad', $tbOficio->especialidad, ['class' => 'form-control' .
        ($errors->has('especialidad') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
        {!! $errors->first('especialidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>especialidad</b> del oficio</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Usuario') }}</label>
    <div>
        {{ Form::text('fk_id_usuario', $tbOficio->usuario->nombre ." ". $tbOficio->usuario->app ." ".$tbOficio->usuario->apm, ['class' => 'form-control' .
        ($errors->has('fk_id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Fk Id Usuario']) }}
        {!! $errors->first('fk_id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Elija el <b>usuario</b> de la profesión o el oficio</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('tb-oficio.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
