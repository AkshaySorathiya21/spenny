@extends('layouts.app')
@section('title', 'Admin Settings')
@section('content')
    <div class="flex-1 overflow-y-auto bg-slate-50/50 relative min-h-screen">
        <div class="bg-white border-b border-slate-200 px-4 sm:px-8 sticky top-0 z-10 shadow-sm">
            <nav class="flex gap-6 sm:gap-8 overflow-x-auto no-scrollbar relative" id="settings-tabs">
                <button
                    class="py-4 sm:py-5 text-sm font-bold text-primary transition-colors tab-btn active whitespace-nowrap"
                    data-target="tab-profile">Profile Information</button>
                <button
                    class="py-4 sm:py-5 text-sm font-bold text-slate-500 hover:text-primary transition-colors tab-btn whitespace-nowrap"
                    data-target="tab-security">Security</button>
                <button
                    class="py-4 sm:py-5 text-sm font-bold text-slate-500 hover:text-primary transition-colors tab-btn whitespace-nowrap"
                    data-target="tab-payments">Payment Methods</button>
                <button
                    class="py-4 sm:py-5 text-sm font-bold text-slate-500 hover:text-primary transition-colors tab-btn whitespace-nowrap"
                    data-target="tab-team">Team Members</button>
                <button
                    class="py-4 sm:py-5 text-sm font-bold text-slate-500 hover:text-primary transition-colors tab-btn whitespace-nowrap"
                    data-target="tab-notifications">Notifications</button>

                <!-- Animated Tab Indicator -->
                <div id="tab-indicator"
                    class="absolute bottom-0 h-0.5 bg-primary rounded-t-lg transition-all duration-300 ease-out"></div>
            </nav>
        </div>

        <div class="p-4 sm:p-8 max-w-5xl mx-auto relative overflow-hidden flex-1" id="tab-content-container">
            <!-- Profile Tab -->
            <div id="tab-profile"
                class="tab-pane transition-all duration-500 ease-in-out transform origin-top opacity-100 scale-100 translate-y-0 relative z-10 w-full">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-900">Profile Information</h3>
                        <p class="text-xs text-slate-500 mt-1">Update your account's profile information and email address.
                        </p>
                    </div>
                    <button
                        class="px-6 py-2.5 bg-primary text-white rounded-lg font-bold text-sm shadow-md shadow-primary/20 hover:bg-primary/90 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                        Save Changes
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                    <div class="flex flex-col md:flex-row gap-8 md:gap-12">
                        <div class="flex-shrink-0 flex flex-col items-center gap-4">
                            <input type="file" id="profile-image-input" class="hidden"
                                accept="image/jpeg, image/png, image/gif" />
                            <div class="relative group cursor-pointer"
                                onclick="document.getElementById('profile-image-input').click()">
                                <div
                                    class="size-28 sm:size-32 rounded-full border-4 border-white shadow-lg overflow-hidden relative bg-slate-100">
                                    <img id="profile-image-preview" alt="Profile"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                        src="https://ui-avatars.com/api/?name=Alex+Rivera&background=013b8f&color=fff&size=256" />
                                </div>
                                <div
                                    class="absolute inset-0 bg-slate-900/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity backdrop-blur-[2px]">
                                    <span class="material-symbols-outlined text-white text-3xl">photo_camera</span>
                                </div>
                                <div
                                    class="absolute -bottom-2 -right-2 bg-primary text-white size-10 rounded-full flex items-center justify-center shadow-lg border-4 border-white group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </div>
                            </div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-2">Allowed JPG, GIF or
                                PNG</p>
                        </div>

                        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700">First Name</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                                        <span class="material-symbols-outlined text-[20px]">person</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm font-medium text-slate-700"
                                        type="text" value="Alex" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700">Last Name</label>
                                <input
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm font-medium text-slate-700"
                                    type="text" value="Rivera" />
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <label class="text-sm font-bold text-slate-700">Email Address</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                                        <span class="material-symbols-outlined text-[20px]">mail</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm font-medium text-slate-700"
                                        type="email" value="alex.rivera@spenny.io" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700">Job Title</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                                        <span class="material-symbols-outlined text-[20px]">work</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm font-medium text-slate-700"
                                        type="text" value="Super Admin" />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700">Timezone</label>
                                <div class="relative">
                                    <span
                                        class="absolute inset-y-0 left-3 flex items-center text-slate-400 pointer-events-none">
                                        <span class="material-symbols-outlined text-[20px]">schedule</span>
                                    </span>
                                    <select
                                        class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm font-medium text-slate-700 appearance-none cursor-pointer">
                                        <option>Eastern Time (US & Canada)</option>
                                        <option>Pacific Time (US & Canada)</option>
                                        <option selected>London (GMT)</option>
                                    </select>
                                    <span
                                        class="absolute inset-y-0 right-3 flex items-center text-slate-400 pointer-events-none">
                                        <span class="material-symbols-outlined text-[20px]">expand_more</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Tab -->
            <div id="tab-security"
                class="tab-pane absolute inset-x-0 top-0 transition-all duration-500 ease-in-out transform origin-top opacity-0 scale-95 translate-y-4 pointer-events-none z-0 w-full hidden">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-900">Security Settings</h3>
                        <p class="text-xs text-slate-500 mt-1">Ensure your account is using a long, random password to stay
                            secure.</p>
                    </div>
                    <button
                        class="px-6 py-2.5 bg-primary text-white rounded-lg font-bold text-sm shadow-md shadow-primary/20 hover:bg-primary/90 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                        Update Password
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm mb-6">
                    <h4
                        class="text-sm font-bold text-slate-800 mb-6 border-b border-slate-100 pb-4 flex items-center gap-2">
                        <span
                            class="material-symbols-outlined text-primary text-lg bg-primary/10 p-1.5 rounded-lg">lock</span>
                        Change Password
                    </h4>
                    <div class="max-w-xl space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Current Password</label>
                            <input
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm"
                                type="password" placeholder="••••••••" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">New Password</label>
                            <input
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm"
                                type="password" placeholder="••••••••" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Confirm Password</label>
                            <input
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-primary/10 focus:border-primary bg-slate-50/50 hover:bg-slate-50 outline-none transition-all text-sm"
                                type="password" placeholder="••••••••" />
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-start sm:items-center justify-between gap-6 flex-col sm:flex-row">
                        <div class="flex items-start gap-4">
                            <div
                                class="size-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">verified_user</span>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Two-Factor Authentication</h4>
                                <p class="text-sm text-slate-500 mt-1 max-w-lg">Add additional security to your account
                                    using two factor authentication. A code will be required when logging in from
                                    unrecognized devices.</p>
                            </div>
                        </div>
                        <button
                            class="px-5 py-2.5 bg-slate-900 text-white rounded-lg font-bold text-sm shadow-md hover:bg-slate-800 hover:-translate-y-0.5 transition-all w-full sm:w-auto shrink-0">
                            Enable 2FA
                        </button>
                    </div>
                </div>
            </div>

            <!-- Payments Tab -->
            <div id="tab-payments"
                class="tab-pane absolute inset-x-0 top-0 transition-all duration-500 ease-in-out transform origin-top opacity-0 scale-95 translate-y-4 pointer-events-none z-0 w-full hidden">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-900">Payment Methods</h3>
                        <p class="text-xs text-slate-500 mt-1">Manage your billing and payment details.</p>
                    </div>
                    <button
                        class="px-5 py-2.5 bg-slate-900 text-white rounded-lg font-bold text-sm shadow-md transition-all flex items-center gap-2 justify-center hover:bg-slate-800 hover:shadow-lg hover:-translate-y-0.5 w-full sm:w-auto">
                        <span class="material-symbols-outlined text-sm">add</span>
                        Add Method
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
                    <div class="p-5 border-b border-slate-100 bg-slate-50/50">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest">Saved Payment Methods</h4>
                    </div>
                    <div class="divide-y divide-slate-100">
                        <!-- method 1 -->
                        <div class="p-5 flex items-center justify-between hover:bg-slate-50/80 transition-colors group">
                            <div class="flex items-center gap-4 sm:gap-5">
                                <div
                                    class="w-14 h-10 rounded bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center border border-blue-200 shadow-inner relative overflow-hidden shrink-0">
                                    <div class="absolute inset-x-0 bottom-0 h-1 bg-blue-600"></div>
                                    <span class="text-xs font-black italic text-blue-900">VISA</span>
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">Visa ending in 4242</p>
                                    <p class="text-[11px] sm:text-xs text-slate-500 mt-0.5">Expires 12/2026</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 sm:gap-3">
                                <span
                                    class="hidden sm:inline-block px-2.5 py-1 bg-emerald-50 text-emerald-600 border border-emerald-200 text-[10px] font-black uppercase rounded-md tracking-wide">Default</span>
                                <div class="flex opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary transition-colors hover:bg-primary/5 rounded-lg"
                                        aria-label="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- method 2 -->
                        <div class="p-5 flex items-center justify-between hover:bg-slate-50/80 transition-colors group">
                            <div class="flex items-center gap-4 sm:gap-5">
                                <div
                                    class="w-14 h-10 rounded bg-slate-100 flex items-center justify-center border border-slate-200 shadow-inner overflow-hidden relative shrink-0">
                                    <div
                                        class="absolute -left-1 bottom-1 w-5 h-5 rounded-full bg-red-500/80 mix-blend-multiply">
                                    </div>
                                    <div
                                        class="absolute left-2.5 bottom-1 w-5 h-5 rounded-full bg-yellow-500/80 mix-blend-multiply">
                                    </div>
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">Mastercard ending in 8891</p>
                                    <p class="text-[11px] sm:text-xs text-slate-500 mt-0.5">Expires 05/2025</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 sm:gap-3">
                                <button
                                    class="hidden sm:block text-xs font-bold text-slate-400 hover:text-primary transition-colors opacity-0 group-hover:opacity-100 px-2 py-1 rounded hover:bg-slate-100">Make
                                    Default</button>
                                <div class="flex opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 transition-colors hover:bg-red-50 rounded-lg"
                                        aria-label="Delete">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Tab -->
            <div id="tab-team"
                class="tab-pane absolute inset-x-0 top-0 transition-all duration-500 ease-in-out transform origin-top opacity-0 scale-95 translate-y-4 pointer-events-none z-0 w-full hidden">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-900">Team Members</h3>
                        <p class="text-xs text-slate-500 mt-1">Manage who has access to this workspace.</p>
                    </div>
                    <button
                        class="px-5 py-2.5 bg-primary text-white rounded-lg font-bold text-sm shadow-md transition-all flex items-center gap-2 hover:bg-primary/90 hover:shadow-lg hover:-translate-y-0.5 w-full sm:w-auto justify-center">
                        <span class="material-symbols-outlined text-sm">person_add</span>
                        Invite Member
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
                    <div class="p-5 border-b border-slate-100 bg-slate-50/50">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest flex items-center gap-2">
                            <span class="material-symbols-outlined text-base">group</span> Active Members
                        </h4>
                    </div>
                    <div class="divide-y divide-slate-100">
                        <!-- member 1 -->
                        <div class="p-5 flex items-center justify-between hover:bg-slate-50/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <img src="https://ui-avatars.com/api/?name=Alex+Rivera&background=013b8f&color=fff"
                                    class="size-10 sm:size-12 rounded-full border border-slate-200 shadow-sm shrink-0" />
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">Alex Rivera <span
                                            class="text-[10px] font-black text-primary bg-primary/10 px-1.5 py-0.5 rounded ml-1 uppercase tracking-wider hidden sm:inline-block">You</span>
                                    </p>
                                    <p class="text-xs text-slate-500 mt-0.5">alex.rivera@spenny.io</p>
                                </div>
                            </div>
                            <span
                                class="text-[11px] font-bold text-slate-600 bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg shadow-sm">Owner</span>
                        </div>
                        <!-- member 2 -->
                        <div class="p-5 flex items-center justify-between group hover:bg-slate-50/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=random"
                                    class="size-10 sm:size-12 rounded-full border border-slate-200 shadow-sm shrink-0" />
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">Sarah Jenkins</p>
                                    <p class="text-xs text-slate-500 mt-0.5">sarah.j@spenny.io</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 sm:gap-4">
                                <div
                                    class="relative bg-slate-50 border border-slate-200 hover:border-primary/50 transition-colors rounded-lg overflow-hidden group-hover:bg-white">
                                    <select
                                        class="text-xs font-bold text-slate-700 bg-transparent border-none focus:ring-0 cursor-pointer py-1.5 pl-3 pr-8 appearance-none outline-none">
                                        <option>Admin</option>
                                        <option selected>Member</option>
                                        <option>Viewer</option>
                                    </select>
                                    <span
                                        class="absolute inset-y-0 right-2 flex items-center pointer-events-none text-slate-400">
                                        <span class="material-symbols-outlined text-[16px]">expand_more</span>
                                    </span>
                                </div>
                                <button
                                    class="p-1.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-all shrink-0 tooltip"
                                    aria-label="Remove User">
                                    <span class="material-symbols-outlined text-[20px]">person_remove</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notifications Tab -->
            <div id="tab-notifications"
                class="tab-pane absolute inset-x-0 top-0 transition-all duration-500 ease-in-out transform origin-top opacity-0 scale-95 translate-y-4 pointer-events-none z-0 w-full hidden">
                <div class="mb-6">
                    <h3 class="text-xl font-extrabold text-slate-900">Email Notifications</h3>
                    <p class="text-xs text-slate-500 mt-1">Choose what you want to be notified about.</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-2 sm:p-4 shadow-sm divide-y divide-slate-100">
                    <div
                        class="p-4 sm:p-5 flex items-start justify-between gap-4 hover:bg-slate-50/50 rounded-xl transition-colors">
                        <div class="flex gap-4">
                            <div
                                class="size-10 rounded-full bg-orange-50 text-orange-600 flex flex-center justify-center items-center shrink-0 hidden sm:flex">
                                <span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Security Alerts</p>
                                <p class="text-xs text-slate-500 mt-1 max-w-lg leading-relaxed">Get notified when someone
                                    logs into your account from a new device, or when suspicious activity is detected.</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer shrink-0 mt-1">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>

                    <div
                        class="p-4 sm:p-5 flex items-start justify-between gap-4 hover:bg-slate-50/50 rounded-xl transition-colors">
                        <div class="flex gap-4">
                            <div
                                class="size-10 rounded-full bg-blue-50 text-blue-600 flex flex-center justify-center items-center shrink-0 hidden sm:flex">
                                <span class="material-symbols-outlined text-[20px]">summarize</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Weekly Activity Summary</p>
                                <p class="text-xs text-slate-500 mt-1 max-w-lg leading-relaxed">Receive a weekly email
                                    summarizing your account details, transactions, and new user registrations.</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer shrink-0 mt-1">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>

                    <div
                        class="p-4 sm:p-5 flex items-start justify-between gap-4 hover:bg-slate-50/50 rounded-xl transition-colors">
                        <div class="flex gap-4">
                            <div
                                class="size-10 rounded-full bg-emerald-50 text-emerald-600 flex flex-center justify-center items-center shrink-0 hidden sm:flex">
                                <span class="material-symbols-outlined text-[20px]">system_update</span>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">System Updates</p>
                                <p class="text-xs text-slate-500 mt-1 max-w-lg leading-relaxed">Stay up to date with the
                                    latest features, system maintenance, and version updates.</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer shrink-0 mt-1">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="pt-8 sm:pt-12 pb-4 text-center relative z-10 w-full">
                <p
                    class="inline-block px-4 py-1.5 bg-slate-100 rounded-full text-slate-400 text-[10px] font-bold uppercase tracking-widest shadow-inner">
                    Last configuration updated on May 15, 2024
                </p>
            </div>
        </div>
    </div>

    <!-- Scripts for animated tabs -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab-btn');
            const panes = document.querySelectorAll('.tab-pane');
            const indicator = document.getElementById('tab-indicator');
            const nav = document.getElementById('settings-tabs');
            const contentContainer = document.getElementById('tab-content-container');

            function updateIndicator(activeTab) {
                if (!indicator || !activeTab) return;
                const rect = activeTab.getBoundingClientRect();
                const navRect = nav.getBoundingClientRect();

                indicator.style.width = `${rect.width}px`;
                indicator.style.left = `${rect.left - navRect.left + nav.scrollLeft}px`;
            }

            function adjustContainerHeight(activePane) {
                if (!contentContainer || !activePane) return;
                // Add a slight delay to allow content to render before measuring
                setTimeout(() => {
                    contentContainer.style.minHeight = `${activePane.offsetHeight + 100}px`;
                }, 50);
            }

            // Initialize
            const activeTabInit = document.querySelector('.tab-btn.active');
            const activePaneInit = document.querySelector('.tab-pane.opacity-100');

            if (activeTabInit) setTimeout(() => updateIndicator(activeTabInit), 100);
            if (activePaneInit) adjustContainerHeight(activePaneInit);

            window.addEventListener('resize', () => {
                const activeTab = document.querySelector('.tab-btn.active');
                if (activeTab) updateIndicator(activeTab);

                const activePane = document.querySelector('.tab-pane.opacity-100');
                if (activePane) adjustContainerHeight(activePane);
            });

            // Handle horizontal scroll on nav updating indicator
            nav.addEventListener('scroll', () => {
                const activeTab = document.querySelector('.tab-btn.active');
                if (activeTab) updateIndicator(activeTab);
            });

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const targetId = tab.getAttribute('data-target');
                    if (tab.classList.contains('active')) return;

                    // Update buttons
                    tabs.forEach(t => {
                        t.classList.remove('active', 'text-primary');
                        t.classList.add('text-slate-500');
                    });
                    tab.classList.remove('text-slate-500');
                    tab.classList.add('active', 'text-primary');

                    updateIndicator(tab);

                    // Update panes with animation
                    panes.forEach(pane => {
                        if (pane.id === targetId) {
                            // Show new pane
                            pane.classList.remove('hidden');

                            // Slight delay to allow display block to process before transitions
                            setTimeout(() => {
                                pane.classList.remove('opacity-0', 'scale-95',
                                    'translate-y-4', 'pointer-events-none',
                                    'z-0', 'absolute');
                                pane.classList.add('opacity-100', 'scale-100',
                                    'translate-y-0', 'relative', 'z-10');
                                adjustContainerHeight(pane);
                            }, 10);

                        } else {
                            // Hide other panes
                            pane.classList.remove('opacity-100', 'scale-100',
                                'translate-y-0', 'relative', 'z-10');
                            pane.classList.add('opacity-0', 'scale-95', 'translate-y-4',
                                'pointer-events-none', 'z-0', 'absolute');

                            // Wait for transition to complete before setting hidden
                            setTimeout(() => {
                                if (!pane.classList.contains('opacity-100')) {
                                    pane.classList.add('hidden');
                                }
                            }, 500);
                        }
                    });
                });
            });
            // Profile Image Preview Logic
            const profileImageInput = document.getElementById('profile-image-input');
            const profileImagePreview = document.getElementById('profile-image-preview');

            if (profileImageInput && profileImagePreview) {
                profileImageInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            profileImagePreview.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .tab-pane {
            will-change: transform, opacity;
        }
    </style>
@endsection
