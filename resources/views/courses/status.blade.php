<x-app-layout>
    <div
        x-data="courseData()"
        x-init="init()"
        class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8"
    >

        {{-- ÁREA PRINCIPAL --}}
        <div class="lg:col-span-2 pt-14 space-y-6">


            <div class="w-full aspect-video bg-black rounded-lg overflow-hidden shadow">
                <video
                    x-ref="video"
                    @loadedmetadata="$refs.video.play()"
                    @ended="onTopicEnd()"
                    controls
                    class="w-full h-full"
                >
                    <source :src="currentVideoUrl" type="video/mp4"/>
                </video>
            </div>
            <h1 class="text-2xl sm:text-3xl font-bold" x-text="title"></h1>
            <p class="text-gray-700 text-sm sm:text-base" x-text="currentModuleData.desc"></p>

            {{-- Quiz --}}
            <div
                x-show="showQuiz && !certificateUnlocked"
                x-transition
                class="max-w-xl mx-auto bg-white p-4 sm:p-6 rounded-lg shadow"
            >
                <h2 class="text-lg sm:text-xl font-bold mb-3">Quiz</h2>
                <p class="mb-3 text-sm sm:text-base" x-text="currentModuleData.quiz.question"></p>

                <template x-for="opt in currentModuleData.quiz.options" :key="opt">
                    <label class="flex items-center p-2 border rounded cursor-pointer mb-2">
                        <input
                            type="radio"
                            name="quiz"
                            x-model="quizAnswer"
                            :value="opt"
                            class="mr-2"
                        />
                        <span x-text="opt"></span>
                    </label>
                </template>

                <button
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded disabled:opacity-50"
                    :disabled="!quizAnswer"
                    @click="submitQuiz()"
                >
                    Enviar
                </button>
                <p class="mt-4 text-center text-base sm:text-lg" x-text="quizFeedback"></p>
            </div>

            {{-- Botón certificado --}}
            <button
                x-show="certificateUnlocked"
                x-transition
                class="w-full mt-4 sm:mt-6 bg-green-600 hover:bg-green-700 text-white py-2 sm:py-3 rounded-lg text-sm sm:text-base"
                @click="showCertificate()"
            >
                Obtener certificado
            </button>
        </div>

        {{-- ASIDE --}}
        <aside class="space-y-6 sm:pt-14 lg:sticky lg:top-8">

            {{-- Info & progreso --}}
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow space-y-4">
                <div class="flex items-center space-x-3">
                    <img src="https://lh3.googleusercontent.com/4UA8c4P2KtHiM16UPnon-TgBH7nOdD3ETLxYPXShFaFBekp6Y3wgdV_Ca8QgWE_pdkiB2PtTuY-4UZN3f3AI9YBBgr7Ylke2P-qyVQMay5DX6ekfxNiLr739SvRRq7uiwKUMB51JvBnjQyMWZVJVhW0tGjFmKDL7eWS-U0CbLAWb7Bv5ek7DuQ=w1280" alt="Instructor" class="w-10 h-10 rounded-full"/>
                    <div>
                        <h3 class="text-sm sm:text-base font-medium" x-text="title"></h3>
                        <p class="text-xs text-gray-500" x-text="instructor"></p>
                    </div>
                </div>
                <div>
                    <p class="text-xs sm:text-sm font-medium">
                        Progreso: <span x-text="progress + '%'"></span>
                    </p>
                    <div class="w-full bg-gray-200 rounded-full h-1.5 sm:h-2 overflow-hidden">
                        <div class="bg-indigo-600 h-full" :style="`width:${progress}%`"></div>
                    </div>
                </div>
            </div>

            {{-- Módulos & temas --}}
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow">
                <h3 class="text-sm sm:text-base font-semibold mb-2">Módulos</h3>
                <template x-for="(mod,mIdx) in modules" :key="mIdx">
                    <div class="mb-2">
                        <button
                            @click="toggleModule(mIdx)"
                            class="w-full flex justify-between items-center py-2 px-2 sm:px-3 rounded-md text-xs sm:text-sm focus:outline-none"
                            :class="{
                'bg-indigo-50 text-indigo-600': mIdx===currentModule,
                'bg-gray-100 text-gray-700 hover:bg-gray-200': mIdx!==currentModule
              }"
                        >
                            <span x-text="mod.title"></span>
                            <span x-show="mod.completed" class="text-green-500">✓</span>
                        </button>
                        <div x-show="mod.open" class="mt-1 pl-4 space-y-1">
                            <template x-for="(top,tIdx) in mod.topics" :key="tIdx">
                                <button
                                    @click="selectTopic(mIdx,tIdx)"
                                    :disabled="!isUnlocked(mIdx,tIdx)"
                                    class="flex justify-between w-full text-left px-2 py-1 rounded text-xs sm:text-sm"
                                    :class="{
                    'text-gray-400 cursor-not-allowed': !isUnlocked(mIdx,tIdx),
                    'text-gray-800 hover:text-indigo-600': isUnlocked(mIdx,tIdx)
                  }"
                                >
                                    <span x-text="top.title"></span>
                                    <span x-show="top.completed" class="text-green-500">✓</span>
                                </button>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            {{-- Recursos --}}
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-sm sm:text-base font-medium mb-2">Recursos</h3>
                <div class="w-full h-32 sm:h-48 border rounded overflow-hidden">
                    <iframe src="{{ asset('assets/resources/guia.pdf') }}" class="w-full h-full"></iframe>
                </div>
            </div>
        </aside>
    </div>

    @push('scripts')
        <script>
            function courseData() {
                return {
                    title: 'Fundamentos de Ecografía',
                    instructor: 'Víctor Arana Flores',
                    modules: [
                        {
                            title: 'Módulo 1: Introducción',
                            desc: 'Aprende los principios básicos de la ecografía médica y su aplicación en diferentes áreas clínicas.',
                            open: true,
                            completed: false,
                            topics: [
                                { title: '1.1 Bienvenida', video: 'https://www.w3schools.com/html/mov_bbb.mp4', completed: false },
                                { title: '1.2 Qué aprenderás', video: 'https://www.w3schools.com/html/movie.mp4', completed: false }
                            ],
                            quiz: {
                                question: '¿Qué es un curso?',
                                options: ['Una serie de clases','Un juego','Un examen'],
                                answer: 'Una serie de clases'
                            },
                            quizPassed: false
                        },
                        {
                            title: 'Módulo 2: Fundamentos técnicos',
                            desc: 'Tipos de ecógrafos.',
                            open: false,
                            completed: false,
                            topics: [
                                { title: '2.1 Principios físicos del ultrasonido', video: 'https://www.w3schools.com/html/mov_bbb.mp4', completed: false },
                                { title: '2.2 Tipos de ecógrafos', video: 'https://www.w3schools.com/html/movie.mp4', completed: false }
                            ],
                            quiz: {
                                question: '¿Qué es una ecografía médica?',
                                options: ['Un examen de rayos X','Un procedimiento quirúrgico','Una técnica de imagen que utiliza ultrasonido'],
                                answer: 'Una técnica de imagen que utiliza ultrasonido'
                            },
                            quizPassed: false
                        }
                    ],
                    currentModule: 0,
                    currentTopic: 0,
                    quizAnswer: null,
                    quizFeedback: '',
                    showQuiz: false,
                    certificateUnlocked: false,
                    showToast: false,

                    init() { this.loadAndPlay() },

                    get currentModuleData() { return this.modules[this.currentModule] },
                    get currentVideoUrl() { return this.currentModuleData.topics[this.currentTopic].video },
                    get progress() {
                        let total=0, done=0;
                        this.modules.forEach(m=>m.topics.forEach(t=>{ total++; if(t.completed) done++ }));
                        return total?Math.round(done/total*100):0
                    },

                    toggleModule(idx) {
                        if(idx===this.currentModule||this.modules[idx].completed)
                            this.modules.forEach((m,i)=>m.open=i===idx)
                    },

                    isUnlocked(m,t) {
                        if(m<this.currentModule) return true
                        if(m>this.currentModule) return false
                        return t===0||this.modules[m].topics[t-1].completed
                    },

                    selectTopic(m,t) {
                        if(!this.isUnlocked(m,t)) return
                        this.currentModule=m
                        this.currentTopic=t
                        this.showQuiz=false
                        this.quizAnswer=null
                        this.quizFeedback=''
                        this.loadAndPlay()
                    },

                    loadAndPlay() { this.$refs.video.load() },

                    onTopicEnd() {
                        let mod=this.currentModuleData
                        mod.topics[this.currentTopic].completed=true
                        if(this.currentTopic+1<mod.topics.length) {
                            this.selectTopic(this.currentModule,this.currentTopic+1)
                            return
                        }
                        this.showQuiz=true
                    },

                    submitQuiz() {
                        if(this.quizAnswer===this.currentModuleData.quiz.answer) {
                            this.quizFeedback='¡Correcto! ✅'
                            this.currentModuleData.quizPassed=true
                            this.currentModuleData.completed=true
                            let next=this.currentModule+1
                            if(this.modules[next]) {
                                this.modules[next].open=true
                                this.currentModule=next
                                this.currentTopic=0
                                this.showQuiz=false
                                this.quizAnswer=null
                                this.quizFeedback=''
                                this.loadAndPlay()
                            } else {
                                this.certificateUnlocked=true
                            }
                        } else {
                            this.quizFeedback='Incorrecto. Intenta de nuevo.'
                        }
                    },

                    showCertificate() {
                        this.showToast=true
                        setTimeout(()=>this.showToast=false,3000)
                    }
                }
            }
        </script>
    @endpush
</x-app-layout>
