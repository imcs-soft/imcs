<x-app-layout>
    <section id="courses-section" class="py-12">
        <div class="container mx-auto px-4 space-y-12">
            @if($cursos)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                    @foreach($cursos as $curso)
                        <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                            <img
                                src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc"
                                alt="Ecografía General" class="w-full h-52 object-cover">
                            <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                                <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: 100%"></div>
                            </div>
                            <div class="flex flex-col flex-grow p-4">
                                <h3 class="text-lg font-semibold mb-2">{{ $curso->title }}</h3>

                                <div class="text-sm text-gray-600 space-y-1 mb-4">
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-clock"></i>{{ $curso->module_count }} semanas
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
                                    <a href="#"
                                       class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                        Continura el curso
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex items-center justify-center py-24">
                    <div class="text-center p-6 max-w-md bg-white">
                        <svg class="mx-auto w-16 h-16 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 14l6.16-3.422A12.083 12.083 0 0118 20.944M12 14v7m0-7L5.84 10.578A12.083 12.083 0 006 20.944"/>
                        </svg>

                        <h2 class="mt-4 text-xl font-semibold text-gray-700">No tienes cursos todavía</h2>
                        <p class="mt-2 text-gray-500">
                            Cuando te inscribas en un curso, aparecerá aquí.
                        </p>

                        <a href="{{ route('cursos') }}"
                           class="mt-4 inline-block px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow transition">
                            Explorar cursos
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <br>
    <br>
    <br>
</x-app-layout>
