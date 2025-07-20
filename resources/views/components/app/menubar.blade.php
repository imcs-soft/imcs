@push('scripts')
    <script>
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.getElementById('hamburger');
        const closeSidebar = document.getElementById('closeSidebar');

        // Toggle sidebar visibility on hamburger click
        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Hide sidebar on close button click
        closeSidebar.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
    </script>
@endpush


<aside id="sidebar" class="bg-white w-64 min-h-screen p-4 shadow-lg fixed transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">sneat</h1>
        <button id="closeSidebar" class="text-gray-500 hover:text-gray-700 focus:outline-none">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>

    <nav>
        <ul class="space-y-2">
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md">
                    <i class="far fa-calendar-alt mr-3"></i>
                    Calendar
                    <span class="ml-auto text-xs bg-purple-200 text-purple-700 px-2 py-0.5 rounded-full">PRO</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-purple-100 hover:text-purple-700 rounded-md">
                    <i class="fas fa-tasks mr-3"></i>
                    Kanban
                    <span class="ml-auto text-xs bg-purple-200 text-purple-700 px-2 py-0.5 rounded-full">PRO</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-cog mr-3"></i>
                    Account Settings
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-lock mr-3"></i>
                    Authentications
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-ellipsis-h mr-3"></i>
                    Misc
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>

            <li class="mt-4 pt-4 border-t border-gray-200">
                <span class="text-xs font-semibold text-gray-500 uppercase px-4">Components</span>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 bg-purple-50 text-purple-700 rounded-md font-semibold">
                    <i class="fas fa-grip-horizontal mr-3"></i>
                    Cards
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-desktop mr-3"></i>
                    User interface
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-expand-alt mr-3"></i>
                    Extended UI
                    <i class="fas fa-chevron-right ml-auto text-sm"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <i class="fas fa-icons mr-3"></i>
                    Boxicons
                </a>
            </li>
        </ul>
    </nav>
</aside>



