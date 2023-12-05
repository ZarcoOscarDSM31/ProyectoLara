@extends('tablar::page')

@section('title', 'Mostrar tipo de usuario')

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
                        {{ __('Tipo de usuarios ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('tb-tipousu.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            Lista de tipos de usuarios
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
                            <h3 class="card-title">Tipo de usuarios detalles</h3>
                        </div>
                        <div class="card-body">
<div class="form-group">
<strong>ID:</strong>
{{ $tb_tipousu->id }}
</div>
<div class="form-group">
<strong>Tipo Usuario:</strong>
{{ $tb_tipousu->tipo_usuario }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


