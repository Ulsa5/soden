<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No hay problema. 
            Escribe tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="flex flex-col space-y-2">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" type="email" name="email" :value="old('email')" autocomplete="off" required autofocus />
            </div>


            <div class="flex items-center justify-center mt-4">
                <x-jet-button class="ml-4">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}">Regresar
                    </a>
                    @endif
                </x-jet-button>

                <x-jet-button class="ml-4">
                    {{ __('Enviar Link para restablecer') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
