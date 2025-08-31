<x-app-layout>
    <section class="pt-12 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6">
                Mi Biblioteca Virtual
            </h1>

            <div
                x-data="{ open: false, pdfUrl: '' }"
                @keydown.window.escape="open = false"
            >
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($recursos as $recurso)
                        <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">
                            <div class="h-40 bg-gray-100 overflow-hidden">
                                <img
                                    src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc"
                                    alt="Ecografía"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div class="p-4 flex-1 flex flex-col">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $recurso->name }}</h3>
                                <p class="text-sm text-gray-500 mb-4">{{ $recurso->file_type }}</p>
                                <button
                                    @click="{{ $recurso->url_path }} open=true"
                                    class="mt-auto bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded text-sm"
                                >
                                    Mostrar recurso
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Modal / Visor PDF -->
                <div
                    x-show="open"
                    x-transition.opacity
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50"
                >
                    <div class="bg-white rounded-lg overflow-hidden w-full max-w-4xl h-full max-h-[90vh] flex flex-col">
                        <div class="flex justify-end bg-gray-100 p-2">
                            <button
                                @click="open = false"
                                class="text-gray-600 hover:text-gray-800 text-2xl leading-none"
                                aria-label="Cerrar"
                            >&times;
                            </button>
                        </div>
                        <div class="flex-1">
                            <iframe
                                :src="pdfUrl"
                                class="w-full h-full"
                                frameborder="0"
                            ></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
