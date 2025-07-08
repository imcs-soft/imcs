<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Cursos Médicos y Ecografía</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Colores de tu paleta */
        .bg-primary-red { background-color: #FF5656; }
        .text-primary-red { color: #FF5656; }
        .bg-light-gray { background-color: #EDF2F6; }
        .text-light-gray { color: #EDF2F6; }
        .bg-accent-blue { background-color: #6A7EFC; }
        .text-accent-blue { color: #6A7EFC; }
        .bg-dark-gray { background-color: #494953; }
        .text-dark-gray { color: #494953; }
    </style>
</head>
<body class="font-sans bg-light-gray">

<nav class="bg-dark-gray p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-light-gray text-2xl font-bold">Tu Plataforma</a>
        <div class="space-x-4">
            <a href="#" class="text-light-gray hover:text-accent-blue">Cursos</a>
            <a href="#" class="text-light-gray hover:text-accent-blue">Especialidades</a>
            <a href="#" class="text-light-gray hover:text-accent-blue">Sobre Nosotros</a>
            <a href="#" class="text-light-gray hover:text-accent-blue">Contacto</a>
            <a href="#" class="bg-accent-blue text-white px-4 py-2 rounded-md hover:bg-primary-red transition-colors duration-300">Iniciar Sesión</a>
        </div>
    </div>
</nav>

<header class="bg-accent-blue text-white py-20 text-center">
    <div class="container mx-auto">
        <h1 class="text-5xl font-bold mb-4">Aprende Medicina y Ecografía Online</h1>
        <p class="text-xl mb-8">Cursos de alta calidad para profesionales de la salud y estudiantes.</p>
        <button class="bg-primary-red text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-colors duration-300">Explorar Cursos</button>
    </div>
</header>

<section class="py-16">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-dark-gray text-center mb-12">Nuestros Cursos Destacados</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-light-gray h-48 flex items-center justify-center">
                    <p class="text-dark-gray text-xl">Imagen del Curso 1</p>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-dark-gray mb-2">Ecografía Abdominal Básica</h3>
                    <p class="text-gray-600 mb-4">Aprende los fundamentos de la ecografía abdominal para un diagnóstico preciso.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-accent-blue font-bold text-lg">Nivel: Básico</span>
                        <a href="#" class="bg-primary-red text-white px-5 py-2 rounded-md hover:bg-opacity-90 transition-colors duration-300">Ver Curso</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-light-gray h-48 flex items-center justify-center">
                    <p class="text-dark-gray text-xl">Imagen del Curso 2</p>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-dark-gray mb-2">Farmacología Clínica Avanzada</h3>
                    <p class="text-gray-600 mb-4">Profundiza en la interacción de fármacos y sus aplicaciones clínicas.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-accent-blue font-bold text-lg">Nivel: Avanzado</span>
                        <a href="#" class="bg-primary-red text-white px-5 py-2 rounded-md hover:bg-opacity-90 transition-colors duration-300">Ver Curso</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-light-gray h-48 flex items-center justify-center">
                    <p class="text-dark-gray text-xl">Imagen del Curso 3</p>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-dark-gray mb-2">Interpretación de ECG</h3>
                    <p class="text-gray-600 mb-4">Domina la lectura e interpretación de electrocardiogramas complejos.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-accent-blue font-bold text-lg">Nivel: Intermedio</span>
                        <a href="#" class="bg-primary-red text-white px-5 py-2 rounded-md hover:bg-opacity-90 transition-colors duration-300">Ver Curso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-accent-blue py-16 text-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-12">Lo que dicen nuestros estudiantes</h2>
        <div class="max-w-3xl mx-auto">
            <p class="text-xl italic mb-6">"La plataforma es increíble, los cursos son muy completos y la calidad de los instructores es excepcional. ¡He aprendido muchísimo!"</p>
            <p class="font-semibold text-lg">- Dra. Ana Gómez</p>
        </div>
    </div>
</section>

<footer class="bg-dark-gray py-8 text-light-gray text-center">
    <div class="container mx-auto">
        <p>&copy; 2025 Tu Plataforma de Cursos. Todos los derechos reservados.</p>
        <div class="mt-4 space-x-4">
            <a href="#" class="hover:text-accent-blue">Política de Privacidad</a>
            <a href="#" class="hover:text-accent-blue">Términos y Condiciones</a>
        </div>
    </div>
</footer>

</body>
</html>
