<x-app-layout>
    <section id="courses-section" class="py-12">
        <div class="container mx-auto px-4 space-y-12">

            {{-- 1. Cursos Presenciales --}}
            <div id="precenciales">
                <h2 class="text-2xl font-semibold mb-6">Cursos Presenciales</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía General</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">4 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Presencial  (Ecuador)</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía Obstétrica y Ginecológica</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">6 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Presencial  (Ecuador)</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
                        </div>
                    </div>


                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía Vascular Periférica</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">3 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Presencial  (Ecuador)</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
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
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía General</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">4 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm7 11-6-2V9l6-2v10Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Online</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía Obstétrica y Ginecológica</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">6 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm7 11-6-2V9l6-2v10Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Online</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
                        </div>
                    </div>


                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía Vascular Periférica</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">3 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1Zm7 11-6-2V9l6-2v10Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Online</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
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
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía General</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">4 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Presencial  (Ecuador)</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía Obstétrica y Ginecológica</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">6 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Presencial  (Ecuador)</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
                            </div>
                        </div>
                    </div>


                    {{-- Card 3 --}}
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <img src="https://imgs.search.brave.com/yw61yVhSuQdGcrkzdSSOLceudvLH-e13SeXIlbqlhzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92aXRo/YXMuZXMvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDgvZWNv/Z3JhZmlhLTEtODQw/eDU4OC5qcGc" alt="Curso B" class="h-64 w-full object-cover">
                        <div class="p-4 mt-1">

                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Ecografía Vascular Periférica</a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">3 semanas</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Presencial  (Ecuador)</p>
                                </li>
                            </ul>

                            <div class="h-full pt-8">
                                <form action="{{ route('curso', 'ecografia-general') }}">
                                    @csrf
                                    <input class="mt-auto w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                                </form>
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
