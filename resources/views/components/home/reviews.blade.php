@push('styles')
    @vite(['resources/css/reviews.css'])
@endpush
@push('scripts')
    @vite(['resources/js/reviews.js'])
@endpush
<hr />
<section id="reviews" style="
    padding: 2rem 1rem;
    background: #f9f9f9;
">
    <div class="reviews-container">
        <!-- Reseña 1 -->
        <div class="review active">
            <img src="https://lh4.googleusercontent.com/s569KZI6rYiB2g09uZYkWe7BW3H6uaILjlytdcSK-DOfuTzRS_YGWWYwAt0zdUSARcusgReKEsQPdl7bro_I2OUpHLf7SKaNJrEziA5XTQ14iEGrRGxMm8oxQvvYcmUJ-M-8CpkhbBqEgV5dNX2v7tey-asPzcrLeMXr_mtitaSeBcSuKxzDBQ=w1280" alt="Ana Pérez">
            <div class="text-wrapper">
                <p class="quote">
                    Gracias a este curso, he logrado una mejora notable en mis diagnósticos, incrementando mi precisión en un impresionante 50%. Esta formación me ha proporcionado herramientas y conocimientos vanguardistas que han transformado radicalmente mi enfoque profesional. No solo he optimizado la identificación de patologías, sino que también he adquirido una mayor confianza en mis decisiones clínicas, lo que se traduce directamente en un beneficio significativo para mis pacientes. La metodología del curso, combinada con la aplicación práctica de los conceptos aprendidos, ha sido fundamental para alcanzar este nivel de excelencia en mi práctica diaria.
                </p>
                <p class="author">— Ana Pérez</p>
            </div>
        </div>

        <!-- Reseña 2 -->
        <div class="review">
            <img src="https://lh3.googleusercontent.com/j9nqbei_4HigkSkkiFVgVOS4wL1F18-M0zdIAkdA5ddZZuti2fagdlMuO4gjhE7fdlYjjuYh5LBk-0q52sI9he11ngGx_ORLX8slOQR8EI1Z5Iz5jXIbFiimE7XAThphozCxfij2z3CzWzFIWDqLm0lQ5ZNjiieGqWIWxOqPYDVxu_SK567_6g=w1280" alt="Carlos Gómez">
            <div class="text-wrapper">
                <p class="quote">
                    La experiencia fue excepcional: casos reales, tutores atentos y contenido actualizado que realmente marca la diferencia.
                </p>
                <p class="author">— Carlos Gómez</p>
            </div>
        </div>

        <!-- Reseña 3 -->
        <div class="review">
            <img src="https://lh4.googleusercontent.com/dkKjPwfqH93Jaury7anzCjD3xCkaf-rxOALPPrUd7W8cM_nfynezRsZH6vbf-THaO3erDl3zjWGZ_CZ_He29e1CQ-o26_Ij6j3XH0bUvbbsXydkSvveDUYRNCinwSSas49zKiLzrp51BveWeXsFxYYy-kvbrPnZqniriTlh_dF7oVxdIhU4egg=w1280" alt="Lucía Torres">
            <div class="text-wrapper">
                <p class="quote">
                    El soporte de los instructores y los ejercicios prácticos me ayudaron a consolidar conocimientos de forma sencilla y efectiva.
                </p>
                <p class="author">— Lucía Torres</p>
            </div>
        </div>
    </div>
    <br />
    <br />
</section>
