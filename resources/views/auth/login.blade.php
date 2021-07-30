<x-auth-layout title="Iniciar Sesión">
    <form method="POST" action="{{ route('login') }}" class="form mx-auto">
        @csrf

        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">
                {{ __('Iniciar Sesión') }}
            </h1>

            @if(config('boilerplate.access.user.registration'))
                <div class="text-gray-400 fw-bold fs-4">
                    {{ __('no tiene cuenta?') }}

                    <a href="{{ route('frontend.auth.register') }}" class="link-primary fw-bolder">
                        {{ __('Registrarse') }}
                    </a>
                </div>
            @endif
        </div>

        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark">{{ __('Dirección de Correo') }}</label>

            <input class="form-control form-control-lg mb-2 @error('email') is-invalid @enderror" type="email" name="email" tabindex="1" autocomplete="off" placeholder="Ingrese su correo" autofocus />

            @error('email')
            <div class="is-invalid text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Contraseña') }}</label>
            </div>

            <input class="form-control form-control-lg mb-2 @error('password') is-invalid @enderror" type="password" name="password" tabindex="2" placeholder="******" autocomplete="off" />

            @error('password')
            <div class="is-invalid text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="fv-row">
            <div class="float-start mb-10">
                <label class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" name="remember" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">
                        {{ __('Recordarme') }}
                    </span>
                </label>
            </div>

            <div class="float-end">
                @if (Route::has('frontend.auth.password.request'))
                    <a href="{{ route('frontend.auth.password.request') }}" class="link-primary fs-6 fw-bolder">
                        {{ __('¿Olvido la contraseña?') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="text-center">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                @include('includes.partials.general._button-indicator', ['label' => __('Continuar')])
            </button>

            @if(config('boilerplate.access.user.social_login'))
                @include('frontend.auth.includes.social')
            @endif
        </div>
    </form>

    @push('after-scripts')
        <script>
            $(document).ready(function () {
                //
            });
        </script>
    @endpush
</x-auth-layout>
