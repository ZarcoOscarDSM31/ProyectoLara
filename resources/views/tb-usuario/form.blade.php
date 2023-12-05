
<div class="form-group mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" placeholder='Nombre' value="{{ $tbUsuario->nombre }}">
        <small class="form-hint">Introduzca el <b>nombre</b> del usuario</small>

</div>
<div class="form-group mb-3">
    <label class="form-label">Apellido paterno</label>
    <input type="text" name="app" class="form-control" value="{{ $tbUsuario->app }}" placeholder='Apellido paterno'>
        <small class="form-hint">Introduzca el <b>apellido paterno</b> del usuario</small>
</div>
<div class="form-group mb-3">
    <label class="form-label">Apellido materno</label>
    <input type="text" name="apm" class="form-control" value="{{ $tbUsuario->apm }}" placeholder='Apellido materno'>

        <small class="form-hint">Introduzca el <b>apellido materno</b> del usuario</small>
</div>
<div class="form-group mb-3">
    <label class="form-label">Teléfono</label>
    <input type="number" name="telefono" class="form-control" value="{{ $tbUsuario->telefono }}" placeholder='Número telefónico'>
        <small class="form-hint">Introduzca el <b>teléfono</b> del usuario</small>
</div>
<div class="form-group mb-3">
    <label class="form-label">Correo</label>
    <input type="email" name="email" class="form-control" value="{{ $tbUsuario->email }}" placeholder='Correo electrónico'>
        <small class="form-hint">Introduzca el <b>correo</b> del usuario</small>
</div>
<div class="form-group mb-3">
    <label class="form-label">Contraseña</label>
    <input type="password" name="pass" class="form-control" value="{{ $tbUsuario->pass }}" placeholder='Contraseña'>
        <small class="form-hint">Introduzca la <b>contraseña</b> del usuario</small>
</div>
<div class="form-group mb-3">
    <label class="form-label">Estado</label>
    <select type="checkbox" class="form-control" name="estado">
        @foreach ($estados as $estado)
        <option value="{{ $estado->id }}">
            {{ $estado->estado }}
        </option>
        @endforeach
        <small class="form-hint">Elija el <b>estado de vivienda</b> del usuario</small>
    </select>
</div>

<div class="form-group mb-3">
    <label class="form-label">Tipo de usuario</label>
    <select type="checkbox" class="form-control" name="tipo_usuario">
        @foreach ($tipousu as $tipousu)
        <option value="{{ $tipousu->id }}">
            {{ $tipousu->tipo_usuario }}
        </option>
        @endforeach
        <small class="form-hint">Elija el <b>tipo de usuario</b></small>
    </select>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto">Agregar</button>
            </div>
        </div>
    </div>
