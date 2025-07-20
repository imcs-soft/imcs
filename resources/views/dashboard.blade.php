<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Sidebar Menu</title>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/navbar.css'])
</head>
<body class="bg-gray-100 flex h-screen">

<!-- Sidebar a la derecha, oculto por defecto -->
<aside id="sidebar"
       class="fixed top-0 right-0 w-64 h-full bg-white p-4 shadow-lg
                transform translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">IMCS</h1>
        <button id="closeSidebar" class="text-gray-500 hover:text-gray-700 focus:outline-none">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
    <nav>
        <ul class="space-y-2">
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md">
                    <i class="far fa-calendar-alt mr-3"></i>
                    Calendar
                    <span class="ml-auto text-xs bg-purple-200 text-purple-700 px-2 py-0.5 rounded-full">PRO</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md">
                    <i class="fas fa-tasks mr-3"></i>
                    Kanban
                    <span class="ml-auto text-xs bg-purple-200 text-purple-700 px-2 py-0.5 rounded-full">PRO</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-cog mr-3"></i>
                    Account Settings
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-lock mr-3"></i>
                    Authentications
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-ellipsis-h mr-3"></i>
                    Misc
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li class="mt-4 pt-4 border-t border-gray-200">
                <span class="text-xs font-semibold text-gray-500 uppercase px-4">Components</span>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 bg-purple-50 text-purple-700 rounded-md font-semibold">
                    <i class="fas fa-grip-horizontal mr-3"></i>
                    Cards
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-desktop mr-3"></i>
                    User interface
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-expand-alt mr-3"></i>
                    Extended UI
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-icons mr-3"></i>
                    Boxicons
                </a>
            </li>
        </ul>
    </nav>
</aside>

<!-- Contenido principal -->
<div class="flex-1 flex flex-col">

    <!-- navbar -->
    <nav class="bg-white navbar-default p-4 shadow-md flex items-center justify-between">
        <div class="md:hidden">
            <br>
        </div>
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
        </div>
        <button id="hamburger" class="justify-end text-gray-500 hover:text-gray-700 focus:outline-none">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </nav>

    <!-- Main -->
    <main class="flex-1 p-6 overflow-y-auto">
        <h2 class="text-3xl font-bold mb-6">Cards</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Ejemplo de card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>

            <!-- Repite aquÃ­ tus otras cards -->
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Ejemplo de card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>

            <!-- Repite aquÃ­ tus otras cards -->
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Ejemplo de card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/600x300/87CEEB/ffffff?text=Orange"
                     alt="Orange Glass"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Card title</h3>
                    <p class="text-gray-600 mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <a href="#"
                       class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go somewhere
                    </a>
                </div>
            </div>

            <!-- Repite aquÃ­ tus otras cards -->
        </div>

    </main>
</div>

<script>
    const sidebar      = document.getElementById('sidebar');
    const hamburger    = document.getElementById('hamburger');
    const closeSidebar = document.getElementById('closeSidebar');

    // Mostrar/ocultar sidebar
    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('translate-x-full');
    });
    closeSidebar.addEventListener('click', () => {
        sidebar.classList.add('translate-x-full');
    });
</script>
</body>
</html>
