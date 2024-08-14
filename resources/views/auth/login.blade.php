<!DOCTYPE html>
<html
lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Organiza recursos</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="hidden md:block md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src={{ asset('img/office.jpeg') }} alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src={{ asset('img/office-dark.jpeg') }} alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-3xl font-semibold text-gray-700 dark:text-gray-200">
                            Login
                        </h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">{{ __('Email') }}</span>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                    autofocus autocomplete="username"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-emerald-400 focus:outline-none focus:shadow-outline-emerald dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg"
                                    placeholder="elon@musk.com" />
                            </label>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Contraseña</span>
                                <input id="password" type="password" name="password" required
                                    autocomplete="current-password"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-emerald-400 focus:outline-none focus:shadow-outline-emerald dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg"
                                    placeholder="***************" type="password" />
                            </label>

                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-emerald-600 border border-transparent rounded-lg active:bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:shadow-outline-emerald"
                                type="submit">
                                Inicia sesión
                            </button>

                        </form>
                        <p class="mt-8">
                            @if ( Route::has('password.request'))
                            <a class="text-sm font-medium text-emerald-600 dark:text-emerald-400 hover:underline"
                                href={{ route('password.request') }}>
                                {{ __('Olvidaste la contraseña?') }}
                            </a>
                            @endif
                        </p>
                        <p class="mt-1">
                            @if( Route::has('register') )
                            <a class="text-sm font-medium text-emerald-600 dark:text-emerald-400 hover:underline"
                                href={{ route('register') }}>
                                {{ __('Crear cuenta') }}
                            </a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
