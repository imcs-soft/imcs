<div>
    <footer id="site-footer" class="app-footer-container" >
        <div class="app-footer">
            <!-- Logo izquierda -->
            <div>
                <div class="flex items-center">
                    <a href="{{ route('home') }}" wire:navigate class="shrink-0">
                        <x-application-logo class="h-8 w-auto"/>
                    </a>
                    <span class="ml-4 text-2xl text-stone-800 font-bold">IMCS</span>
                </div>
            </div>

            <!-- Enlaces centro -->
            <div>
                <h4 class="app-footer-title">Quick Links</h4>
                <ul class="app-footer-list">
                    <li  class="app-footer-list-entry"><a href="{{ route('home') }}" class="app-footer-link">Inicio</a></li>
                    <li  class="app-footer-list-entry"><a href="{{ route('cursos') }}" class="app-footer-link">Cursos</a></li>
                    <li  class="app-footer-list-entry"><a href="{{ route('fqa') }}" class="app-footer-link">FQA</a></li>
                    <li  class="app-footer-list-entry"><a href="#" class="app-footer-link">Blog</a></li>
                </ul>
            </div>
            <!-- Enlaces derecha -->
            <div>
                <h4 class="app-footer-title">Más Información</h4>
                <ul class="app-footer-list">
                    <li class="app-footer-list-entry"><a href="#" class="app-footer-link">Acerca de</a></li>
                    <li class="app-footer-list-entry"><a href="#" class="app-footer-link">Contacto</a></li>
                    <li class="app-footer-list-entry"><a href="#" class="app-footer-link">Términos de uso</a></li>
                    <li class="app-footer-list-entry"><a href="#" class="app-footer-link">Política de privacidad</a></li>
                </ul>
            </div>
        </div>

        <div style="
        background: #F9FAFB;
        text-align: center;
        font-size: .875rem;
        color: #6B7280;
        padding: 1rem 0;
    ">
            &copy; {{ date('Y') }} IMCS. Todos los derechos reservados.
        </div>
    </footer>

    {{-- BOTÓN “VOLVER ARRIBA” --}}
    <button id="back-to-top" aria-label="Volver arriba" class="footer-back-button">
        ↑
    </button>
</div>
