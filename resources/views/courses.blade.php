<x-app-layout>
    <br>
    <br>
    <br>
    <section id="courses-section" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 space-y-12">

            {{-- 1. Cursos Presenciales --}}
            <div>
                <h2 class="text-2xl font-semibold mb-6">Cursos Presenciales</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn" alt="Curso A" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso A</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 4 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                            <p class="mt-2 text-xs text-gray-400">
                                *Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/9fHgnYFP-osPyUhYZw-fICUI7ZW66AkMe0tGSGxX22o/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUwMC9mdWxsXzM3/MHgyMDAuanBn" alt="Curso B" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso B</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 6 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                            <p class="mt-2 text-xs text-gray-400">
                                *Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/zsT0z5BfvOrrvzWLjyKmMoktwiNdP-DCdlnkKN6d4fo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy81/NDcyMi9mdWxsXzM3/MHgyMDAuanBn" alt="Curso C" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso C</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 3 semanas</span>
                                <span>Modalidad: Presencial</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                            <p class="mt-2 text-xs text-gray-400">
                                *Solo disponible en Ecuador
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2. Cursos Online --}}
            <div>
                <h2 class="text-2xl font-semibold mb-6">Cursos Online</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/zsT0z5BfvOrrvzWLjyKmMoktwiNdP-DCdlnkKN6d4fo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy81/NDcyMi9mdWxsXzM3/MHgyMDAuanBn" alt="Curso D" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso D</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 5 semanas</span>
                                <span>Modalidad: Online</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Curso E" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso E</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 8 semanas</span>
                                <span>Modalidad: Online</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Curso F" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso F</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 2 semanas</span>
                                <span>Modalidad: Online</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2. Cursos Online --}}
            <div>
                <h2 class="text-2xl font-semibold mb-6">Cursos Online</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Curso D" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso D</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 5 semanas</span>
                                <span>Modalidad: Online</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Curso E" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso E</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 8 semanas</span>
                                <span>Modalidad: Online</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Curso F" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Curso F</h3>
                            <p class="text-gray-600 text-sm mb-4">Muy breve descripción del contenido del curso.</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>Duración: 2 semanas</span>
                                <span>Modalidad: Online</span>
                            </div>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3. Recursos Didácticos --}}
            <div>
                <h2 class="text-2xl font-semibold mb-6">Recursos Didácticos</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Recurso 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/zsT0z5BfvOrrvzWLjyKmMoktwiNdP-DCdlnkKN6d4fo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy81/NDcyMi9mdWxsXzM3/MHgyMDAuanBn" alt="Recurso A" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Recurso A</h3>
                            <p class="text-gray-600 text-sm mb-1">Autor: Juan Pérez</p>
                            <p class="text-gray-600 text-sm mb-4">Tipo: Guía PDF</p>
                            <p class="text-gray-600 text-sm flex-1 mb-4">
                                Breve descripción del recurso didáctico.
                            </p>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>
                    {{-- Recurso 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Recurso B" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Recurso B</h3>
                            <p class="text-gray-600 text-sm mb-1">Autor: María López</p>
                            <p class="text-gray-600 text-sm mb-4">Tipo: Infografía</p>
                            <p class="text-gray-600 text-sm flex-1 mb-4">
                                Breve descripción del recurso didáctico.
                            </p>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
                        </div>
                    </div>

                    {{-- Recurso 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/zsT0z5BfvOrrvzWLjyKmMoktwiNdP-DCdlnkKN6d4fo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy81/NDcyMi9mdWxsXzM3/MHgyMDAuanBn" alt="Recurso C" class="h-48 w-full object-cover">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-medium mb-2">Recurso C</h3>
                            <p class="text-gray-600 text-sm mb-1">Autor: Luis Martínez</p>
                            <p class="text-gray-600 text-sm mb-4">Tipo: Presentación PPT</p>
                            <p class="text-gray-600 text-sm flex-1 mb-4">
                                Breve descripción del recurso didáctico.
                            </p>
                            <button class="mt-auto bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                                Saber más
                            </button>
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
