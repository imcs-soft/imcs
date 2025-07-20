@push('styles')
    <style>
        /* Ocultar scrollbar */
        n    #tabs { scrollbar-width: none; -ms-overflow-style: none; }
        #tabs::-webkit-scrollbar { display: none; }
    </style>
@endpush

<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 lg:p-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Main content -->
        <div class="lg:col-span-2 pt-16 space-y-6">
            <!-- Video de introducción -->
            <div class="w-full aspect-video bg-black rounded-lg overflow-hidden shadow">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/TuVideoID1" title="Introducción a Reverb" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Título y descripción breve -->
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold">Aplicación en tiempo real con Laravel Reverb</h1>
            <p class="text-gray-600 text-base sm:text-lg">
                Domina WebSockets y broadcasting con Laravel Reverb para crear aplicaciones modernas en tiempo real.
            </p>

            <!-- Meta del curso -->
            <div class="flex flex-wrap items-center text-sm sm:text-base text-gray-600 space-x-4">
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c..."/></svg>
                    <span>4.8 (123 reseñas)</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-blue-500 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M2 11a1..."/></svg>
                    <span>1.2k inscritos</span>
                </div>
                <span class="whitespace-nowrap">Nivel: Intermedio</span>
                <span class="whitespace-nowrap">Última actualización: Jul 2025</span>
            </div>

            <!-- Pestañas con degradados de indicador -->
            <div class="relative">
                <div id="tabs" class="flex space-x-4 overflow-x-auto py-2 scroll-pl-6 pr-6">
                    <button class="py-2 px-3 -mb-px font-medium text-indigo-600 border-b-2 border-indigo-600 whitespace-nowrap">Descripción</button>
                    <button class="py-2 px-3 font-medium text-gray-600 hover:text-gray-800 whitespace-nowrap">Currículo</button>
                    <button class="py-2 px-3 font-medium text-gray-600 hover:text-gray-800 whitespace-nowrap">Instructor</button>
                    <button class="py-2 px-3 font-medium text-gray-600 hover:text-gray-800 whitespace-nowrap">Reseñas</button>
                    <button class="py-2 px-3 font-medium text-gray-600 hover:text-gray-800 whitespace-nowrap">Preguntas</button>
                    <button class="py-2 px-3 font-medium text-gray-600 hover:text-gray-800 whitespace-nowrap">Actualizaciones</button>
                </div>
                <!-- Gradientes laterales -->
                <div class="pointer-events-none absolute inset-y-0 left-0 w-6 bg-gradient-to-r from-white"></div>
                <div class="pointer-events-none absolute inset-y-0 right-0 w-6 bg-gradient-to-l from-white"></div>
            </div>
            <div class="pt-4 text-gray-700 text-sm sm:text-base">
                <p>En este curso aprenderás a configurar y utilizar Laravel Reverb para implementar comunicación en tiempo real mediante WebSockets, desde la instalación hasta la producción.</p>
            </div>
        </div>

        <!-- Sidebar: precio y detalles -->
        <aside class="space-y-6 pt-16">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-center space-y-2">
                    <span class="text-3xl sm:text-4xl font-extrabold text-indigo-600">$49</span>
                    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded">Comprar ahora</button>
                    <p class="text-xs sm:text-sm text-gray-500">Acceso de por vida al curso</p>
                </div>
                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start"><span class="mr-2 mt-1">•</span>6 horas de video</li>
                    <li class="flex items-start"><span class="mr-2 mt-1">•</span>Recursos descargables</li>
                    <li class="flex items-start"><span class="mr-2 mt-1">•</span>Acceso móvil</li>
                    <li class="flex items-start"><span class="mr-2 mt-1">•</span>Certificado de finalización</li>
                </ul>
            </div>
        </aside>

    </div>
</x-app-layout>


