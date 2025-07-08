<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite([
            'resources/css/app.css',
            'resources/css/navbar.css',
            'resources/css/footer.css'.
            'resources/js/app.js',
            'resources/js/navbar.js',
            'resources/js/footer.js',
            ])


        <!-- Extras -->
        @stack('styles')
        @stack('scripts')
    </head>
    <body class="font-sans bg-light-gray antialiased">
        <div class="min-h-screen ">
            <livewire:layout.navigation />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <div class="h-[100dvh]"></div>
        <div class="h-[100dvh]"></div>
        <div class="h-[100dvh]"></div>
        <footer id="site-footer" style="
      background: #ffffff;
      box-shadow: 0 -4px 6px rgba(0,0,0,0.1);
  ">
            <div style="
        max-width: 1024px;
        margin: 0 auto;
        padding: 3rem 1rem;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 2rem;
    ">
                <!-- Logo izquierda -->
                <div>
                    <img src="/images/logo.png" alt="IMCS Logo" style="height: 4rem; width: auto;">
                </div>

                <!-- Enlaces centro -->
                <div>
                    <h4 style="font-weight: 600; color: #374151; margin-bottom: .5rem;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: .5rem;"><a href="{{ route('home') }}" style="color: #4B5563; text-decoration: none;">Home</a></li>
                        <li style="margin-bottom: .5rem;"><a href="{{ route('cursos') }}" style="color: #4B5563; text-decoration: none;">Cursos</a></li>
                        <li style="margin-bottom: .5rem;"><a href="{{ route('fqa') }}" style="color: #4B5563; text-decoration: none;">FQA</a></li>
                        <li><a href="#" style="color: #4B5563; text-decoration: none;">Blog</a></li>
                    </ul>
                </div>
                <!-- Enlaces derecha -->
                <div>
                    <h4 style="font-weight: 600; color: #374151; margin-bottom: .5rem;">Más Información</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: .5rem;"><a href="#" style="color: #4B5563; text-decoration: none;">Acerca de</a></li>
                        <li style="margin-bottom: .5rem;"><a href="#" style="color: #4B5563; text-decoration: none;">Contacto</a></li>
                        <li style="margin-bottom: .5rem;"><a href="#" style="color: #4B5563; text-decoration: none;">Términos de uso</a></li>
                        <li><a href="#" style="color: #4B5563; text-decoration: none;">Política de privacidad</a></li>
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
        <button id="back-to-top" aria-label="Volver arriba" style="
      position: fixed;
      bottom: 1.5rem;
      right: 1.5rem;
      width: 3rem;
      height: 3rem;
      background: rgba(255,255,255,0.7);
      backdrop-filter: blur(4px);
      border: none;
      border-radius: 50%;
      font-size: 1.5rem;
      color: #333;
      display: none;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 1000;
      transition: background .2s;
  ">
            ↑
        </button>

        {{-- JAVASCRIPT --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const btn = document.getElementById('back-to-top');
                window.addEventListener('scroll', () => {
                    btn.style.display = window.scrollY > 300 ? 'flex' : 'none';
                });
                btn.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            });
        </script>
    </body>
</html>
