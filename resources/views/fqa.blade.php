<x-app-layout>
    @push('styles')
        @vite(['resources/css/fqa.css'])
    @endpush

    <br>
    <br>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-dark-text text-center mb-10 md:mb-12">Preguntas Frecuentes <span
                class="text-accent-blue"> (FAQ)</span></h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <button
                    class="w-full text-left flex justify-between items-center"
                    onclick="toggleFAQ(1)"
                    aria-expanded="false"
                    id="faq-button-1"
                >
                    <span class="text-lg font-medium text-dark-text">
                        ¿Cuáles son los requisitos para inscribirme en un curso?
                    </span>
                    <div class="flex-shrink-0">
                        <svg
                            id="icon-plus-1"
                            class="w-6 h-6 text-accent-blue"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 11-2 0V6a1 1 0 011-1z"
                                clip-rule="evenodd"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <svg
                            id="icon-minus-1"
                            class="w-6 h-6 text-accent-blue hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </button>
                <div id="answer-1" class="faq-answer-container mt-4 text-dark-text leading-relaxed h-0">
                    <p>Generalmente, nuestros cursos no tienen requisitos previos estrictos, pero algunos cursos
                        avanzados pueden requerir conocimientos básicos en áreas específicas. Consulta la descripción de
                        cada curso para más detalles. ¡Siempre estamos aquí para ayudarte a elegir el curso adecuado
                        para ti!</p>
                </div>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <button
                    class="w-full text-left flex justify-between items-center"
                    onclick="toggleFAQ(2)"
                    aria-expanded="false"
                    id="faq-button-2"
                >
                    <span class="text-lg font-medium text-dark-text">
                        ¿Ofrecen certificados al finalizar los cursos?
                    </span>
                    <div class="flex-shrink-0">
                        <svg
                            id="icon-plus-2"
                            class="w-6 h-6 text-accent-blue"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 11-2 0V6a1 1 0 011-1z"
                                clip-rule="evenodd"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <svg
                            id="icon-minus-2"
                            class="w-6 h-6 text-accent-blue hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </button>
                <div id="answer-2" class="faq-answer-container mt-4 text-dark-text leading-relaxed h-0">
                    <p>Sí, al completar exitosamente cualquier curso en nuestra plataforma, recibirás un certificado de
                        finalización que podrás descargar y compartir. Nuestros certificados están diseñados para
                        validar tus nuevas habilidades.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <button
                    class="w-full text-left flex justify-between items-center"
                    onclick="toggleFAQ(3)"
                    aria-expanded="false"
                    id="faq-button-3"
                >
                    <span class="text-lg font-medium text-dark-text">
                        ¿Cuál es la metodología de enseñanza?
                    </span>
                    <div class="flex-shrink-0">
                        <svg
                            id="icon-plus-3"
                            class="w-6 h-6 text-accent-blue"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 11-2 0V6a1 1 0 011-1z"
                                clip-rule="evenodd"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <svg
                            id="icon-minus-3"
                            class="w-6 h-6 text-accent-blue hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </button>
                <div id="answer-3" class="faq-answer-container mt-4 text-dark-text leading-relaxed h-0">
                    <p>Nuestra metodología combina videos explicativos, materiales de lectura complementarios,
                        ejercicios prácticos y proyectos que te permitirán aplicar lo aprendido. Fomentamos el
                        aprendizaje activo y la resolución de problemas.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <button
                    class="w-full text-left flex justify-between items-center"
                    onclick="toggleFAQ(4)"
                    aria-expanded="false"
                    id="faq-button-4"
                >
                    <span class="text-lg font-medium text-dark-text">
                        ¿Hay soporte disponible si tengo dudas durante el curso?
                    </span>
                    <div class="flex-shrink-0">
                        <svg
                            id="icon-plus-4"
                            class="w-6 h-6 text-accent-blue"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 11-2 0V6a1 1 0 011-1z"
                                clip-rule="evenodd"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <svg
                            id="icon-minus-4"
                            class="w-6 h-6 text-accent-blue hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </button>
                <div id="answer-4" class="faq-answer-container mt-4 text-dark-text leading-relaxed h-0">
                    <p>Absolutamente. Contamos con foros de discusión y canales de comunicación donde puedes plantear
                        tus dudas. Nuestros instructores y la comunidad de estudiantes están activos para brindarte el
                        apoyo necesario.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <button
                    class="w-full text-left flex justify-between items-center"
                    onclick="toggleFAQ(5)"
                    aria-expanded="false"
                    id="faq-button-5"
                >
                    <span class="text-lg font-medium text-dark-text">
                        ¿Puedo acceder a los cursos desde cualquier dispositivo?
                    </span>
                    <div class="flex-shrink-0">
                        <svg
                            id="icon-plus-5"
                            class="w-6 h-6 text-accent-blue"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v8a1 1 0 11-2 0V6a1 1 0 011-1z"
                                clip-rule="evenodd"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <svg
                            id="icon-minus-5"
                            class="w-6 h-6 text-accent-blue hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </button>
                <div id="answer-5" class="faq-answer-container mt-4 text-dark-text leading-relaxed h-0">
                    <p>Sí, nuestra plataforma es completamente responsiva y puedes acceder a todo el contenido de los
                        cursos desde tu computadora, tablet o smartphone, siempre que tengas conexión a internet.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <script type="text/javascript">
        function toggleFAQ(id) {
            const answer = document.getElementById(`answer-${id}`);
            const iconPlus = document.getElementById(`icon-plus-${id}`);
            const iconMinus = document.getElementById(`icon-minus-${id}`);
            const button = document.getElementById(`faq-button-${id}`);

            if (answer.style.height === '0px' || answer.style.height === '') {
                answer.classList.add('open');
                answer.style.height = answer.scrollHeight + 'px';

                iconPlus.classList.add('hidden');
                iconMinus.classList.remove('hidden');
                button.setAttribute('aria-expanded', 'true');
            } else {
                answer.style.height = '0px';
                answer.classList.remove('open');

                iconPlus.classList.remove('hidden');
                iconMinus.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            }
        }
    </script>
</x-app-layout>
