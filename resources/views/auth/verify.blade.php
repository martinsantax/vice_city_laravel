@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link para reestablecer tu contraseña ha sido envíado a tu casilla de e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir, chequeá tu casilla de e-mail para encontrar el link de verificación.') }}
                    {{ __('Si no recibís el e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('Hacé click acá para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
