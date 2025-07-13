<x-app-layout>
    @push('styles')
        @vite(['resources/css/header-blur.css'])
    @endpush

    <header class="header-with-blur py-20 md:py-32 lg:py-40 text-center">
        <div class="header-content container mx-auto px-4 pt-16 md:pt-20 text-white">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">
                ¡Potencia tu carrera con nuestros cursos de ecografía!
            </h1>
            <p class="text-2xl md:text-3xl mb-8">
                Cursos de alta calidad para profesionales de la salud y estudiantes.
            </p>

            <div class="inline-flex justify-center space-x-4">
                <button
                    class="bg-primary-red text-white px-6 py-3 md:px-8 md:py-4
                 rounded-lg text-lg font-semibold hover:bg-opacity-90
                 transition-colors duration-300"
                >
                    Cursos Online
                </button>
                <button
                    class="border border-white text-white
                 px-6 py-3 md:px-8 md:py-4 rounded-lg text-lg
                 font-semibold bg-transparent hover:bg-primary-red
                 hover:text-white transition-colors duration-300"
                >
                    Cursos Presenciales
                </button>
            </div>
        </div>
    </header>

    <!-- carusel de cursos -->
    <livewire:layout.home-carousel-alt />

    <!-- brands -->
    <x-home.brands />

    <!-- abaut-us -->
    <x-home.abautus />


    <!-- reseñas -->
    <x-home.reviews />
</x-app-layout>
