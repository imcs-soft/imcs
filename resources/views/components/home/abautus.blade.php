@push('styles')
    @vite(['resources/css/abautus.css'])
@endpush

<section id="about-us">
    <div class="container">
        {{-- Columna izquierda: About Us --}}
        <div>
            <h2>About Us</h2>
            <p>
                En IMCS nos apasiona la formación de profesionales de la salud.
                Nuestra misión es brindar cursos interactivos, actualizados
                y accesibles, que te ayuden a dominar las últimas técnicas
                de diagnóstico por imágenes y emergencias médicas.
            </p>
            <p>
                Con más de 10 años de experiencia en el sector educativo,
                contamos con un equipo de instructores expertos y una
                plataforma diseñada para hacer tu aprendizaje sencillo
                y eficiente.
            </p>
        </div>

        {{-- Columna derecha: Reproductor de video --}}
        <div>
            <video controls poster="/videos/intro-poster.png">
                <source src="/videos/intro.mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
        </div>
    </div>
</section>
