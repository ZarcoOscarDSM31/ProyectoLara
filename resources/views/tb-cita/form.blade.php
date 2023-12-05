
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Fecha') }}</label>
    <div>
        {{ Form::text('fecha', $tbCita->fecha, ['class' => 'form-control' .
        ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>fecha</b> de la cita</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Hora de inicio') }}</label>
    <div>
        {{ Form::text('hora_inicio', $tbCita->hora_inicio, ['class' => 'form-control' .
        ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
        {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>hora de inicio</b> de la cita</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Hora de finalización') }}</label>
    <div>
        {{ Form::text('hora_final', $tbCita->hora_final, ['class' => 'form-control' .
        ($errors->has('hora_final') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final']) }}
        {!! $errors->first('hora_final', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>hora de finalización</b> de la cita</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $tbCita->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca la <b>descripción</b> sobre la cita</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Lugar') }}</label>
    <div>
        {{ Form::text('lugar', $tbCita->lugar, ['class' => 'form-control' .
        ($errors->has('lugar') ? ' is-invalid' : ''), 'placeholder' => 'Lugar']) }}
        {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduzca el <b>lugar</b> de la cita</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Usuario') }}</label>
    <select class="form-control">
        @foreach ($estados as $estado)
        <option value="{{ $estado->estado }}">
            {{ $estado->estado }}
        </option>
        @endforeach
        <small class="form-hint">Elija el <b>estado de vivienda</b> del usuario</small>
    </select>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('tb-cita.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
