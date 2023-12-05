@extends('tablar::page')

@section('title', 'Mostrar Oficios o profesiones')

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
                        {{ __('Oficio o profesión') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('tb-oficio.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            Lista de oficios y profesiones
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
                            <h3 class="card-title">Mostrar oficios o profesiones</h3>
                        </div>
                        <div class="card-body">

<div class="form-group">
<strong>Nombre de la Profesión o el oficio:</strong>
{{ $tbOficio->nombre_prof }}
</div>
<div class="form-group">
<strong>Especialidad:</strong>
{{ $tbOficio->especialidad }}
</div>
<div class="form-group">
<strong>Usuario:</strong>
{{ $tbOficio->usuario->nombre ." ". $tbOficio->usuario->app ." ".$tbOficio->usuario->apm  }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


