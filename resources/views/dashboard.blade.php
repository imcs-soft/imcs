<x-app-layout>
    <div class="py-20 space-y-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-sm font-medium text-gray-500">Usuarios registrados</h3>
                <p class="mt-2 text-3xl font-bold text-gray-800">23</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-sm font-medium text-gray-500">Compradores</h3>
                <p class="mt-2 text-3xl font-bold text-gray-800">23</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-sm font-medium text-gray-500">Curso más comprado</h3>
                @if(empty($topCourse))
                    <p class="mt-2 text-gray-500">Sin datos aún</p>
                @else
                    <p class="mt-2 text-xl font-semibold text-gray-800">{{ $topCourse->title }}</p>
                    <p class="text-gray-500">{{ $topCourseCount }} compras</p>
                @endif
            </div>
        </div>

        {{-- 2. Listado de usuarios y compradores --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- Usuarios registrados --}}
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-lg font-semibold text-gray-800">Usuarios registrados</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">#</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Nombre</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Email</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Registrado</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">1243423</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Nexxiii</td>
                                <td class="px-4 py-2 text-sm text-gray-700">nexiii@email.com</td>
                                <td class="px-4 py-2 text-sm text-gray-700">01-01-2025</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">124233423</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Abraham</td>
                                <td class="px-4 py-2 text-sm text-gray-700">abraham@email.com</td>
                                <td class="px-4 py-2 text-sm text-gray-700">01-01-2025</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">1243423</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Nexxiii</td>
                                <td class="px-4 py-2 text-sm text-gray-700">nexiii@email.com</td>
                                <td class="px-4 py-2 text-sm text-gray-700">01-01-2025</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">124233423</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Abraham</td>
                                <td class="px-4 py-2 text-sm text-gray-700">abraham@email.com</td>
                                <td class="px-4 py-2 text-sm text-gray-700">01-01-2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-3 bg-gray-50">
                    <!-- $users->links() -->
                </div>
            </div>

            {{-- Compradores --}}
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b">
                    <h2 class="text-lg font-semibold text-gray-800">Compradores recientes</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Usuario</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Curso</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Fecha de compra</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-500">Monto</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">Abraham</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Ecografía</td>
                                <td class="px-4 py-2 text-sm text-gray-700">03-01-2025</td>
                                <td class="px-4 py-2 text-sm text-gray-700">2</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">Nexxii</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Ecografía</td>
                                <td class="px-4 py-2 text-sm text-gray-700">06-01-2025</td>
                                <td class="px-4 py-2 text-sm text-gray-700">2</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">Abraham</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Ecografía</td>
                                <td class="px-4 py-2 text-sm text-gray-700">03-01-2025</td>
                                <td class="px-4 py-2 text-sm text-gray-700">2</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">Nexxii</td>
                                <td class="px-4 py-2 text-sm text-gray-700">Ecografía</td>
                                <td class="px-4 py-2 text-sm text-gray-700">06-01-2025</td>
                                <td class="px-4 py-2 text-sm text-gray-700">2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-3 bg-gray-50">
                    <!-- $buyers->links() -->
                </div>
            </div>

        </div>

        {{-- 3. Formulario de subida --}}
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Subir nuevo contenido</h2>
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Tipo</label>
                    <select id="type" name="type" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500">
                        <option value="course">Curso</option>
                        <option value="resource">Recurso</option>
                    </select>
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                    <input type="text" name="title" id="title" required
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500"/>
                </div>

                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700">Autor</label>
                    <input type="text" name="author" id="author" required
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500"/>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="description" id="description" rows="4" required
                              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500"></textarea>
                </div>

                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700">Archivo (PDF/ZIP)</label>
                    <input type="file" name="file" id="file" required accept=".pdf,.zip"
                           class="mt-1 block w-full text-gray-700"/>
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-md">
                        Subir contenido
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
