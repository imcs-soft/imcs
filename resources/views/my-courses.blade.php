<x-app-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 px-6 mt-24">
        <div class="md:flex mb-6 space-y-2 md:space-y-0">
            <div>
                <div class="w-full ">
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="2d151e4f9ba01068bebf0f8e5068723a">
                        Ordenar por
                    </label>

                    <select class="form-select block w-full pl-3 pr-10 py-2 text-base sm:text-sm shadow-sm
                rounded-md border bg-white focus:ring-1 focus:outline-none
                dark:bg-secondary-800 dark:border-secondary-600 dark:text-secondary-400 border-secondary-300 focus:ring-primary-500 focus:border-primary-500" wire:model.live="sortField" name="sortField" id="2d151e4f9ba01068bebf0f8e5068723a">
                        <option value="last_accessed">
                            Visitado recientes
                        </option>
                        <option value="enroll_time">
                            Inscripción reciente
                        </option>
                        <option value="title">
                            Título de la A a la Z
                        </option>
                        <option value="title_desc">
                            Título de la Z a la A
                        </option>
                    </select>
                </div>
            </div>

            <div class="md:mx-2">
                <div class="w-full ">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-1" for="b583a6293fe1d5750ba17314e10419cc">
                        Filtrar por
                    </label>


                    <select class="form-select block w-full pl-3 pr-10 py-2 text-base sm:text-sm shadow-sm
                rounded-md border bg-white focus:ring-1 focus:outline-none
                dark:bg-secondary-800 dark:border-secondary-600 dark:text-secondary-400 border-secondary-300 focus:ring-primary-500 focus:border-primary-500" wire:model.live="category_id" name="category_id" id="b583a6293fe1d5750ba17314e10419cc">
                        <option value="">
                            Todas las categorías
                        </option>

                        <option value="1">
                            desarrollo web
                        </option>


                        <option value="2">
                            diseño web
                        </option>
                    </select>
                </div>
            </div>

            <div class="md:ml-auto">
                <div class="">
                    <div class="flex justify-between items-end mb-1">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="06a943c59f33a34bb5924aaf72cd2995">
                            Buscar
                        </label>
                    </div>

                    <div class="relative rounded-md  shadow-sm ">

                        <input type="text" autocomplete="off" class="placeholder-secondary-400 dark:bg-secondary-800 dark:text-secondary-400 dark:placeholder-secondary-500 border border-secondary-300 focus:ring-primary-500 focus:border-primary-500 dark:border-secondary-600 form-input block w-full sm:text-sm rounded-md transition ease-in-out duration-100 focus:outline-none shadow-sm pr-8" placeholder="Buscar curso" wire:model.live="search" name="search" id="06a943c59f33a34bb5924aaf72cd2995">

                        <div class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-nonetext-secondary-400">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <li class="overflow-hidden">
                <a class="block" href="{{ route('curso-estado', 'medicina-interna-actualizada') }}">
                    <figure>
                        <img class="rounded-lg w-full aspect-video object-cover object-center" src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn" alt="Curso completo de PHP 8 y MySQL 8 desde cero">
                    </figure>
                    <h2 class="mt-1 truncate">Medicina Interna Actualizada: Diagnóstico y Tratamiento de Patologías Comunes</h2>
                </a>
            </li>
            <li class="overflow-hidden">
                <a class="block" href="{{ route('curso-estado', 'cardiologia-intervencionista') }}">
                    <figure>
                        <img class="rounded-lg w-full aspect-video object-cover object-center" src="https://imgs.search.brave.com/9fHgnYFP-osPyUhYZw-fICUI7ZW66AkMe0tGSGxX22o/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUwMC9mdWxsXzM3/MHgyMDAuanBn" alt="Laravel Eloquent: Relaciones">
                    </figure>
                    <h2 class="mt-1 truncate">Cardiología Intervencionista: Avances y Técnicas Quirúrgicas</h2>

                </a>
            </li>
            <li class="overflow-hidden">
                <a class="block" href="{{ route('curso-estado', 'neurologia-clinica') }}">
                    <figure>
                        <img class="rounded-lg w-full aspect-video object-cover object-center" src="https://imgs.search.brave.com/zsT0z5BfvOrrvzWLjyKmMoktwiNdP-DCdlnkKN6d4fo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy81/NDcyMi9mdWxsXzM3/MHgyMDAuanBn" alt="Curso Tailwind desde cero">
                    </figure>
                    <h2 class="mt-1 truncate">Neurología Clínica: Enfoque Integral de Enfermedades Neurodegenerativas</h2>
                </a>
            </li>
            <li class="overflow-hidden">
                <a class="block" href="{{ route('curso-estado', 'dermatologia-practica') }}">
                    <figure>
                        <img class="rounded-lg w-full aspect-video object-cover object-center" src="https://imgs.search.brave.com/m1ewUg3FyNKmQ3F1IglgaLRYqXtbSV-2jVrvBwchW3A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjE3MS9mdWxsXzM3/MHgyMDAuanBn" alt="Aprende Laravel Livewire desde cero">
                    </figure>
                    <h2 class="mt-1 truncate">Dermatología Práctica: Abordaje de Afecciones Cutáneas Frecuentes</h2>
                </a>
            </li>
            <li class="overflow-hidden">
                <a class="block" href="{{ route('curso-estado', 'ginecologia-obstetricia') }}">
                    <figure>
                        <img class="rounded-lg w-full aspect-video object-cover object-center" src="https://imgs.search.brave.com/AdrUybrUF10yenYvEEMujPylVhJUk2pGVTwB1Ive_kA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjUxNS9mdWxsXzM3/MHgyMDAuanBn" alt="Aprende Laravel 10 desde cero">
                    </figure>
                    <h2 class="mt-1 truncate">Ginecología y Obstetricia</h2>
                </a>
            </li>
        </ul>

        <div class="mt-8">
            <div>
            </div>
        </div>
    </div>
</x-app-layout>
