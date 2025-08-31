<!-- css -->
@push('styles')
<style>
    .carousel-wrapper {
        padding: 2rem 0;
    }

    #carousel-container {
        scroll-behavior: smooth;
    }

    #carousel-track .card {
        flex: 0 0 calc((100% - 2 * 1rem) / 3);
        background: #fff;
        border-radius: .5rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        scroll-snap-align: start;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .btn-info {
        padding: .5rem 1rem;
        background: #6A7EFC;
        color: #fff;
        border: none;
        border-radius: .25rem;
        cursor: pointer;
        transition: background .2s;
    }
    .btn-info:hover {
        background: #5a6edc;
    }

    .carousel-prev,
    .carousel-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 3rem;
        height: 3rem;
        background: rgba(255,255,255,0.6);
        backdrop-filter: blur(6px);
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #333;
        cursor: pointer;
        z-index: 10;
        transition: background .2s;
    }
    .carousel-prev:hover,
    .carousel-next:hover {
        background: rgba(255,255,255,0.8);
    }
    .carousel-prev { left: 1rem; }
    .carousel-next { right: 1rem; }

    .carousel-dots {
        position: absolute;
        bottom: 1.5rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: .75rem;
        z-index: 10;
    }
    .carousel-dots .dot {
        width: .75rem;
        height: .75rem;
        background: rgba(200,200,200,0.6);
        border-radius: 50%;
        cursor: pointer;
        transition: background .3s;
    }
    .carousel-dots .dot.active {
        background: #6A7EFC;
    }
</style>
@endpush

<!-- caruser -->
<div class="carousel-wrapper px-10 relative w-full">

    {{-- 1. Área de scroll solo en este div --}}
    <div id="carousel-container" class="overflow-hidden">
        <div id="carousel-track" class="flex gap-4 transition-transform duration-500 ease">
            <!-- 6 tarjetas de ejemplo -->
            <div class="card flex-shrink-0">
                <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col h-full">
                    <h3 class="text-lg font-semibold mb-1">Curso 1</h3>
                    <p class="text-gray-600 text-sm mb-1">Duración: 4 semanas</p>
                    <p class="text-gray-600 text-sm mb-4">Modalidad: Online</p>
                    <form action="{{ route('curso', 'ecografia-general') }}">
                        @csrf
                        <input class="mt-auto w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                    </form>
                </div>
            </div>
            <div class="card flex-shrink-0">
                <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col h-full">
                    <h3 class="text-lg font-semibold mb-1">Curso 1</h3>
                    <p class="text-gray-600 text-sm mb-1">Duración: 4 semanas</p>
                    <p class="text-gray-600 text-sm mb-4">Modalidad: Online</p>
                    <form action="{{ route('curso', 'ecografia-general') }}">
                        @csrf
                        <input class="mt-auto w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                    </form>
                </div>
            </div>
            <div class="card flex-shrink-0">
                <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col h-full">
                    <h3 class="text-lg font-semibold mb-1">Curso 1</h3>
                    <p class="text-gray-600 text-sm mb-1">Duración: 4 semanas</p>
                    <p class="text-gray-600 text-sm mb-4">Modalidad: Online</p>
                    <form action="{{ route('curso', 'ecografia-general') }}">
                        @csrf
                        <input class="mt-auto w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                    </form>
                </div>
            </div>
            <div class="card flex-shrink-0">
                <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col h-full">
                    <h3 class="text-lg font-semibold mb-1">Curso 1</h3>
                    <p class="text-gray-600 text-sm mb-1">Duración: 4 semanas</p>
                    <p class="text-gray-600 text-sm mb-4">Modalidad: Online</p>
                    <form action="{{ route('curso', 'ecografia-general') }}">
                        @csrf
                        <input class="mt-auto w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                    </form>
                </div>
            </div>
            <div class="card flex-shrink-0">
                <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col h-full">
                    <h3 class="text-lg font-semibold mb-1">Curso 1</h3>
                    <p class="text-gray-600 text-sm mb-1">Duración: 4 semanas</p>
                    <p class="text-gray-600 text-sm mb-4">Modalidad: Online</p>
                    <form action="{{ route('curso', 'ecografia-general') }}">
                        @csrf
                        <input class="mt-auto w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                    </form>
                </div>
            </div>
            <div class="card flex-shrink-0">
                <img src="https://imgs.search.brave.com/nYiNtlGH1Qc7Z73X0UVrDSInf6JiN0k0Wz-iRBrnteY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/cGx1cy5lcy93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyNC8wNS9B/Y3JlZGl0YWRvLXBv/ci5wbmc" alt="Curso 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col h-full">
                    <h3 class="text-lg font-semibold mb-1">Curso 1</h3>
                    <p class="text-gray-600 text-sm mb-1">Duración: 4 semanas</p>
                    <p class="text-gray-600 text-sm mb-4">Modalidad: Online</p>
                    <form action="{{ route('curso', 'ecografia-general') }}">
                            @csrf
                            <input class="mt-auto w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-700" type="submit" value="Saber más">
                        </form>
                </div>
            </div>
            <!-- Repite las .card para Curso 2 a Curso n -->
            <!-- ... -->
        </div>
    </div>

    {{-- 2. Flechas FIXED --}}
    <button id="carousel-prev" class="carousel-prev">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M13.729 5.575c1.304-1.074 3.27-.146 3.27 1.544v9.762c0 1.69-1.966 2.618-3.27 1.544l-5.927-4.881a2 2 0 0 1 0-3.088l5.927-4.88Z" clip-rule="evenodd"/>
        </svg>
    </button>
    <button id="carousel-next" class="carousel-next">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z" clip-rule="evenodd"/>
        </svg>
    </button>

    {{-- 3. Dots FIXED --}}
    <div id="carousel-dots" class="carousel-dots"></div>
</div>


<!-- js -->
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('carousel-container');
        const track     = document.getElementById('carousel-track');
        const cards     = Array.from(track.children);
        const prevBtn   = document.getElementById('carousel-prev');
        const nextBtn   = document.getElementById('carousel-next');
        const dotsWrap  = document.getElementById('carousel-dots');

        const gap      = parseFloat(getComputedStyle(track).gap);
        let   cw       = cards[0].offsetWidth + gap;
        let   index    = 0;
        const maxIndex = cards.length - 3;

        // construir dots
        for (let i = 0; i <= maxIndex; i++) {
            const dot = document.createElement('button');
            dot.className = 'dot';
            dot.addEventListener('click', () => { index = i; update(); });
            dotsWrap.appendChild(dot);
        }
        const dots = Array.from(dotsWrap.children);

        function update() {
            track.style.transform = `translateX(-${index * cw}px)`;
            dots.forEach((d,i) => d.classList.toggle('active', i === index));
        }

        prevBtn.addEventListener('click', () => {
            index = index === 0 ? maxIndex : index - 1;
            update();
        });
        nextBtn.addEventListener('click', () => {
            index = index === maxIndex ? 0 : index + 1;
            update();
        });

        // autoplay cada 6s
        setInterval(() => {
            index = index === maxIndex ? 0 : index + 1;
            update();
        }, 6000);

        window.addEventListener('resize', () => {
            cw = cards[0].offsetWidth + parseFloat(getComputedStyle(track).gap);
            update();
        });

        update();
    });
</script>
@endpush

