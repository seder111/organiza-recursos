<x-guest-layout>
<header>
    <x-menu-navigation-guest />
</header>

    <main>
        <section class="w-[90%] lg:w-[900px] mx-auto">
            <div class="flex flex-col mt-20 lg:flex-row gap-x-5">
                <div class="lg:w-1/2">
                    <h1 class="text-5xl font-extrabold ">Recursos</h1>
                    <p class="mt-4">Guarda y encuentra lo que buscas, cuando lo necesitas y centraliza tus recursos de manera gratuita.</p>
                    <a class="inline-block px-5 py-3 mt-6 text-xl font-bold text-white rounded-lg bg-emerald-600" href="{{ route('register') }}">Registrate gratis</a>
                </div>
                <img class="max-w-screen-sm mt-6 lg:mt-0 lg:w-1/2 rounded-3xl" src="https://via.placeholder.com/900x580" alt="imágen de organida recursos">
            </div>
        </section>

        <section
        id="features"
        class="my-[1000px] w-[90%] lg:w-[900px] mx-auto"
            >
                <h2 class="text-3xl font-bold">Características</h2>
                <p>Si todavía estás pensando porque utilizar esta plataforma para guardar tus recursos dejame recordarte que es gratuita, </p>
        </section>
    </main>
</x-guest-layout>
