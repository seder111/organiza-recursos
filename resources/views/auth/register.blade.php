<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro | {{ config('app.name', 'Organiza Recursos') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="{{ asset('img/office.jpeg') }}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="{{ asset('img/office-dark.jpeg') }}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-3xl font-semibold text-gray-700 dark:text-gray-200">
                            Crear cuenta
                        </h1>

                        <form action="{{ route('register') }}" method="post">
                            @csrf

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                                <input id="name" name="name" value="{{ old('name') }}" required autofocus
                                    autocomplete="name"
                                    class="block w-full mt-1 text-sm rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-emerald-400 focus:outline-none focus:shadow-outline-emerald dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Elon Musk" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Email</span>
                                <input
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                    class="block w-full mt-1 text-sm rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-emerald-400 focus:outline-none focus:shadow-outline-emerald dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="elon@musk.com" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Contraseña</span>
                                <input
                                id="password" type="password" name="password" required
                                    autocomplete="new-password"
                                    class="block w-full mt-1 text-sm rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-emerald-400 focus:outline-none focus:shadow-outline-emerald dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="***************" type="password" />
                            </label>

                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Confirmar contraseña</span>
                                <input
                                id="password_confirmation" type="password" name="password_confirmation" required
                                    autocomplete="new-password"
                                    class="block w-full mt-1 text-sm rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-emerald-400 focus:outline-none focus:shadow-outline-emerald dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="***************" type="password" />
                            </label>

                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input
                                    id="privacidad"
                                    name="privacidad"
                                    type="checkbox"
                                        class="outline-none appearance-none text-emerald-600 form-checkbox focus:ring-0 dark:focus:ring-0 dark:outline-none" />
                                    <span class="ml-2">
                                        Acepto la
                                        <span
                                            class="underline cursor-pointer text-emerald-600 hover:no-underline ">política
                                            de privacidad</span>.
                                    </span>
                                </label>
                            </div>

                            <button type="submit"
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg bg-emerald-600 active:bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:shadow-outline-emerald"
                                >
                                Crear cuenta
                            </button>
                        </form>
                        <p class="mt-4">
                            <a class="text-sm font-medium text-emerald-600 dark:text-emerald-400 hover:underline"
                                href="{{ route('login') }}">
                                ¿Ya tienes cuenta? Login
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
