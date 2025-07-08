<footer class="footer bg-white">
    <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
        <!-- Logo grande izquierda -->
        <div class="footer-logo">
            <img src="/images/logo.png" alt="IMCS Logo" class="h-16 w-auto">
        </div>

        <!-- Links centro -->
        <div class="footer-links">
            <h4 class="text-lg font-semibold mb-4 text-gray-700">Quick Links</h4>
            <ul>
                <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                <li class="mb-2"><a href="{{ route('cursos') }}">Cursos</a></li>
                <li class="mb-2"><a href="{{ route('fqa') }}">FQA</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>

        <!-- Links derecha -->
        <div class="footer-links">
            <h4 class="text-lg font-semibold mb-4 text-gray-700">Más Información</h4>
            <ul>
                <li class="mb-2"><a href="#">Acerca de</a></li>
                <li class="mb-2"><a href="#">Contacto</a></li>
                <li class="mb-2"><a href="#">Términos de uso</a></li>
                <li><a href="#">Política de privacidad</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copy bg-gray-50 text-center py-4 text-sm text-gray-500">
        &copy; {{ date('Y') }} IMCS. Todos los derechos reservados.
    </div>
</footer>

<button id="back-to-top" aria-label="Volver arriba" class="back-to-top hidden">
    ↑
</button>
