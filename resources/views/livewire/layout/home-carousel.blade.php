@push('styles')
    @vite(['resources/css/home-carousel.css'])
@endpush


<div class="carousel-container">

    <!-- 1. Inputs para controlar cada slide -->
    <input type="radio" name="carousel" id="carousel-slide-1" checked>
    <input type="radio" name="carousel" id="carousel-slide-2">

    <!-- 2. Wrapper de slides -->
    <div class="slides-wrapper">
        <!-- Slide 1: tarjetas 1–3 -->
        <div class="slide">
            <div class="card">
                <img src="https://imgs.search.brave.com/EkiqwF8l-Pl_McP-xwbwWEzqvz9BhM9xmKUVawWEP2A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDgv/OTE2LzExOS9zbWFs/bC9kb2N0b3Itb2Yt/bWVkaWNpbmUtdG91/Y2hlcy1hbi1lbGVj/dHJvbmljLW1lZGlj/YWwtcmVjb3JkLW9u/LWEtc21hcnQtcGhv/bmUtZGlnaXRhbC1o/ZWFsdGhjYXJlLWFu/ZC1uZXR3b3JrLWNv/bm5lY3Rpdml0eS12/aWEtaG9sb2dyYW0t/bW9kZXJuLXZpcnR1/YWwtc2NyZWVuLWlu/dGVyZmFjZS1tZWRp/Y2FsLXRlY2hub2xv/Z3ktcGhvdG8uanBn" alt="Curso A">
                <div class="card-content">
                    <h3>Curso A</h3>
                    <p>Duración: 4 semanas</p>
                    <p>Modalidad: Online</p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgs.search.brave.com/EkiqwF8l-Pl_McP-xwbwWEzqvz9BhM9xmKUVawWEP2A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDgv/OTE2LzExOS9zbWFs/bC9kb2N0b3Itb2Yt/bWVkaWNpbmUtdG91/Y2hlcy1hbi1lbGVj/dHJvbmljLW1lZGlj/YWwtcmVjb3JkLW9u/LWEtc21hcnQtcGhv/bmUtZGlnaXRhbC1o/ZWFsdGhjYXJlLWFu/ZC1uZXR3b3JrLWNv/bm5lY3Rpdml0eS12/aWEtaG9sb2dyYW0t/bW9kZXJuLXZpcnR1/YWwtc2NyZWVuLWlu/dGVyZmFjZS1tZWRp/Y2FsLXRlY2hub2xv/Z3ktcGhvdG8uanBn" alt="Curso B">
                <div class="card-content">
                    <h3>Curso B</h3>
                    <p>Duración: 6 semanas</p>
                    <p>Modalidad: Presencial</p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgs.search.brave.com/EkiqwF8l-Pl_McP-xwbwWEzqvz9BhM9xmKUVawWEP2A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDgv/OTE2LzExOS9zbWFs/bC9kb2N0b3Itb2Yt/bWVkaWNpbmUtdG91/Y2hlcy1hbi1lbGVj/dHJvbmljLW1lZGlj/YWwtcmVjb3JkLW9u/LWEtc21hcnQtcGhv/bmUtZGlnaXRhbC1o/ZWFsdGhjYXJlLWFu/ZC1uZXR3b3JrLWNv/bm5lY3Rpdml0eS12/aWEtaG9sb2dyYW0t/bW9kZXJuLXZpcnR1/YWwtc2NyZWVuLWlu/dGVyZmFjZS1tZWRp/Y2FsLXRlY2hub2xv/Z3ktcGhvdG8uanBn" alt="Curso C">
                <div class="card-content">
                    <h3>Curso C</h3>
                    <p>Duración: 3 semanas</p>
                    <p>Modalidad: Mixto</p>
                </div>
            </div>
        </div>

        <!-- Slide 2: tarjetas 4–6 -->
        <div class="slide">
            <div class="card">
                <img src="https://imgs.search.brave.com/EkiqwF8l-Pl_McP-xwbwWEzqvz9BhM9xmKUVawWEP2A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDgv/OTE2LzExOS9zbWFs/bC9kb2N0b3Itb2Yt/bWVkaWNpbmUtdG91/Y2hlcy1hbi1lbGVj/dHJvbmljLW1lZGlj/YWwtcmVjb3JkLW9u/LWEtc21hcnQtcGhv/bmUtZGlnaXRhbC1o/ZWFsdGhjYXJlLWFu/ZC1uZXR3b3JrLWNv/bm5lY3Rpdml0eS12/aWEtaG9sb2dyYW0t/bW9kZXJuLXZpcnR1/YWwtc2NyZWVuLWlu/dGVyZmFjZS1tZWRp/Y2FsLXRlY2hub2xv/Z3ktcGhvdG8uanBn" alt="Curso D">
                <div class="card-content">
                    <h3>Curso D</h3>
                    <p>Duración: 5 semanas</p>
                    <p>Modalidad: Online</p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgs.search.brave.com/EkiqwF8l-Pl_McP-xwbwWEzqvz9BhM9xmKUVawWEP2A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDgv/OTE2LzExOS9zbWFs/bC9kb2N0b3Itb2Yt/bWVkaWNpbmUtdG91/Y2hlcy1hbi1lbGVj/dHJvbmljLW1lZGlj/YWwtcmVjb3JkLW9u/LWEtc21hcnQtcGhv/bmUtZGlnaXRhbC1o/ZWFsdGhjYXJlLWFu/ZC1uZXR3b3JrLWNv/bm5lY3Rpdml0eS12/aWEtaG9sb2dyYW0t/bW9kZXJuLXZpcnR1/YWwtc2NyZWVuLWlu/dGVyZmFjZS1tZWRp/Y2FsLXRlY2hub2xv/Z3ktcGhvdG8uanBn" alt="Curso E">
                <div class="card-content">
                    <h3>Curso E</h3>
                    <p>Duración: 8 semanas</p>
                    <p>Modalidad: Presencial</p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgs.search.brave.com/EkiqwF8l-Pl_McP-xwbwWEzqvz9BhM9xmKUVawWEP2A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDgv/OTE2LzExOS9zbWFs/bC9kb2N0b3Itb2Yt/bWVkaWNpbmUtdG91/Y2hlcy1hbi1lbGVj/dHJvbmljLW1lZGlj/YWwtcmVjb3JkLW9u/LWEtc21hcnQtcGhv/bmUtZGlnaXRhbC1o/ZWFsdGhjYXJlLWFu/ZC1uZXR3b3JrLWNv/bm5lY3Rpdml0eS12/aWEtaG9sb2dyYW0t/bW9kZXJuLXZpcnR1/YWwtc2NyZWVuLWlu/dGVyZmFjZS1tZWRp/Y2FsLXRlY2hub2xv/Z3ktcGhvdG8uanBn" alt="Curso F">
                <div class="card-content">
                    <h3>Curso F</h3>
                    <p>Duración: 2 semanas</p>
                    <p>Modalidad: Mixto</p>
                </div>
            </div>
        </div>
    </div>
    <!-- 3. Controles prev/next -->
    <div class="carousel-controls">
        <label for="carousel-slide-1" class="control prev">‹</label>
        <label for="carousel-slide-2" class="control next">›</label>
    </div>

    <!-- 4. Indicadores (dots) -->
    <div class="carousel-dots">
        <label for="carousel-slide-1" class="dot"></label>
        <label for="carousel-slide-2" class="dot"></label>
    </div>

</div>
