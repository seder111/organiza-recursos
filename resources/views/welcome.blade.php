<x-guest-layout>
<header>
    <x-menu-navigation-guest />
</header>

    <main>
        <section class="py-10 w-[90%] lg:w-[900px] mx-auto">
            <div class="flex flex-col mt-20 lg:flex-row gap-x-5">
                <div class="lg:w-1/2">
                    <h1 class="text-5xl font-extrabold ">Recursos</h1>
                    <p class="mt-4">Guarda y encuentra lo que buscas, cuando lo necesitas y centraliza tus recursos de manera gratuita.</p>
                    <a class="inline-block px-5 py-3 mt-6 text-xl font-bold text-white rounded-lg bg-emerald-600" href="{{ route('register') }}">Registrate gratis</a>
                </div>
                <img class="max-w-screen-sm mt-6 lg:mt-0 lg:w-1/2 rounded-3xl" src="{{ asset('img/img_archive_portada.webp') }}"" alt="imágen de organida recursos">
            </div>
        </section>

        <section class="w-full py-10 my-24 bg-emerald-100/50">
            <div class="w-[90%] lg:w-[900px] mx-auto">
                <h2 class="text-3xl font-extrabold">Guarda sin límites <sup class="text-sm">1</sup></h2>
                <p class="mt-3">Puedes guardar tantos recursos como quieras, crear listas para compartirlas<sup>2</sup>, asignarles categorías a tus recursos y poco a poco se añadirán muchas cosas más.</p>
                <p class="mt-3">Ten en cuenta que sólo almacenamos texto, los recuros que nos compartas serán enlaces a otros sitios donde se encuentre dicho recurso. Nosotros te ayudamos a mantener organizados todos tus recursos y poder agregarlos a listas o asignarles categorías.</p>

            </div>

        </section>

        {{-- <section
        class="py-4 w-[90%] lg:w-[900px] mx-auto"
            >
                <h2 class="text-3xl font-bold">Funcionalizades</h2>
                <p class="mt-3">Si todavía estás pensando porque utilizar esta plataforma para guardar tus recursos dejame recordarte que es gratuita, </p>
                <p class="mt-3"><span class="text-lg font-bold">¿Tienes una nueva idea?</span> Escribeme para añadirla al roapmap. <a class="underline underline-offset-2" href="mailto:hola@sergiogonzalez.me">Haz click aquí para enviarmen un email</a></p>
        </section> --}}
    </main>

    <section class="pt-10 w-[90%] lg:w-[900px] mx-auto">
        <div class="text-sm">
            <p><sup>1</sup> Todo lo que se almacenan es texto.</p>
            <p><sup>2</sup> Esta cartacterística estará disponible proximamente.</p>
        </div>
    </section>

    <footer class="w-full mt-14">
        <div class="py-6 text-center text-white bg-emerald-900">Este es el footer</div>
    </footer>
</x-guest-layout>
