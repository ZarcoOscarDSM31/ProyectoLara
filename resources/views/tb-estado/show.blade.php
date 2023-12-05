@extends('tablar::page')

@section('title', 'View Tb Estado')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        mostrar
                    </div>
                    <h2 class="page-title">
                        {{ __('Estado ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('tb-estados.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">

                            </svg>
                            Tabla de estados
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
                            <h3 class="card-title">Estado Detalles</h3>
                        </div>
                        <div class="card-body">

<div class="form-group">
<strong>Id Estado:</strong>
{{ $tbEstado->id }}
</div>
<div class="form-group">
<strong>Clave:</strong>
{{ $tbEstado->clave }}
</div>
<div class="form-group">
<strong>Estado:</strong>
{{ $tbEstado->estado }}
</div>
<div class="form-group">
<strong>Abrev:</strong>
{{ $tbEstado->abrev }}
</div>
<div class="form-group">
<strong>Activo:</strong>
{{ $tbEstado->activo }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


