@extends('tablar::auth.layout')

@section('content')
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-1 mt-5">
                        <a href="" class="navbar-brand navbar-brand-autodark">
                            <img src="{{asset(config('tablar.auth_logo.img.path','assets/logo.svg'))}}" height="36"
                                 alt=""></a>
                    </div>
                    <form class="card" action="{{ route('password.email') }}" method="post" novalidate>
                        @csrf
                        <div class="card-body p-6">
                            <div class="card-title">@lang('Has olvidado tu contraseña')</div>

                            <p class="text-muted">@lang('Ingresa tu correo electrónico')</p>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">@lang('Correo Electrónico')</label>
                                <input
                                    type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    id="email"
                                    name="email"
                                    aria-describedby="emailHelp"
                                    placeholder="Ingresa tu correo electrónico"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-footer">
                                <button type="submit"
                                        class="btn btn-primary btn-block">@lang('Envíame una nueva contraseña')</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center text-muted">
                        Olvídalo, <a href="{{ route('login') }}">envíame de vuelta</a> a la pantalla de inicio de sesión.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
