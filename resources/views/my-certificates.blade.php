<x-app-layout>
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
                Mis Certificados
            </h1>

            @if(empty($certificates))
                <!-- Por ahora esto estara invisible -->
                <div class="bg-white hidden p-6 rounded-lg shadow text-center text-gray-500">
                    Aún no has obtenido ningún certificado.
                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">

                        {{-- Vista previa o miniatura --}}
                        <div class="h-40 bg-gray-100 overflow-hidden">
                            <img
                                src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn"
                                alt="Certificado de Master en ecografia"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                Master en ecografía

                            </h3>
                            <p class="text-sm text-gray-500 mb-4">
                                Completado: 23-05-2005
                            </p>
                            <div class="mt-auto flex space-x-2">
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded"
                                >
                                    Ver
                                </a>
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded"
                                >
                                    Descargar
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">

                        {{-- Vista previa o miniatura --}}
                        <div class="h-40 bg-gray-100 overflow-hidden">
                            <img
                                src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn"
                                alt="Certificado de Master en ecografia"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                Master en ecografia
                            </h3>
                            <p class="text-sm text-gray-500 mb-4">
                                Completado: 23-05-2005
                            </p>
                            <div class="mt-auto flex space-x-2">
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded"
                                >
                                    Ver
                                </a>
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded"
                                >
                                    Descargar
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">

                        {{-- Vista previa o miniatura --}}
                        <div class="h-40 bg-gray-100 overflow-hidden">
                            <img
                                src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn"
                                alt="Certificado de Master en ecografia"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                Master en ecografia
                            </h3>
                            <p class="text-sm text-gray-500 mb-4">
                                Completado: 23-05-2005
                            </p>
                            <div class="mt-auto flex space-x-2">
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded"
                                >
                                    Ver
                                </a>
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded"
                                >
                                    Descargar
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">

                        {{-- Vista previa o miniatura --}}
                        <div class="h-40 bg-gray-100 overflow-hidden">
                            <img
                                src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn"
                                alt="Certificado de Master en ecografia"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                Master en ecografia
                            </h3>
                            <p class="text-sm text-gray-500 mb-4">
                                Completado: 23-05-2005
                            </p>
                            <div class="mt-auto flex space-x-2">
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded"
                                >
                                    Ver
                                </a>
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded"
                                >
                                    Descargar
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">

                        {{-- Vista previa o miniatura --}}
                        <div class="h-40 bg-gray-100 overflow-hidden">
                            <img
                                src="https://imgs.search.brave.com/T_Sq5vfIqVfxVbyt_jDRE8q5etRBIn9-l5qlj7wNCSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YW1hLW1lZC5vcmcu/YXIvdXBsb2Fkcy83/NjYxMC9mdWxsXzM3/MHgyMDAuanBn"
                                alt="Certificado de Master en ecografia"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                Master en ecografia
                            </h3>
                            <p class="text-sm text-gray-500 mb-4">
                                Completado: 23-05-2005
                            </p>
                            <div class="mt-auto flex space-x-2">
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded"
                                >
                                    Ver
                                </a>
                                <a
                                    href="https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf"
                                    class="flex-1 text-center py-2 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded"
                                >
                                    Descargar
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($certificates as $cert)
                        <div class="bg-white rounded-lg shadow flex flex-col overflow-hidden">

                            {{-- Vista previa o miniatura --}}
                            <div class="h-40 bg-gray-100 overflow-hidden">
                                <img
                                    src="{{ $cert->preview_url }}"
                                    alt="Certificado de {{ $cert->course_title }}"
                                    class="w-full h-full object-cover"
                                />
                            </div>
                            <div class="p-4 flex-1 flex flex-col">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                    {{ $cert->course_title }}
                                </h3>
                                <p class="text-sm text-gray-500 mb-4">
                                    Completado: {{ $cert->completed_at->format('d M Y') }}
                                </p>
                                <div class="mt-auto flex space-x-2">
                                    <a
                                        href="{{ route('certificates.show', $cert) }}"
                                        class="flex-1 text-center py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded"
                                    >
                                        Ver
                                    </a>
                                    <a
                                        href="{{ route('certificates.download', $cert) }}"
                                        class="flex-1 text-center py-2 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded"
                                    >
                                        Descargar
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                {{-- Paginación --}}
                <div class="mt-6">
                    {{ $certificates->links() }}
                </div>
            @endif

        </div>
    </section>
</x-app-layout>
