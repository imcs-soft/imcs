<div>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    @auth()
                        <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:ring-gray-200">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                            </svg>
                        </button>
                    @endauth

                    @guest()
                        <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" type="button" class="md:hidden inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:ring-gray-200 dark:text-gray-400">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                            </svg>
                        </button>
                    @endguest
                    <a href="{{ route('home') }}" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">IMCS</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-8 text-lg">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            <span class="navbar-link-text text-lg">Inicio</span>
                        </x-nav-link>
                        <x-nav-link :href="route('cursos')" :active="request()->routeIs('cursos')">
                            <span class="navbar-link-text text-lg">Cursos</span>
                        </x-nav-link>
                        <x-nav-link :href="route('fqa')" :active="request()->routeIs('fqa')">
                            <span class="navbar-link-text text-lg">FQA</span>
                        </x-nav-link>
                        <p class="mx-8 text-lg leading-5 text-stone-400">|</p>
                    </div>

                    <div class="flex items-center ms-3">
                        @auth()
                            <div class="mr-2 ml-4">
                                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        Neil Sims
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        neil.sims@flowbite.com
                                    </p>
                                </div>
                                <ul class="pt-1 pb-0" role="none">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                    </li>
                                    <li>
                                        <button class="block px-4 py-2 text-left w-full text-sm text-red-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" wire:click="logout">Cerrar sesión</button>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                        @guest()
                            <a href="{{ route('login') }}"
                               class="navbar-login-btn px-4 py-2 rounded">
                                Iniciar Sesión
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <x-app.sidebar />
</div>


