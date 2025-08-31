@push('styles')
    <style>
        .app-navbar {
            z-index: 50;
        }
    </style>
@endpush

<nav class="app-navbar fixed top-0 left-0 w-full bg-white dark:bg-gray-800 antialiased shadow z-50">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-2">
        <div class="flex items-center justify-between">
            <!-- LOGO + LINKS -->
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="{{ route('home') }}" title="">
                        <img class="w-auto rounded h-8" src="https://scontent.fgye1-2.fna.fbcdn.net/v/t39.30808-6/240841969_1146485829210485_4557371010813413499_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=cSmvGh-j9ToQ7kNvwHbwXfy&_nc_oc=AdnGh3nI7diGK5cc7-CUNhaHPR_Ek2zvpVmw4-u92LQ8eNNAyQSNP26ceIEkLxfhJOM&_nc_zt=23&_nc_ht=scontent.fgye1-2.fna&_nc_gid=UbjwO2xbEgCD4NgMQGikHA&oh=00_AfUNJJyAOuVYaqHlAfXiHTBHTfkoar1hzOQ9gYJ-hMIDbg&oe=68A3FFE0" alt="">
                    </a>
                </div>
                <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                    <li><a href="{{ route('home') }}" class="flex text-lg font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Inicio</a></li>
                    <li><a href="{{ route('cursos') }}" class="flex text-lg font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Cursos</a></li>
                    <li><a href="{{ route('fqa') }}" class="flex text-lg font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">FQA</a></li>
                </ul>
            </div>

            <!-- ACTIONS: Cart, User, Mobile Menu -->
            <div class="flex items-center lg:space-x-2">

                <!-- User Dropdown -->
                <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-lg font-medium leading-none text-gray-900 dark:text-white">
                    @auth()
                        <img class="w-9 h-9 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    @endauth
                    @guest()
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    @endguest
                    <svg class="w-4 h-4 text-gray-900 dark:text-white ms-1" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                </button>

                <div id="userDropdown1" class="hidden z-50 w-56 divide-y divide-gray-100 overflow-hidden rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700">
                    @auth()
                        <ul class="hidden lg:block space-y-2 font-medium p-2">
                            <li>
                                <a href="{{ route('profile') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-[25px] h-[26px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="ms-3">Mi Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('mis-cursos') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-[25px] h-[26px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                                    </svg>
                                    <span class="ms-3">Mis cursos</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('mis-certificados') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="w-[25px] h-[26px] shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11 9a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
                                        <path fill-rule="evenodd" d="M9.896 3.051a2.681 2.681 0 0 1 4.208 0c.147.186.38.282.615.255a2.681 2.681 0 0 1 2.976 2.975.681.681 0 0 0 .254.615 2.681 2.681 0 0 1 0 4.208.682.682 0 0 0-.254.615 2.681 2.681 0 0 1-2.976 2.976.681.681 0 0 0-.615.254 2.682 2.682 0 0 1-4.208 0 .681.681 0 0 0-.614-.255 2.681 2.681 0 0 1-2.976-2.975.681.681 0 0 0-.255-.615 2.681 2.681 0 0 1 0-4.208.681.681 0 0 0 .255-.615 2.681 2.681 0 0 1 2.976-2.975.681.681 0 0 0 .614-.255ZM12 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" clip-rule="evenodd"/>
                                        <path d="M5.395 15.055 4.07 19a1 1 0 0 0 1.264 1.267l1.95-.65 1.144 1.707A1 1 0 0 0 10.2 21.1l1.12-3.18a4.641 4.641 0 0 1-2.515-1.208 4.667 4.667 0 0 1-3.411-1.656Zm7.269 2.867 1.12 3.177a1 1 0 0 0 1.773.224l1.144-1.707 1.95.65A1 1 0 0 0 19.915 19l-1.32-3.93a4.667 4.667 0 0 1-3.4 1.642 4.643 4.643 0 0 1-2.53 1.21Z"/>
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Mis certificados</span>
                                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('biblioteca') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="w-[25px] h-[26px] shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5"/>
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Biblioteca</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="lg:hidden space-y-1 font-medium p-2">
                            <li>
                                <a href="{{ route('profile') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-[25px] h-[26px] text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="ms-3">Mi Perfil</span>
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="space-y-2 font-medium">
                            <li>
                                <a href="#" class="flex items-center p-2 text-red-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="flex-1 ms-3 whitespace-nowrap">Cerrar Sessión</span>
                                </a>
                            </li>
                        </ul>
                    @endauth
                    @guest()
                            <ul class="space-y-1 font-medium">
                                <li>
                                    <a href="{{ route('login') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <span class="flex-1 ms-3 whitespace-nowrap">Iniciar Sessión</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <span class="flex-1 ms-3 whitespace-nowrap">Registrarse</span>
                                    </a>
                                </li>
                            </ul>
                    @endguest
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1"
                        class="inline-flex lg:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-900 dark:text-white">
                    <span class="sr-only">Open Menu</span>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="ecommerce-navbar-menu-1" class="absolute left-0 right-0 z-50 hidden bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-b-lg py-3 px-4 mt-4">
            <ul class="text-gray-900 dark:text-white text-lg font-medium space-y-3">
                <li><a href="{{ route('home') }}" class="hover:text-primary-700 dark:hover:text-primary-500">Inicio</a></li>
                <li><a href="{{ route('cursos') }}" class="hover:text-primary-700 dark:hover:text-primary-500">Cursos</a></li>
                <li><a href="{{ route('fqa') }}" class="hover:text-primary-700 dark:hover:text-primary-500">Fqa</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Recuerda agregar esto en el contenido principal -->
<!-- <div class="pt-24">Contenido debajo del navbar fijo</div> -->
