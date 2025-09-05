<x-app-layout>
    <section id="courses-section" class="py-12">
        <div class="container mx-auto px-4 space-y-12">
            @if($cursos && $cursos->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                    @foreach($cursos as $curso)
                        <div class="flex flex-col bg-white rounded-lg shadow overflow-hidden h-full">
                            <img
                                src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc"
                                alt="Ecografía General" class="w-full h-52 object-cover">

                            {{-- Barra de progreso --}}
                            <div class="p-4 pb-2">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm text-gray-600">Progreso</span>
                                    <span class="text-sm font-medium text-gray-800">
                                        {{ $curso->progress_percentage }}%
                                    </span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                    <div
                                        class="h-full rounded-full transition-all duration-300 ease-in-out
                                               @if($curso->progress_percentage == 100) bg-green-500 @else bg-blue-600 @endif"
                                        style="width: {{ $curso->progress_percentage }}%">
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <span class="text-xs text-gray-500">
                                        {{ $curso->completed_modules }}/{{ $curso->total_modules }} módulos
                                    </span>
                                    @if($curso->progress_percentage == 100)
                                        <span class="text-xs text-green-600 font-medium flex items-center">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            Completado
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="flex flex-col flex-grow p-4 pt-0">
                                <h3 class="text-lg font-semibold mb-2">{{ $curso->title }}</h3>

                                <div class="text-sm text-gray-600 space-y-1 mb-4">
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-clock"></i>{{ $curso->total_modules }} módulos
                                    </p>
                                    <p class="flex items-center gap-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                        @if($curso->modality == "online")
                                            Online
                                        @else
                                            Presencial <span class="curso_modality text-xs">*Disponible en Ecuador</span>
                                        @endif
                                    </p>
                                </div>

                                <div class="mt-auto space-y-2">
                                    @if($curso->progress_percentage == 100)
                                        <a href="#"
                                           class="block text-center bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
                                            Ver Certificado
                                        </a>
                                    @else
                                        <a href="{{ route('course.show', $curso->id) }}"
                                           class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">
                                            @if($curso->progress_percentage > 0)
                                                Continuar curso
                                            @else
                                                Comenzar curso
                                            @endif
                                        </a>
                                    @endif
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
