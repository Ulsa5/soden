<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="login">
                <x-jet-authentication-card-logo />
            </a>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input placeholder="mail@ejemplo.com" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="off" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input placeholder="********" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="mt-4 flex items-center justify-center">
                <x-jet-button class="ml-4">
                    {{ __('Ingresar') }}
                </x-jet-button>
                
                {{-- Botón registrase para el superadmin --}}
                {{-- <x-jet-button class="mt-4">
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse
                    </a>
                    @endif
                </x-jet-button> --}}
    
            </div>
            <div>
                
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
            
        </form>

    </x-jet-authentication-card>
</x-guest-layout>

