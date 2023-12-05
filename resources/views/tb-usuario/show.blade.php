@extends('tablar::page')

@section('title', 'Mostrar Usuario')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Mostrar
                    </div>
                    <h2 class="page-title">
                        {{ __('Usuario ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            Lista de usuarios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detalles de usuario</h3>
                        </div>
                        <div class="card-body">

<div class="form-group">
<strong>Nombre(s):</strong>
{{ $tbUsuario->nombre }}
</div>
<div class="form-group">
<strong>Apellido paterno:</strong>
{{ $tbUsuario->app }}
</div>
<div class="form-group">
<strong>Apellido materno:</strong>
{{ $tbUsuario->apm }}
</div>
<div class="form-group">
<strong>Telefono:</strong>
{{ $tbUsuario->telefono }}
</div>
<div class="form-group">
<strong>Correo:</strong>
{{ $tbUsuario->email }}
</div>
<div class="form-group">
<strong>Contraseña:</strong>
{{ $tbUsuario->pass }}
</div>
<div class="form-group">
<strong>Estado:</strong>
{{ $tbUsuario->estado->estado }}
</div>
<div class="form-group">
<strong>Tipo de usuario:</strong>
{{ $tbUsuario->tipousu->tipo_usuario }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


