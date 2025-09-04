<x-app-layout>

    <section class="pt-12 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6">
                Mi Biblioteca Virtual
            </h1>

            <div
                x-data="{
                    open: false,
                    currentResource: null,
                    protectionActive: true,
                    suspiciousActivity: false,

                    openResource(resource) {
                        this.currentResource = resource;
                        this.open = true;
                        this.startProtection();
                    },

                    closeModal() {
                        this.open = false;
                        this.stopProtection();
                    },

                    startProtection() {
                        this.protectionActive = true;
                        this.suspiciousActivity = false;
                        this.$nextTick(() => {
                            this.initializeProtection();
                        });
                    },

                    stopProtection() {
                        this.protectionActive = false;
                    },

                    hideModalOnSuspicion() {
                        if (this.protectionActive) {
                            this.suspiciousActivity = true;
                            this.open = false;
                            location.reload();
                        }
                    },

                    initializeProtection() {
                        console.log('Protección activada para el modal');
                    },

                    getFileIcon(fileType) {
                        switch(fileType.toLowerCase()) {
                            case 'pdf': return '📄';
                            case 'doc':
                            case 'docx': return '📝';
                            case 'txt': return '📄';
                            case 'xls':
                            case 'xlsx': return '📊';
                            case 'ppt':
                            case 'pptx': return '📋';
                            default: return '📁';
                        }
                    },

                    canPreviewInline(fileType) {
                        return ['pdf', 'txt'].includes(fileType.toLowerCase());
                    },

                    getGoogleViewerUrl(url, fileType) {
                        if (fileType.toLowerCase() === 'pdf') {
                            return url + '#toolbar=0&navpanes=0&scrollbar=0';
                        }
                        return 'https://docs.google.com/gview?url=' + encodeURIComponent(url) + '&embedded=true';
                    }
                }"
                @keydown.window.escape="closeModal()"
                x-init="
                    $nextTick(() => {
                        window.libraryProtection = {
                            hideModal: () => hideModalOnSuspicion()
                        };
                    });
                "
            >
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($recursos as $recurso)
                        <div
                            class="bg-white rounded-lg shadow flex flex-col overflow-hidden hover:shadow-lg transition-shadow">
                            <div
                                class="h-40 bg-gradient-to-br from-indigo-50 to-blue-50 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-4xl mb-2" x-text="getFileIcon('{{ $recurso->file_type }}')"></div>
                                    <span
                                        class="text-xs text-gray-500 uppercase font-semibold">{{ $recurso->file_type }}</span>
                                </div>
                            </div>
                            <div class="p-4 flex-1 flex flex-col">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $recurso->name }}</h3>
                                <p class="text-sm text-gray-500 mb-4 capitalize">
                                    Archivo {{ $recurso->file_type }}
                                </p>
                                <button
                                    @click="openResource({
                                        name: '{{ addslashes($recurso->name) }}',
                                        url: '{{ $recurso->url_path }}',
                                        type: '{{ $recurso->file_type }}'
                                    })"
                                    class="mt-auto bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded text-sm transition-colors"
                                >
                                    <span class="flex items-center justify-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        Ver recurso
                                    </span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Modal / Visor de archivos -->
                <div
                    x-cloak
                    x-show="open && !suspiciousActivity"
                    x-transition.opacity
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 no-screenshot protected-content"
                    @click.self="closeModal()"
                >
                    <div
                        class="bg-white rounded-lg overflow-hidden w-full max-w-6xl h-full max-h-[95vh] flex flex-col shadow-2xl">
                        <!-- Header del modal -->
                        <div class="flex justify-between items-center bg-gray-50 p-4 border-b modal-header">
                            <div class="flex items-center">
                                <span class="text-2xl mr-3"
                                      x-text="currentResource ? getFileIcon(currentResource.type) : ''"></span>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800"
                                        x-text="currentResource ? currentResource.name : ''"></h3>
                                    <p class="text-sm text-gray-500"
                                       x-text="currentResource ? 'Archivo ' + currentResource.type.toUpperCase() : ''"></p>
                                </div>
                            </div>
                            <button
                                @click="closeModal()"
                                class="text-gray-500 hover:text-gray-700 text-2xl leading-none p-2 hover:bg-gray-200 rounded transition-colors modal-close-btn"
                                aria-label="Cerrar"
                            >
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Contenido del modal -->
                        <div class="flex-1 relative bg-gray-100 protected-content-area">
                            <!-- Vista previa para archivos soportados -->
                            <template x-if="currentResource && canPreviewInline(currentResource.type)">
                                <iframe
                                    :src="currentResource.type.toLowerCase() === 'pdf' ?
                                           currentResource.url + '#toolbar=0&navpanes=0&scrollbar=0' :
                                           currentResource.url"
                                    class="w-full h-full border-0 protected-iframe"
                                    style="pointer-events: none;"
                                    oncontextmenu="return false;"
                                ></iframe>
                            </template>

                            <!-- Vista previa usando Google Docs Viewer para otros archivos -->
                            <template x-if="currentResource && !canPreviewInline(currentResource.type)">
                                <iframe
                                    :src="getGoogleViewerUrl(currentResource.url, currentResource.type)"
                                    class="w-full h-full border-0 protected-iframe"
                                    style="pointer-events: none;"
                                    oncontextmenu="return false;"
                                ></iframe>
                            </template>

                            <!-- Overlay de protección -->
                            <div class="absolute inset-0 pointer-events-none protected-overlay"
                                 style="background: transparent; z-index: 1000;"
                                 oncontextmenu="return false;"
                                 onselectstart="return false;"
                                 ondragstart="return false;">
                            </div>
                        </div>

                        <!-- Footer informativo -->
                        <div class="bg-gray-50 px-4 py-3 border-t modal-footer">
                            <div class="flex items-center justify-between text-sm text-gray-600">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Vista de solo lectura - Contenido protegido
                                </span>
                                <span class="text-xs text-gray-500">
                                    Presiona ESC para cerrar
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        [x-cloak] { display: none !important; }

        /* Protección específica para el contenido del iframe y overlay */
        .protected-content-area,
        .protected-iframe,
        .protected-overlay {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
            -webkit-touch-callout: none !important;
            -webkit-user-drag: none !important;
            -khtml-user-drag: none !important;
            -moz-user-drag: none !important;
            -o-user-drag: none !important;
            user-drag: none !important;
        }

        /* Solo aplicar pointer-events: none a los iframes */
        .protected-iframe {
            pointer-events: none !important;
        }

        /* Asegurar que el header y footer del modal sean clickeables */
        .modal-header,
        .modal-footer,
        .modal-close-btn {
            pointer-events: auto !important;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Permitir interacción con botones y controles */
        .modal-close-btn,
        .modal-close-btn * {
            pointer-events: auto !important;
            cursor: pointer !important;
        }

        .no-screenshot {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media print {
            .protected-content, .no-screenshot {
                display: none !important;
                visibility: hidden !important;
            }

            body::after {
                background-color: #1F2937;
                content: "⚠️ IMPRESIÓN NO PERMITIDA - CONTENIDO PROTEGIDO";
                width: 100%;
                height: 100%;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 24px;
                font-weight: bold;
                color: red;
                z-index: 9999;
            }
        }

        @media (max-width: 0px) {
            .protected-content {
                display: none !important;
            }
        }

        .protected-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: transparent;
            z-index: 1001;
            pointer-events: none;
        }

        @keyframes warning-blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        .warning-blink {
            animation: warning-blink 0.5s infinite;
        }
    </style>

    @push('scripts')
        <script>
            // Variables globales para la protección
            let protectionInterval;
            let visibilityCheckInterval;
            let devToolsCheckInterval;
            let lastActiveTime = Date.now();
            let isModalOpen = false;

            document.addEventListener('keydown', function (e) {
                console.log("Tecla presionada:", e.key, "Código:", e.keyCode);
            });

            document.addEventListener('DOMContentLoaded', function () {

                // Función principal para ocultar modal cuando se detecte captura
                function triggerProtection(reason) {
                    console.warn('🚨 Protección activada:', reason);

                    if (window.libraryProtection && typeof window.libraryProtection.hideModal === 'function') {
                        window.libraryProtection.hideModal();
                    } else {
                        // Fallback si Alpine.js no está disponible
                        const modal = document.querySelector('[x-show="open && !suspiciousActivity"]');
                        if (modal) {
                            modal.style.display = 'none';
                        }
                        alert('⚠️ Actividad sospechosa detectada. Contenido ocultado.');
                        location.reload();
                    }
                }

                // Detectar herramientas de desarrollo mejorado
                function checkDevTools() {
                    const widthThreshold = window.outerWidth - window.innerWidth > 160;
                    const heightThreshold = window.outerHeight - window.innerHeight > 160;

                    if (widthThreshold || heightThreshold) {
                        if (isModalOpen) {
                            triggerProtection('Herramientas de desarrollo detectadas');
                        }
                    }
                }

                // Detectar cambios de visibilidad sospechosos
                function handleVisibilityChange() {
                    if (document.hidden && isModalOpen) {
                        // Cuando la página se oculta (posible captura)
                        setTimeout(() => {
                            if (!document.hidden && isModalOpen) {
                                triggerProtection('Cambio de visibilidad sospechoso');
                            }
                        }, 100);
                    }
                }

                // Detectar pérdida de foco sospechosa
                function handleFocusChange() {
                    if (!document.hasFocus() && isModalOpen) {
                        setTimeout(() => {
                            if (document.hasFocus() && Date.now() - lastActiveTime < 1000) {
                                triggerProtection('Cambio de foco rápido detectado');
                            }
                        }, 50);
                    }
                }

                // Monitorear actividad del usuario
                function updateLastActiveTime() {
                    lastActiveTime = Date.now();
                }

                // Event listeners para detección
                document.addEventListener('visibilitychange', handleVisibilityChange);
                document.addEventListener('blur', handleFocusChange);
                document.addEventListener('focus', handleFocusChange);
                document.addEventListener('mousemove', updateLastActiveTime);
                document.addEventListener('keypress', updateLastActiveTime);

                // Detectar teclas de captura específicas
                document.addEventListener('keydown', function (e) {

                    if (isModalOpen) {
                        // Print Screen
                        if ((e.key === 'PrintScreen' || e.keyCode === 44) ||
                            (e.key === 'S' && e.keyCode === 82) ||
                            (e.key === 's' && e.keyCode === 83) ||
                            (e.key === 'Shift' && e.keyCode === 16) ||
                            (e.key === 'Meta' && e.keyCode === 91)
                        ) {
                            e.preventDefault();
                            e.stopPropagation();
                            triggerProtection('Tecla PrintScreen detectada');
                            return false;
                        }

                        // Cmd/Windows + Shift + S (Captura en Windows 10/11)
                        if ((e.metaKey || e.key === 'Meta') && e.shiftKey && e.key === 's') {
                            e.preventDefault();
                            e.stopPropagation();
                            triggerProtection('Atajo de captura de Windows detectado');
                            return false;
                        }

                        // Cmd + Shift + 3/4/5 (Capturas en macOS)
                        if (e.metaKey && e.shiftKey && (e.key === '3' || e.key === '4' || e.key === '5')) {
                            e.preventDefault();
                            e.stopPropagation();
                            triggerProtection('Atajo de captura de macOS detectado');
                            return false;
                        }

                        // F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
                        if (e.keyCode === 123 ||
                            (e.ctrlKey && e.shiftKey && (e.keyCode === 73 || e.keyCode === 74)) ||
                            (e.ctrlKey && e.keyCode === 85)) {
                            e.preventDefault();
                            e.stopPropagation();
                            triggerProtection('Teclas de desarrollo detectadas');
                            return false;
                        }

                        // Ctrl+S (Guardar)
                        if (e.ctrlKey && e.key === 's') {
                            e.preventDefault();
                            e.stopPropagation();
                            triggerProtection('Intento de guardado detectado');
                            return false;
                        }
                    }
                });

                // Interceptar tecla PrintScreen al soltarla
                document.addEventListener('keyup', function(e) {
                    if (e.key === 'PrintScreen' && isModalOpen) {
                        triggerProtection('PrintScreen liberada');
                        // Limpiar portapapeles
                        if (navigator.clipboard && navigator.clipboard.writeText) {
                            navigator.clipboard.writeText('').catch(() => {});
                        }
                    }
                });

                // Deshabilitar menú contextual solo en áreas protegidas específicas
                document.addEventListener('contextmenu', function (e) {
                    if (e.target.closest('.protected-content-area') || e.target.closest('.protected-iframe')) {
                        e.preventDefault();
                        if (isModalOpen) {
                            triggerProtection('Menú contextual en área protegida');
                        }
                        return false;
                    }
                });

                // Deshabilitar drag and drop
                document.addEventListener('dragstart', function (e) {
                    if (e.target.closest('.protected-content-area')) {
                        e.preventDefault();
                        triggerProtection('Intento de arrastre detectado');
                        return false;
                    }
                });

                // Monitorear cuando el modal está abierto
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                            const modal = document.querySelector('[x-show="open && !suspiciousActivity"]');
                            if (modal) {
                                const isVisible = window.getComputedStyle(modal).display !== 'none';

                                if (isVisible && !isModalOpen) {
                                    // Modal se abrió
                                    isModalOpen = true;
                                    startProtectionMonitoring();
                                } else if (!isVisible && isModalOpen) {
                                    // Modal se cerró
                                    isModalOpen = false;
                                    stopProtectionMonitoring();
                                }
                            }
                        }
                    });
                });

                // Observar cambios en el DOM
                observer.observe(document.body, {
                    childList: true,
                    subtree: true,
                    attributes: true,
                    attributeFilter: ['style', 'class']
                });

                function startProtectionMonitoring() {
                    console.log('🛡️ Iniciando monitoreo de protección');

                    // Limpiar intervalos existentes
                    stopProtectionMonitoring();

                    // Verificar herramientas de desarrollo cada 500ms
                    devToolsCheckInterval = setInterval(checkDevTools, 500);

                    // Limpiar consola cada segundo
                    const originalLog = console.log;
                    setInterval(() => {
                        if (isModalOpen) {
                            console.clear();
                            console.warn('🚨 Contenido protegido - Monitoreo activo');
                        }
                    }, 1000);
                }

                function stopProtectionMonitoring() {
                    console.log('🛡️ Deteniendo monitoreo de protección');

                    if (devToolsCheckInterval) {
                        clearInterval(devToolsCheckInterval);
                        devToolsCheckInterval = null;
                    }
                    if (visibilityCheckInterval) {
                        clearInterval(visibilityCheckInterval);
                        visibilityCheckInterval = null;
                    }
                }

                // Protección adicional: detectar extensiones de captura comunes
                if (typeof chrome !== 'undefined' && chrome.runtime) {
                    try {
                        // Detectar si hay extensiones sospechosas instaladas
                        chrome.management.getAll((extensions) => {
                            const suspiciousExtensions = extensions.filter(ext =>
                                ext.name.toLowerCase().includes('screenshot') ||
                                ext.name.toLowerCase().includes('capture') ||
                                ext.name.toLowerCase().includes('screen')
                            );

                            if (suspiciousExtensions.length > 0 && isModalOpen) {
                                triggerProtection('Extensiones de captura detectadas');
                            }
                        });
                    } catch (error) {
                        // Error esperado si no tenemos permisos
                    }
                }
            });

        </script>
    @endpush
</x-app-layout>
