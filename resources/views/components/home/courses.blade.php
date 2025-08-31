
@push("styles")
    <style>
        .curso_modality {
            font-size: xx-small;
            color: #8a8a8a;
        }
    </style>
@endpush


<div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
    {{-- Tarjeta 1 --}}

    @foreach($cursos as $curso)
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
