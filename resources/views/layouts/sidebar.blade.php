<aside class="sidebar bg-primary flex flex-col z-50">
    <div class="py-4 flex justify-center items-center h-20">
        <!-- Logo for expanded state -->
        <img class="sidebar-logo-full max-h-10 transition-opacity" src="{{ asset('assets/images/logo.png') }}"
            alt="Spenny Logo">
        <!-- Minimal initial logo for collapsed state -->
        <div
            class="sidebar-logo-min hidden size-10 rounded-xl bg-white/10 items-center justify-center text-white font-bold text-2xl shadow-inner">
            S</div>
    </div>
    <nav class="mt-6 flex-1 px-4 space-y-1 overflow-x-hidden">
        <a class="nav-item active flex items-center gap-4 px-4 py-3.5 text-white rounded-lg transition-colors"
            href="{{ route('admin.dashboard.index') }}">
            <span class="material-symbols-outlined shrink-0 text-xl">dashboard</span>
            <span class="font-semibold text-sm sidebar-text whitespace-nowrap">Dashboard</span>
        </a>
        <a class="nav-item flex items-center gap-4 px-4 py-3.5 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors"
            href="{{ route('admin.categories.index') }}">
            <span class="material-symbols-outlined shrink-0 text-xl">category</span>
            <span class="font-medium text-sm sidebar-text whitespace-nowrap">Categories</span>
        </a>
        <a class="nav-item flex items-center gap-4 px-4 py-3.5 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors"
            href="{{ route('admin.users.index') }}">
            <span class="material-symbols-outlined shrink-0 text-xl">group</span>
            <span class="font-medium text-sm sidebar-text whitespace-nowrap">Users</span>
        </a>
        <a class="nav-item flex items-center gap-4 px-4 py-3.5 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors"
            href="{{ route('admin.subscriptions.index') }}">
            <span class="material-symbols-outlined shrink-0 text-xl">card_membership</span>
            <span class="font-medium text-sm sidebar-text whitespace-nowrap">Subscriptions</span>
        </a>
        <a class="nav-item flex items-center gap-4 px-4 py-3.5 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors"
            href="{{ route('admin.transactions.index') }}">
            <span class="material-symbols-outlined shrink-0 text-xl">receipt_long</span>
            <span class="font-medium text-sm sidebar-text whitespace-nowrap">Transactions</span>
        </a>
        <a class="nav-item flex items-center gap-4 px-4 py-3.5 text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition-colors"
            href="{{ route('admin.settings.index') }}">
            <span class="material-symbols-outlined shrink-0 text-xl">settings</span>
            <span class="font-medium text-sm sidebar-text whitespace-nowrap">Settings</span>
        </a>
    </nav>
    <div class="sidebar-user-section p-6 border-t border-white/10 transition-all">
        <div class="flex items-center gap-3 p-2 hover:bg-white/5 rounded-lg cursor-pointer transition-colors">
            <div
                class="size-10 shrink-0 rounded-full bg-accent-success flex items-center justify-center text-white font-bold">
                JD
            </div>
            <div class="sidebar-user-details flex-1 overflow-hidden">
                <p class="text-white text-sm font-bold truncate">John Doe</p>
                <p class="text-white/40 text-xs truncate">Super Admin</p>
            </div>
            <button class="sidebar-user-details text-white/40 hover:text-white shrink-0">
                <span class="material-symbols-outlined text-xl">logout</span>
            </button>
        </div>
    </div>
</aside>
