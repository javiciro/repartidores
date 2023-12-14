<x-guest-layout>
    <div class="min-h-screen flex bg-light">
        <!-- Image on the left side -->
        <div class="w-1/2 bg-cover bg-center" style="background-image: url('vendor/adminlte/dist/img/fondo-ola.jpg');"></div>
        
        <!-- Form on the right side -->
        <div class="w-1/2 flex items-center justify-center">
            <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
                <!-- Include the same styles used in the login page -->
                <style>
                    /* ... (same styles as before) ... */
                </style>

                <!-- Registration Form -->
                <div class="text-center mb-4">
                    <h2 class="text-3xl font-extrabold text-dark">
                        Registrarse
                    </h2>
                </div>

                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <x-label for="name" value="{{ __('Nombre') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mb-4">
                        <x-label for="email" value="{{ __('Correo electrónico') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mb-4">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mb-4">
                        <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mb-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('Acepto los :terms_of_service y :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Términos de servicio').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Política de privacidad').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('¿Ya estás registrado?') }}
                            </a>
                        </div>

                        <div>
                            <x-button>
                                {{ __('Registrarse') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
