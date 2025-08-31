<x-app-layout>
    <section id="courses-section" class="py-12">
        <div class="container mx-auto px-4 space-y-12">

            {{-- 1. Cursos Presenciales --}}
            <div id="precencial">
                <h2 class="text-2xl font-semibold mb-6">Cursos Presenciales</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                    {{-- Tarjeta 1 --}}
                    @foreach($presencial as $curso)
                        <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                            <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Ecografía General" class="w-full h-52 object-cover">

                            <div class="flex flex-col flex-grow p-4">
                                <h3 class="text-lg font-semibold mb-2">{{$curso->title}}</h3>

                                <div class="text-sm text-gray-600 space-y-1 mb-4">
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-clock"></i>{{$curso->modules_count}} Modulos
                                    </p>
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                        @if($curso->modality == "online")
                                            Presencial <span class="curso_modality">*Disponible en Ecuador</span>
                                        @else
                                            Online
                                        @endif
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <a href="https://wa.link/523h1h" class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                        Saber más
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            {{$presencial->links()}}

            {{-- 2. Cursos Online --}}
            <div id="online">
                <h2 class="text-2xl font-semibold mb-6">Cursos Online</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                    {{-- Tarjeta 1 --}}
                    @foreach($online as $curso)
                        <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                            <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Ecografía General" class="w-full h-52 object-cover">

                            <div class="flex flex-col flex-grow p-4">
                                <h3 class="text-lg font-semibold mb-2">{{$curso->title}}</h3>

                                <div class="text-sm text-gray-600 space-y-1 mb-4">
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-clock"></i>{{$curso->modules_count}} Modulos
                                    </p>
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                        @if($curso->modality == "online")
                                            Presencial <span class="curso_modality">*Disponible en Ecuador</span>
                                        @else
                                            Online
                                        @endif
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <a href="https://wa.link/523h1h" class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                        Saber más
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

            {{$online->links()}}

            {{-- 3. Recursos Didácticos --}}
            <div id="didacticos">
                <h2 class="text-2xl font-semibold mb-6">Recursos Didácticos</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                    {{-- Tarjeta 1 --}}
                    <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Ecografía General" class="w-full h-52 object-cover">

                        <div class="flex flex-col flex-grow p-4">
                            <h3 class="text-lg font-semibold mb-2">Ecografía General</h3>

                            <div class="text-sm text-gray-600 space-y-1 mb-4">
                                <p class="flex items-center gap-1">
                                    <i class="fas fa-clock"></i> PDF
                                </p>
                                <p class="flex items-center gap-1">
                                    <i class="fas fa-map-marker-alt"></i>
                                </p>
                            </div>

                            <div class="mt-auto">
                                <a href="proximamente" class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                    Saber más
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Tarjeta 2 --}}
                    <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Ecografía Obstétrica y Ginecológica" class="w-full h-52 object-cover">

                        <div class="flex flex-col flex-grow p-4">
                            <h3 class="text-lg font-semibold mb-2">Ecografía Obstétrica y Ginecológica</h3>

                            <div class="text-sm text-gray-600 space-y-1 mb-4">
                                <p class="flex items-center gap-1">
                                    <i class="fas fa-clock"></i>PDF
                                </p>
                                <p class="flex items-center gap-1">
                                    <i class="fas fa-map-marker-alt"></i>
                                </p>
                            </div>

                            <div class="mt-auto">
                                <a href="proximamente" class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                    Saber más
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Tarjeta 3 --}}
                    <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Ecografía Vascular Periférica" class="w-full h-52 object-cover">

                        <div class="flex flex-col flex-grow p-4">
                            <h3 class="text-lg font-semibold mb-2">Ecografía Vascular Periférica</h3>

                            <div class="text-sm text-gray-600 space-y-1 mb-4">
                                <p class="flex items-center gap-1">
                                    <i class="fas fa-clock"></i>PDF
                                </p>
                                <p class="flex items-center gap-1">
                                    <i class="fas fa-map-marker-alt"></i>
                                </p>
                            </div>

                            <div class="mt-auto">
                                <a href="proximamente" class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                    Saber más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <br>
    <br>
    <br>
</x-app-layout>
