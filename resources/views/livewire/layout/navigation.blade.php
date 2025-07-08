<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>


{{-- En tu layout o componente Blade, dentro de <head> o justo antes de </body> --}}
@push('styles')
    @vite(['resources/css/mavbar.css']);
@endpush

@push('scripts')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush

{{-- Navbar responsive con AlpineJS --}}
<nav
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.pageYOffset > 50"
    :class="scrolled ? 'navbar-scrolled' : 'navbar-default'"
    class="fixed w-full transition-all duration-300 ease-in-out"
    id="main-navbar"
>
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo y nombre -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" wire:navigate class="shrink-0">
                    <x-application-logo class="h-9 w-auto"/>
                </a>
                <span class="ml-4 text-3xl text-stone-800 font-bold">IMCS</span>
            </div>

            <!-- Menú de escritorio -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8 text-lg">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    <span class="navbar-link-text">Home</span>
                </x-nav-link>
                <x-nav-link :href="route('cursos')" :active="request()->routeIs('cursos')" wire:navigate>
                    <span class="navbar-link-text">Cursos</span>
                </x-nav-link>
                <x-nav-link :href="route('fqa')" :active="request()->routeIs('fqa')" wire:navigate>
                    <span class="navbar-link-text">FQA</span>
                </x-nav-link>
                <p class="mx-8 text-lg leading-5 text-stone-400">|</p>
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md
                       text-gray-500 bg-white hover:text-gray-700 focus:outline-none
                       transition ease-in-out duration-150"
                            >
                                <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                                     x-text="name"
                                     x-on:profile-updated.window="name = $event.detail.name">
                                </div>
                                <svg class="fill-current h-4 w-4 ms-1" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293
                           a1 1 0 111.414 1.414l-4 4a1 1
                           0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile')" wire:navigate>
                                Perfil
                            </x-dropdown-link>
                            <button wire:click="logout" class="w-full text-start">
                                <x-dropdown-link>Cerrar sesión</x-dropdown-link>
                            </button>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                       class="navbar-login-btn px-4 py-2 rounded-md">
                        Iniciar Sesión
                    </a>
                @endguest
            </div>

            <!-- Botón hamburger móvil -->
            <div class="flex items-center sm:hidden -me-2">
                <button
                    @click="open = !open"
                    class="p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100
                 focus:outline-none transition duration-150 ease-in-out"
                >
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú responsive -->
    <div x-show="open" x-cloak class="sm:hidden pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
            Home
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('cursos')" :active="request()->routeIs('cursos')" wire:navigate>
            Cursos
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('fqa')" :active="request()->routeIs('fqa')" wire:navigate>
            FQA
        </x-responsive-nav-link>

        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @auth
                <div class="px-4">
                    <div
                        class="font-medium text-base text-gray-800 dark:text-gray-200"
                        x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                        x-text="name"
                    ></div>
                    <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile')" wire:navigate>
                        Perfil
                    </x-responsive-nav-link>
                    <button wire:click="logout" class="w-full text-start">
                        <x-responsive-nav-link>Cerrar sesión</x-responsive-nav-link>
                    </button>
                </div>
            @endauth

            @guest
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('login')" wire:navigate>
                        Iniciar sesión
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('register')" wire:navigate>
                        Registrarse
                    </x-responsive-nav-link>
                </div>
            @endguest
        </div>
    </div>
</nav>
