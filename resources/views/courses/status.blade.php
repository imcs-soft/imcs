<x-app-layout>

    @push('scripts')
        <script>
            const courseDataJson = @json($course);
            const modulesDataJson = @json($modules);
            const progressDataJson = @json($progress);
            const resourcesDataJson = @json($resources);
            console.log("Todos los recursos ", resourcesDataJson)

            function courseData(course, modules, progress, resources) {
                return {
                    courseTitle: course.title,
                    instructor: course.instructor?.name || 'Instructor del Curso',
                    modules: modules,
                    resources: resources,
                    currentModule: 0,
                    currentVideo: 0,
                    quizAnswer: null,
                    quizFeedback: '',
                    showQuiz: false,
                    loading: false,
                    certificateUnlocked: false,
                    showToast: false,
                    toastMessage: '',
                    toastType: 'success',
                    progressPercentage: progress.percentage,
                    completedModules: progress.completed_modules,
                    totalModules: progress.total_modules,
                    // Variables para el modal de recursos
                    showResourceModal: false,
                    currentResource: null,
                    protectionActive: false,
                    suspiciousActivity: false,

                    init() {
                        console.log("Datos de módulos recibidos:", modules);
                        console.log("Datos de recursos recibidos:", resources);

                        // Encontrar el primer módulo disponible no completado
                        const firstAvailableModule = this.modules.findIndex(m => m.is_unlocked && !m.is_completed);
                        if (firstAvailableModule !== -1) {
                            this.currentModule = firstAvailableModule;
                            this.modules[this.currentModule].open = true;
                        } else {
                            // Si todos están completados, abrir el primer módulo
                            this.currentModule = 0;
                            this.modules[0].open = true;
                        }
                        this.checkCertificateStatus();
                        this.loadAndPlay();

                        // Inicializar protección de recursos
                        this.$nextTick(() => {
                            window.resourceProtection = {
                                hideModal: () => this.hideModalOnSuspicion()
                            };
                            this.initializeGlobalProtection();
                        });
                    },

                    // Funciones existentes...
                    get currentModuleData() {
                        return this.modules[this.currentModule] || {};
                    },

                    get currentVideoUrl() {
                        const videos = this.currentModuleData.videos || [];
                        const video = videos[this.currentVideo];
                        return video.video_url;
                    },

                    get currentVideoTitle() {
                        const videos = this.currentModuleData.videos || [];
                        const video = videos[this.currentVideo];
                        return video?.title || 'Video no disponible';
                    },

                    get totalVideosInModule() {
                        return (this.currentModuleData.videos || []).length;
                    },

                    get progressText() {
                        return `${this.completedModules} de ${this.totalModules} módulos completados`;
                    },

                    // Funciones para los recursos
                    getFileIcon(fileType) {
                        switch (fileType.toLowerCase()) {
                            case 'pdf':
                                return '📄';
                            case 'doc':
                            case 'docx':
                                return '📝';
                            case 'txt':
                                return '📄';
                            case 'xls':
                            case 'xlsx':
                                return '📊';
                            case 'ppt':
                            case 'pptx':
                                return '📋';
                            default:
                                return '📁';
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
                    },

                    openResource(resource) {
                        this.currentResource = resource;
                        this.showResourceModal = true;
                        this.startProtection();
                    },

                    closeResourceModal() {
                        this.showResourceModal = false;
                        this.stopProtection();
                    },

                    // Funciones para cerrar modales con escape
                    closeQuizModal() {
                        this.showQuiz = false;
                        this.quizAnswer = null;
                        this.quizFeedback = '';
                    },

                    startProtection() {
                        this.protectionActive = true;
                        this.suspiciousActivity = false;
                        this.$nextTick(() => {
                            this.initializeProtection();
                            // Iniciar monitoreo especializado para modal
                            if (window.statusProtection && window.statusProtection.startModalProtection) {
                                window.statusProtection.startModalProtection();
                            }
                        });
                    },

                    stopProtection() {
                        this.protectionActive = false;
                        if (window.statusProtection && window.statusProtection.stopModalProtection) {
                            window.statusProtection.stopModalProtection();
                        }
                    },

                    hideModalOnSuspicion() {
                        if (this.protectionActive) {
                            this.suspiciousActivity = true;
                            this.showResourceModal = false;
                            location.reload();
                        }
                    },

                    initializeProtection() {
                        console.log('Protección activada para el modal de recursos');
                    },

                    initializeGlobalProtection() {
                        // Configuraciòn global de protección
                        window.statusProtection = {
                            isModalOpen: false,
                            hideModal: () => this.hideModalOnSuspicion(),
                            startModalProtection: () => {
                                window.statusProtection.isModalOpen = true;
                            },
                            stopModalProtection: () => {
                                window.statusProtection.isModalOpen = false;
                            }
                        };
                    },

                    // Funciones existentes del curso...
                    toggleModule(idx) {
                        if (!this.modules[idx].is_unlocked) {
                            this.showToastMessage('Este módulo aún no está disponible', 'error');
                            return;
                        }

                        this.modules[idx].open = !this.modules[idx].open;

                        if (this.modules[idx].open) {
                            this.currentModule = idx;
                            this.currentVideo = 0;
                            this.showQuiz = false;
                            this.loadAndPlay();

                            // Cerrar otros módulos
                            this.modules.forEach((m, i) => {
                                if (i !== idx) m.open = false;
                            });
                        }
                    },

                    selectVideo(mIdx, vIdx) {
                        if (!this.modules[mIdx].is_unlocked) return;

                        this.currentModule = mIdx;
                        this.currentVideo = vIdx;
                        this.showQuiz = false;
                        this.quizAnswer = null;
                        this.quizFeedback = '';
                        this.loadAndPlay();
                    },

                    loadAndPlay() {
                        if (this.$refs.video) {
                            this.$refs.video.load();
                        }
                    },

                    onVideoEnd() {
                        const currentModuleVideos = this.currentModuleData.videos || [];

                        if (this.currentVideo + 1 < currentModuleVideos.length) {
                            setTimeout(() => {
                                this.currentVideo++;
                                this.loadAndPlay();
                            }, 1000);
                            return;
                        }

                        if (!this.currentModuleData.is_completed) {
                            setTimeout(() => {
                                this.showQuiz = true;
                            }, 1000);
                        }
                    },

                    async submitQuiz() {
                        if (this.quizAnswer === 'Si') {
                            this.loading = true;
                            try {
                                const response = await fetch(`/course/module/${this.currentModuleData.id}/complete`, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                                    }
                                });

                                const data = await response.json();

                                if (response.ok) {
                                    this.quizFeedback = '¡Módulo completado exitosamente! ✅';
                                    this.modules[this.currentModule].is_completed = true;
                                    this.progressPercentage = data.progress.percentage;
                                    this.completedModules = data.progress.completed_modules;

                                    this.showToastMessage('¡Módulo completado!', 'success');

                                    const nextModuleIndex = this.currentModule + 1;
                                    if (nextModuleIndex < this.modules.length) {
                                        this.modules[nextModuleIndex].is_unlocked = true;

                                        setTimeout(() => {
                                            this.closeQuizModal();
                                            this.moveToNextModule();
                                        }, 3000);
                                    } else {
                                        setTimeout(() => {
                                            this.closeQuizModal();
                                            this.checkCertificateStatus();
                                        }, 3000);
                                    }
                                } else {
                                    this.quizFeedback = data.error || 'Error al completar el módulo';
                                    this.showToastMessage(data.error || 'Error al completar el módulo', 'error');
                                }
                            } catch (error) {
                                console.error('Error:', error);
                                this.quizFeedback = 'Error de conexión. Intenta de nuevo.';
                                this.showToastMessage('Error de conexión. Intenta de nuevo.', 'error');
                            } finally {
                                this.loading = false;
                            }
                        } else {
                            this.closeQuizModal()
                        }
                    },

                    moveToNextModule() {
                        const nextModule = this.currentModule + 1;
                        if (nextModule < this.modules.length && this.modules[nextModule].is_unlocked) {
                            this.currentModule = nextModule;
                            this.currentVideo = 0;
                            this.modules[nextModule].open = true;

                            this.modules[nextModule - 1].open = false;

                            this.showQuiz = false;
                            this.quizAnswer = null;
                            this.quizFeedback = '';
                            this.loadAndPlay();

                            this.showToastMessage(`Iniciando: ${this.modules[nextModule].title}`, 'success');
                        }
                    },

                    checkCertificateStatus() {
                        const allCompleted = this.modules.every(m => m.is_completed);
                        this.certificateUnlocked = allCompleted;

                        if (allCompleted) {
                            this.showToastMessage('¡Felicitaciones! Has completado todo el curso', 'success');
                        }
                    },

                    showCertificate() {
                        this.showToastMessage('Generando certificado...', 'success');
                        setTimeout(() => {
                            window.location.href = `/course/${course.slug}/certificate`;
                        }, 1500);
                    },

                    showToastMessage(message, type) {
                        this.toastMessage = message;
                        this.toastType = type;
                        this.showToast = true;
                        setTimeout(() => {
                            this.showToast = false;
                        }, 5000);
                    }
                }
            }
        </script>
    @endpush
    <div
        x-data="courseData(courseDataJson, modulesDataJson, progressDataJson, resourcesDataJson)"
        x-init="init()"
        class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8"
        @keydown.window.escape="closeResourceModal(); closeQuizModal()"
    >

        {{-- AREA PRINCIPAL --}}
        <div class="lg:col-span-2 pt-14 space-y-6">

            <div class="w-full aspect-video bg-black rounded-lg overflow-hidden shadow">
                <video
                    x-ref="video"
                    @loadedmetadata="$refs.video.play()"
                    @ended="onVideoEnd()"
                    controls
                    class="w-full h-full"
                >
                    <source :src="currentVideoUrl" type="video/mp4"/>
                    Tu navegador no soporta el elemento video.
                </video>
            </div>

            <h1 class="text-2xl sm:text-3xl font-bold" x-text="courseTitle"></h1>
            <p class="text-gray-700 text-sm sm:text-base" x-text="currentModuleData.description"></p>

            {{-- Información del video actual --}}
            <div class="bg-gray-50 p-4 rounded-lg">
                <h3 class="font-medium text-gray-900 mb-2">Video actual:</h3>
                <p class="text-sm text-gray-700" x-text="currentVideoTitle"></p>
                <div class="flex items-center mt-2 space-x-4 text-xs text-gray-500">
                    <span x-text="`Video ${currentVideo + 1} de ${totalVideosInModule}`"></span>
                </div>
            </div>

            {{-- Mensaje de curso completado --}}
            <div
                x-show="certificateUnlocked"
                x-transition
                class="bg-gradient-to-r from-green-50 to-blue-50 p-6 rounded-lg border border-green-200"
            >
                <div class="text-center">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-4">
                        <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Â¡Felicitaciones!</h3>
                    <p class="text-gray-600 mb-4">Has completado exitosamente todo el curso. Ya puedes obtener tu
                        certificado.</p>
                    <button
                        class="bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg font-medium transition-colors"
                        @click="showCertificate()"
                    >
                        🏆 Obtener Certificado
                    </button>
                </div>
            </div>
        </div>

        {{-- SIDEBAR --}}
        <aside class="space-y-6 sm:pt-14 lg:sticky lg:top-8">

            {{-- Info del curso & progreso --}}
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm border">
                <div class="flex items-center space-x-3 mb-4">
                    <img
                        src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=50&h=50&fit=crop&crop=face&auto=format"
                        alt="Instructor" class="w-12 h-12 rounded-full object-cover"/>
                    <div>
                        <h3 class="text-sm sm:text-base font-medium text-gray-900" x-text="courseTitle"></h3>
                    </div>
                </div>

                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm font-medium text-gray-700">Progreso del curso</span>
                        <span class="text-sm font-bold text-blue-600"
                              x-text="`${Math.round(progressPercentage)}%`"></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                        <div
                            class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full transition-all duration-500 ease-out"
                            :style="`width:${progressPercentage}%`"></div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500">
                        <span x-text="progressText"></span>
                        <span x-text="`${completedModules}/${totalModules}`"></span>
                    </div>
                </div>
            </div>

            {{-- Lista de módulos con scroll fijo --}}
            <div class="bg-white rounded-lg shadow-sm border">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="text-sm sm:text-base font-semibold text-gray-900">Contenido del Curso</h3>
                </div>
                <!-- Contenedor con altura fija y scroll personalizado -->
                <div class="modules-scroll-container p-4 space-y-2 max-h-96 overflow-y-auto">
                    <template x-for="(mod, mIdx) in modules" :key="`module-${mIdx}`">
                        <div class="border rounded-lg overflow-hidden transition-all duration-300 ease-in-out" :class="{
                            'border-blue-200 bg-blue-50': mIdx === currentModule,
                            'border-green-200 bg-green-50': mod.is_completed,
                            'border-gray-200': !mod.is_completed && mIdx !== currentModule
                        }">
                            <button
                                @click="toggleModule(mIdx)"
                                :disabled="!mod.is_unlocked"
                                class="w-full p-3 text-left focus:outline-none transition-colors"
                                :class="{
                                    'cursor-not-allowed opacity-60': !mod.is_unlocked,
                                    'hover:bg-gray-50': mod.is_unlocked && !mod.is_completed && mIdx !== currentModule,
                                    'hover:bg-blue-100': mod.is_unlocked && mIdx === currentModule,
                                    'hover:bg-green-100': mod.is_completed
                                }"
                            >
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        {{-- Icono de estado --}}
                                        <div class="flex-shrink-0">
                                            <span x-show="!mod.is_unlocked" class="text-gray-400 text-lg">🔒</span>
                                            <span x-show="mod.is_completed" class="text-green-500 text-lg">✅</span>
                                            <span
                                                x-show="mod.is_unlocked && !mod.is_completed && mIdx === currentModule"
                                                class="text-blue-500 text-lg">▶️</span>
                                            <span
                                                x-show="mod.is_unlocked && !mod.is_completed && mIdx !== currentModule"
                                                class="text-gray-400 text-lg">⚪</span>
                                        </div>

                                        <div class="min-w-0 flex-1">
                                            <p class="text-sm font-medium" :class="{
                                                'text-gray-400': !mod.is_unlocked,
                                                'text-blue-700': mIdx === currentModule,
                                                'text-green-700': mod.is_completed,
                                                'text-gray-700': mod.is_unlocked && !mod.is_completed && mIdx !== currentModule
                                            }" x-text="`Módulo ${mIdx + 1}: ${mod.title}`"></p>
                                            <p class="text-xs text-gray-500 line-clamp-2" x-text="mod.description"></p>
                                        </div>

                                    </div>

                                    <div class="flex items-center space-x-2">
                                        <span class="text-xs text-gray-500"
                                              x-text="`${mod.videos_count} videos`"></span>
                                        <svg x-show="mod.open"
                                             class="w-4 h-4 text-gray-400 transform rotate-180 transition-transform"
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                        <svg x-show="!mod.open" class="w-4 h-4 text-gray-400 transition-transform"
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            {{-- Lista de videos --}}
                            <div x-show="mod.open && mod.is_unlocked"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 max-h-0"
                                 x-transition:enter-end="opacity-100 max-h-96"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 max-h-96"
                                 x-transition:leave-end="opacity-0 max-h-0"
                                 class="border-t border-gray-200 bg-gray-50 overflow-hidden">
                                <template x-for="(video, vIdx) in (mod.videos || [])" :key="`video-${mIdx}-${vIdx}`">
                                    <button
                                        @click="selectVideo(mIdx, vIdx)"
                                        class="w-full p-3 text-left hover:bg-gray-100 transition-colors border-b border-gray-100 last:border-b-0"
                                        :class="{
                                            'bg-blue-100 border-blue-200': mIdx === currentModule && vIdx === currentVideo
                                        }"
                                    >
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="w-8 h-8 bg-white rounded border flex items-center justify-center">
                                                    <svg x-show="mIdx === currentModule && vIdx === currentVideo"
                                                         class="w-4 h-4 text-blue-600" fill="currentColor"
                                                         viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span x-show="!(mIdx === currentModule && vIdx === currentVideo)"
                                                          class="text-xs text-gray-500" x-text="vIdx + 1"></span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-800"
                                                       x-text="video.title"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Recursos adicionales --}}
            <div class="bg-white p-4 rounded-lg shadow-sm border">
                <h3 class="text-sm sm:text-base font-medium text-gray-900 mb-3">Recursos del Curso</h3>
                <div class="space-y-3">
                    <template x-for="resource in resources" :key="resource.id">
                        <button
                            @click="openResource({
                                name: resource.name,
                                url: resource.url_path,
                                type: resource.file_type
                            })"
                            class="w-full flex items-center space-x-3 p-2 rounded hover:bg-gray-50 transition-colors text-left"
                        >
                            <div class="flex-shrink-0 text-2xl" x-text="getFileIcon(resource.file_type)"></div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-800 truncate" x-text="resource.name"></p>
                                <p class="text-xs text-gray-500 uppercase" x-text="resource.file_type"></p>
                            </div>
                        </button>
                    </template>

                    <div x-show="!resources || resources.length === 0" class="text-center py-4 text-gray-500 text-sm">
                        No hay recursos disponibles
                    </div>
                </div>
            </div>
        </aside>

        {{-- Modal del Quiz --}}
        <div
            x-cloak
            x-show="showQuiz && !certificateUnlocked"
            x-transition.opacity
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50"
            @click.self="closeQuizModal()"
        >
            <div class="bg-white rounded-xl shadow-2xl max-w-lg w-full max-h-[90vh] overflow-y-auto">
                <!-- Header del modal quiz -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Completar módulo</h2>
                    </div>
                    <button
                        @click="closeQuizModal()"
                        class="text-gray-400 hover:text-gray-600 transition-colors"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Contenido del modal quiz -->
                <div class="p-6">
                    <p class="mb-6 text-gray-700">Has terminado todos los videos de este módulo. ¿Estás listo para completarlo y avanzar al siguiente?</p>

                    <div class="space-y-4 mb-6">
                        <label
                            class="flex items-start p-4 border-2 rounded-lg cursor-pointer transition-all hover:bg-gray-50"
                            :class="{'border-green-500 bg-green-50': quizAnswer === 'Si'}">
                            <input
                                type="radio"
                                name="quiz"
                                x-model="quizAnswer"
                                value="Si"
                                class="mt-1 mr-4 text-green-600"
                            />
                            <div>
                                <span class="font-medium text-gray-900 block">Sí, completar módulo</span>
                                <p class="text-sm text-gray-600 mt-1">He visto todos los videos y entiendo el contenido</p>
                            </div>
                        </label>
                        <label
                            class="flex items-start p-4 border-2 rounded-lg cursor-pointer transition-all hover:bg-gray-50"
                            :class="{'border-orange-500 bg-orange-50': quizAnswer === 'No'}">
                            <input
                                type="radio"
                                name="quiz"
                                x-model="quizAnswer"
                                value="No"
                                class="mt-1 mr-4 text-orange-600"
                            />
                            <div>
                                <span class="font-medium text-gray-900 block">No, quiero revisar má</span>
                                <p class="text-sm text-gray-600 mt-1">Necesito repasar algunos videos antes de
                                    continuar</p>
                            </div>
                        </label>
                    </div>

                    <div x-show="quizFeedback" class="mb-6 p-4 rounded-lg transition-all duration-300" :class="{
                        'bg-green-100 text-green-800 border border-green-200': quizFeedback.includes('Sì'),
                        'bg-red-100 text-red-800 border border-red-200': quizFeedback.includes('Error') || quizFeedback.includes('Incorrecto'),
                        'bg-orange-100 text-orange-800 border border-orange-200': !quizFeedback.includes('Sì') && !quizFeedback.includes('Error')
                    }">
                        <p x-text="quizFeedback" class="text-center font-medium"></p>
                    </div>

                    <button
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-medium disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                        :disabled="!quizAnswer"
                        @click="submitQuiz()"
                    >
                        <span x-show="!loading">Confirmar</span>
                        <span x-show="loading" class="flex items-center justify-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Procesando...
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal para visualizar recursos -->
        <div
            x-cloak
            x-show="showResourceModal && !suspiciousActivity"
            x-transition.opacity
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 no-screenshot protected-content"
            @click.self="closeResourceModal()"
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
                        @click="closeResourceModal()"
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

        <!-- Toast notifications -->
        <div
            x-show="showToast"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-2"
            class="fixed bottom-4 right-4 z-50 max-w-sm"
        >
            <div class="rounded-lg p-4 shadow-lg" :class="{
                'bg-green-500 text-white': toastType === 'success',
                'bg-red-500 text-white': toastType === 'error',
                'bg-blue-500 text-white': toastType === 'info'
            }">
                <div class="flex items-center">
                    <svg x-show="toastType === 'success'" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg x-show="toastType === 'error'" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm font-medium" x-text="toastMessage"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos CSS para protección -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Limitador de líneas para descripciones */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Scroll personalizado para la lista de módulos */
        .modules-scroll-container {
            scrollbar-width: thin;
            scrollbar-color: #CBD5E0 #F7FAFC;
        }

        .modules-scroll-container::-webkit-scrollbar {
            width: 6px;
        }

        .modules-scroll-container::-webkit-scrollbar-track {
            background: #F7FAFC;
            border-radius: 3px;
        }

        .modules-scroll-container::-webkit-scrollbar-thumb {
            background: #CBD5E0;
            border-radius: 3px;
        }

        .modules-scroll-container::-webkit-scrollbar-thumb:hover {
            background: #A0AEC0;
        }

        /* Animación suave para el scroll */
        .modules-scroll-container {
            scroll-behavior: smooth;
        }

        /* Mejorar transiciones de los módulos */
        .modules-scroll-container > div {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Hover effects mejorados */
        .modules-scroll-container > div:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

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
            0%, 50% {
                opacity: 1;
            }
            51%, 100% {
                opacity: 0;
            }
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

            document.addEventListener('DOMContentLoaded', function () {

                // Función principal para ocultar modal cuando se detecte captura
                function triggerProtection(reason) {
                    console.warn('🚨 Protección activada:', reason);

                    if (window.resourceProtection && typeof window.resourceProtection.hideModal === 'function') {
                        window.resourceProtection.hideModal();
                    } else if (window.statusProtection && typeof window.statusProtection.hideModal === 'function') {
                        window.statusProtection.hideModal();
                    } else {
                        // Fallback
                        const modal = document.querySelector('[x-show="showResourceModal && !suspiciousActivity"]');
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
                document.addEventListener('keyup', function (e) {
                    if (e.key === 'PrintScreen' && isModalOpen) {
                        triggerProtection('PrintScreen liberada');
                        // Limpiar portapapeles
                        if (navigator.clipboard && navigator.clipboard.writeText) {
                            navigator.clipboard.writeText('').catch(() => {
                            });
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
                const observer = new MutationObserver(function (mutations) {
                    mutations.forEach(function (mutation) {
                        if (mutation.type === 'attributes') {
                            const modal = document.querySelector('[x-show="showResourceModal && !suspiciousActivity"]');
                            if (modal) {
                                const isVisible = window.getComputedStyle(modal).display !== 'none' &&
                                    modal.style.display !== 'none';

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
