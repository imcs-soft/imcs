<x-app-layout>
    <br>
    <br>
    <br>
    <section id="courses-section" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 space-y-12">

            {{-- 1. Cursos Presenciales --}}
            <div id="precenciales">
                <h2 class="text-2xl font-semibold mb-6">Cursos Presenciales</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso A" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía General</h3>
                            <p class="text-gray-600 text-sm mb-4">Explora los fundamentos de la ecografía para diagnóstico médico.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 4 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso B" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía Obstétrica y Ginecológica</h3>
                            <p class="text-gray-600 text-sm mb-4">Aprende a identificar estructuras y patologías en embarazo y ginecología.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 6 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso C" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía Vascular Periférica</h3>
                            <p class="text-gray-600 text-sm mb-4">Capacitación en evaluación de flujo sanguíneo y detección de trombosis.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 3 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2. Cursos Online --}}
            <div id="online">
                <h2 class="text-2xl font-semibold mb-6">Cursos Online</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso A" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía General</h3>
                            <p class="text-gray-600 text-sm mb-4">Explora los fundamentos de la ecografía para diagnóstico médico.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 4 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso B" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía Obstétrica y Ginecológica</h3>
                            <p class="text-gray-600 text-sm mb-4">Aprende a identificar estructuras y patologías en embarazo y ginecología.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 6 semanas</span>
                                <span>Modalidad: Presencial</span>2
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso C" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía Vascular Periférica</h3>
                            <p class="text-gray-600 text-sm mb-4">Capacitación en evaluación de flujo sanguíneo y detección de trombosis.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 3 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3. Recursos Didácticos --}}
            <div id="didacticos">
                <h2 class="text-2xl font-semibold mb-6">Recursos Didácticos</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso A" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía General</h3>
                            <p class="text-gray-600 text-sm mb-4">Explora los fundamentos de la ecografía para diagnóstico médico.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 4 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso B" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía Obstétrica y Ginecológica</h3>
                            <p class="text-gray-600 text-sm mb-4">Aprende a identificar estructuras y patologías en embarazo y ginecología.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 6 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso C" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Ecografía Vascular Periférica</h3>
                            <p class="text-gray-600 text-sm mb-4">Capacitación en evaluación de flujo sanguíneo y detección de trombosis.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 3 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <form action="{{ route('curso', 'ecografia-general') }}">
                                @csrf
                                <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                            </form>
                            <p class="mt-2 text-xs text-gray-400">
                                * Solo disponible en Ecuador
                            </p>
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
