<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restablecer Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cambia el color de fondo según tu preferencia */
        }

        .bg-cover {
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        /* Agrega estilos adicionales según tus preferencias */
    </style>
</head>

<body>

    <x-guest-layout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 bg-cover" style="background-image: url('vendor/adminlte/dist/img/conductores.jpg');">
                    <!-- Puedes agregar contenido adicional para el lado izquierdo si lo necesitas -->
                </div>

                <div class="col-md-6 p-4">
                    <x-authentication-card>
                        <x-slot name="logo">
                            <x-authentication-card-logo />
                        </x-slot>

                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('¿Olvidaste tu contraseña? No hay problema. Solo dinos tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña que te permitirá elegir una nueva.') }}
                        </div>

                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ session('status') }}
                        </div>
                        @endif

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" style="color: black;">
                                {{ __('Enviar Enlace de Restablecimiento de Contraseña por Correo Electrónico') }}
                            </button>

                        </form>
                    </x-authentication-card>
                </div>
            </div>
        </div>
    </x-guest-layout>

    <!-- Agrega el script de JavaScript de Bootstrap al final del cuerpo del documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
