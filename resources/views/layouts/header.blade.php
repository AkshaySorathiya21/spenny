<header
    class="sticky top-0 z-40 bg-gray-200/80 backdrop-blur-md border-b border-slate-100 px-4 md:px-8 py-4 md:py-2 flex flex-col md:flex-row md:items-center justify-between gap-4 md:gap-0 transition-all">
    <div class="flex items-center gap-3 md:gap-4">
        <button
            class="toggle-sidebar p-2 bg-white rounded-lg shadow-sm text-slate-500 hover:text-primary hover:bg-slate-50 transition-colors flex items-center justify-center shrink-0"
            aria-label="Toggle Sidebar">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <div>
            <h2 class="text-xl md:text-2xl font-extrabold text-primary">Overview</h2>
            <p class="text-slate-500 text-xs md:text-sm">Welcome back, monitoring system status.</p>
        </div>
    </div>
    <div class="flex items-center justify-between md:justify-end gap-3 md:gap-4 w-full md:w-auto mt-2 md:mt-0">
        <div class="relative flex-1 md:flex-none" id="header-search-container">
            <span class="absolute inset-y-0 left-3 flex items-center text-slate-400 pointer-events-none">
                <span class="material-symbols-outlined text-lg">search</span>
            </span>
            <input id="header-search-input"
                class="pl-10 pr-4 py-2 bg-white md:bg-slate-50 border border-slate-200 md:border-none shadow-sm md:shadow-none rounded-lg text-sm focus:ring-2 focus:ring-primary/20 w-full md:w-64 transition-all"
                placeholder="Search data..." type="text" autocomplete="off" />

            <!-- Search Suggestions Dropdown -->
            <div id="search-suggestions"
                class="absolute left-0 top-full mt-2 w-full md:w-80 bg-white rounded-xl shadow-xl shadow-slate-200/50 border border-slate-100 origin-top transition-all duration-200 opacity-0 scale-95 pointer-events-none z-50 overflow-hidden">
                <div class="px-4 py-2 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                    <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider">Search Results</h3>
                </div>
                <div class="max-h-80 overflow-y-auto py-1" id="search-suggestions-list">
                    <!-- Placeholder suggestions, you can update these dynamically via JS -->
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50 transition-colors">
                        <div class="size-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-500 text-sm">person</span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-slate-800">John Doe</p>
                            <p class="text-xs text-slate-500">User Profile</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50 transition-colors">
                        <div class="size-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-500 text-sm">settings</span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-slate-800">System Settings</p>
                            <p class="text-xs text-slate-500">Configuration</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50 transition-colors">
                        <div class="size-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-500 text-sm">bar_chart</span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-slate-800">Monthly Report</p>
                            <p class="text-xs text-slate-500">Analytics</p>
                        </div>
                    </a>
                </div>
                <div class="px-4 py-2 border-t border-slate-100 bg-slate-50/50 text-center">
                    <a href="#" class="text-xs text-primary font-bold hover:underline">View all results</a>
                </div>
            </div>
        </div>

        <!-- Actions: Notifications and Profile -->
        <div class="flex items-center gap-2 sm:gap-3 shrink-0">
            <!-- Notifications Dropdown Container -->
            <div class="relative" id="notifications-dropdown-container">
                <button id="notifications-btn"
                    class="relative p-2 text-slate-500 hover:text-primary hover:bg-slate-100 rounded-full transition-colors flex items-center justify-center focus:outline-none"
                    aria-label="Notifications" aria-haspopup="true" aria-expanded="false">
                    <span class="material-symbols-outlined text-xl sm:text-2xl">notifications</span>
                    <span
                        class="absolute top-1 right-1.5 size-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                </button>

                <!-- Notifications Menu -->
                <div id="notifications-menu"
                    class="absolute right-0 top-full mt-2 w-80 bg-white rounded-xl shadow-xl shadow-slate-200/50 border border-slate-100 origin-top-right transition-all duration-200 opacity-0 scale-95 pointer-events-none z-50 overflow-hidden">
                    <div class="px-4 py-3 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                        <h3 class="text-sm font-bold text-slate-800">Notifications</h3>
                        <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-0.5 rounded-full">3
                            New</span>
                    </div>
                    <div class="max-h-80 overflow-y-auto">
                        <!-- Notification Item -->
                        <a href="#"
                            class="flex items-start gap-4 px-4 py-3 hover:bg-slate-50 transition-colors border-b border-slate-50">
                            <div
                                class="size-8 rounded-full bg-accent-success/10 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-accent-success text-lg">check_circle</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-800 leading-snug">System Update Completed</p>
                                <p class="text-xs text-slate-500 mt-0.5 line-clamp-2">The latest version 2.4.0 has been
                                    successfully installed.</p>
                                <p class="text-[10px] text-slate-400 mt-1 font-medium">Just now</p>
                            </div>
                            <div class="size-2 rounded-full bg-primary shrink-0 mt-2"></div>
                        </a>
                        <!-- Notification Item -->
                        <a href="#"
                            class="flex items-start gap-4 px-4 py-3 hover:bg-slate-50 transition-colors border-b border-slate-50">
                            <div
                                class="size-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-blue-600 text-lg">person_add</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-800 leading-snug">New User Registration</p>
                                <p class="text-xs text-slate-500 mt-0.5 line-clamp-2">Alice Smith has created a new
                                    account.</p>
                                <p class="text-[10px] text-slate-400 mt-1 font-medium">2 hours ago</p>
                            </div>
                            <div class="size-2 rounded-full bg-primary shrink-0 mt-2"></div>
                        </a>
                        <!-- Notification Item -->
                        <a href="#"
                            class="flex items-start gap-4 px-4 py-3 hover:bg-slate-50 transition-colors border-b border-slate-50">
                            <div
                                class="size-8 rounded-full bg-amber-100 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-amber-600 text-lg">warning</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-800 leading-snug">High Server Load</p>
                                <p class="text-xs text-slate-500 mt-0.5 line-clamp-2">CPU usage exceeded 90% for the
                                    last 5 minutes.</p>
                                <p class="text-[10px] text-slate-400 mt-1 font-medium">Yesterday</p>
                            </div>
                        </a>
                    </div>
                    <a href="{{ route('admin.notifications.index') }}"
                        class="block text-center py-2.5 text-xs font-bold text-primary hover:bg-slate-50 transition-colors border-t border-slate-100 bg-slate-50/50">
                        View All Notifications
                    </a>
                </div>
            </div>

            <!-- Profile Dropdown Container -->
            <div class="relative" id="profile-dropdown-container">
                <button id="profile-btn"
                    class="flex items-center gap-2 hover:bg-white p-1 pr-2 rounded-full transition-all focus:outline-none focus:ring-2 focus:ring-primary/20 border border-transparent hover:shadow-sm"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=013b8f&color=fff" alt="Profile"
                        class="size-8 sm:size-9 rounded-full object-cover shadow-sm border border-slate-200" />
                    <div class="hidden sm:flex flex-col items-start px-1">
                        <span class="text-sm font-bold text-slate-800 leading-none">John Doe</span>
                        <span class="text-[10px] text-slate-500 font-medium mt-0.5" style="margin-top: 4px;">Super
                            Admin</span>
                    </div>
                    <span
                        class="material-symbols-outlined text-slate-400 hidden sm:block text-xl transition-transform duration-200"
                        id="profile-chevron">expand_more</span>
                </button>

                <!-- Dropdown Menu -->
                <div id="profile-menu"
                    class="absolute right-0 top-full mt-2 w-56 bg-white rounded-xl shadow-xl shadow-slate-200/50 border border-slate-100 py-2 origin-top-right transition-all duration-200 opacity-0 scale-95 pointer-events-none z-50">
                    <div class="px-4 py-3 border-b border-slate-50 sm:hidden">
                        <p class="text-sm font-bold text-slate-800">John Doe</p>
                        <p class="text-xs text-slate-500">Super Admin</p>
                    </div>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined text-lg">person</span>
                        My Profile
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:text-primary hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined text-lg">settings</span>
                        Account Settings
                    </a>
                    <div class="h-px bg-slate-100 my-1 w-full"></div>
                    <form action="{{ route('logout') }}" method="POST" class="w-full m-0">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors text-left focus:outline-none">
                            <span class="material-symbols-outlined text-lg">logout</span>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .dropdown-open {
        opacity: 1 !important;
        transform: scale(1) !important;
        pointer-events: auto !important;
    }

    .chevron-open {
        transform: rotate(180deg) !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Elements
        const profileBtn = document.getElementById('profile-btn');
        const profileMenu = document.getElementById('profile-menu');
        const chevron = document.getElementById('profile-chevron');

        const notificationsBtn = document.getElementById('notifications-btn');
        const notificationsMenu = document.getElementById('notifications-menu');

        const searchInput = document.getElementById('header-search-input');
        const searchSuggestions = document.getElementById('search-suggestions');
        const searchContainer = document.getElementById('header-search-container');

        // Use click events at the button level but ensure we intercept the exact click properly
        if (profileBtn) {
            profileBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                // close notifications if open
                if (notificationsMenu && notificationsMenu.classList.contains('dropdown-open')) {
                    notificationsMenu.classList.remove('dropdown-open');
                }

                // toggle this menu
                if (profileMenu) {
                    profileMenu.classList.toggle('dropdown-open');
                    if (chevron) chevron.classList.toggle('chevron-open');
                }
            });
        }

        if (notificationsBtn) {
            notificationsBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                // close profile if open
                if (profileMenu && profileMenu.classList.contains('dropdown-open')) {
                    profileMenu.classList.remove('dropdown-open');
                    if (chevron) chevron.classList.remove('chevron-open');
                }

                // toggle this menu
                if (notificationsMenu) {
                    notificationsMenu.classList.toggle('dropdown-open');
                }
            });
        }

        // Search Suggestions Logic
        if (searchInput && searchSuggestions) {
            searchInput.addEventListener('keyup', (e) => {
                const query = e.target.value.trim();
                // Show recommendations only if text is evaluated
                if (query.length > 0) {
                    searchSuggestions.classList.add('dropdown-open');

                    // You can add your AJAX request here to fetch actual suggestions based on the `query`
                } else {
                    searchSuggestions.classList.remove('dropdown-open');
                }
            });

            // Also show suggestions when input is focused and has text
            searchInput.addEventListener('focus', (e) => {
                if (e.target.value.trim().length > 0) {
                    searchSuggestions.classList.add('dropdown-open');
                }
            });
        }

        // Close all dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            // Check Profile
            if (profileMenu && profileMenu.classList.contains('dropdown-open')) {
                const profileContainer = document.getElementById('profile-dropdown-container');
                if (profileContainer && !profileContainer.contains(e.target)) {
                    profileMenu.classList.remove('dropdown-open');
                    if (chevron) chevron.classList.remove('chevron-open');
                }
            }
            // Check Notifications
            if (notificationsMenu && notificationsMenu.classList.contains('dropdown-open')) {
                const notifContainer = document.getElementById('notifications-dropdown-container');
                if (notifContainer && !notifContainer.contains(e.target)) {
                    notificationsMenu.classList.remove('dropdown-open');
                }
            }
            // Check Search Suggestions
            if (searchSuggestions && searchSuggestions.classList.contains('dropdown-open')) {
                if (searchContainer && !searchContainer.contains(e.target)) {
                    searchSuggestions.classList.remove('dropdown-open');
                }
            }
        });
    });
</script>
