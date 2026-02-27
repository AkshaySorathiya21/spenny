@extends('layouts.app')

@section('content')
    <!-- Content Area -->
    <div class="flex-1 overflow-y-auto p-8 bg-slate-50 dark:bg-background-dark">
        <div class="max-w-4xl mx-auto flex flex-col gap-6">
            <!-- Tabs -->
            <div class="flex border-b border-slate-200 dark:border-slate-800 gap-8">
                <button class="pb-3 border-b-2 border-primary text-primary text-sm font-bold">All</button>
                <button
                    class="pb-3 border-b-2 border-transparent text-slate-500 hover:text-primary text-sm font-medium">Unread</button>
                <button
                    class="pb-3 border-b-2 border-transparent text-slate-500 hover:text-primary text-sm font-medium">System
                    Alerts</button>
                <button class="pb-3 border-b-2 border-transparent text-slate-500 hover:text-primary text-sm font-medium">User
                    Activity</button>
            </div>
            <!-- Notification List -->
            <div class="flex flex-col gap-3">
                <!-- Notification Item 1 -->
                <div
                    class="bg-white dark:bg-slate-900 p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-accent-success/10 flex items-center justify-center text-accent-success shrink-0">
                            <span class="material-symbols-outlined">person_add</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <h3 class="text-primary font-bold text-base">New User Signed Up</h3>
                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">A new user "Alex Johnson" has completed
                                the onboarding process.</p>
                            <a class="text-primary text-xs font-bold mt-1 hover:underline" href="#">View Details</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2 shrink-0">
                        <span class="text-slate-400 text-xs">2 mins ago</span>
                        <button
                            class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-slate-600 transition-opacity">
                            <span class="material-symbols-outlined text-lg">more_vert</span>
                        </button>
                    </div>
                </div>
                <!-- Notification Item 2 -->
                <div
                    class="bg-white dark:bg-slate-900 p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined">sync</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <h3 class="text-primary font-bold text-base">System Update Successful</h3>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">The scheduled system maintenance v2.4.0
                                has been successfully deployed.</p>
                            <a class="text-primary text-xs font-bold mt-1 hover:underline" href="#">View Details</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2 shrink-0">
                        <span class="text-slate-400 text-xs">15 mins ago</span>
                        <button
                            class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-slate-600 transition-opacity">
                            <span class="material-symbols-outlined text-lg">more_vert</span>
                        </button>
                    </div>
                </div>
                <!-- Notification Item 3 -->
                <div
                    class="bg-white dark:bg-slate-900 p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-orange-100 flex items-center justify-center text-orange-600 shrink-0">
                            <span class="material-symbols-outlined">warning</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <h3 class="text-primary font-bold text-base">High Transaction Volume</h3>
                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">Alert: Transactions per second have
                                exceeded the normal threshold (250/s).</p>
                            <a class="text-primary text-xs font-bold mt-1 hover:underline" href="#">View Details</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2 shrink-0">
                        <span class="text-slate-400 text-xs">1 hour ago</span>
                        <button
                            class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-slate-600 transition-opacity">
                            <span class="material-symbols-outlined text-lg">more_vert</span>
                        </button>
                    </div>
                </div>
                <!-- Notification Item 4 -->
                <div
                    class="bg-white dark:bg-slate-900 p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between group opacity-70">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 shrink-0">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <h3 class="text-primary font-bold text-base">Feedback Received</h3>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">User #8922 has submitted a new feedback
                                ticket regarding UI improvements.</p>
                            <a class="text-primary text-xs font-bold mt-1 hover:underline" href="#">View Details</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2 shrink-0">
                        <span class="text-slate-400 text-xs">4 hours ago</span>
                        <button
                            class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-slate-600 transition-opacity">
                            <span class="material-symbols-outlined text-lg">more_vert</span>
                        </button>
                    </div>
                </div>
                <!-- Notification Item 5 -->
                <div
                    class="bg-white dark:bg-slate-900 p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-accent-success/10 flex items-center justify-center text-accent-success shrink-0">
                            <span class="material-symbols-outlined">verified_user</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <h3 class="text-primary font-bold text-base">KYC Verification Approved</h3>
                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">Merchant "Global Retailers" KYC documents
                                have been verified and approved.</p>
                            <a class="text-primary text-xs font-bold mt-1 hover:underline" href="#">View Details</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-2 shrink-0">
                        <span class="text-slate-400 text-xs">Yesterday</span>
                        <button
                            class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-slate-600 transition-opacity">
                            <span class="material-symbols-outlined text-lg">more_vert</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Pagination / Footer -->
            <div class="flex items-center justify-between text-slate-500 text-sm mt-4">
                <p>Showing 5 of 128 notifications</p>
                <div class="flex gap-2">
                    <button
                        class="px-3 py-1 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg hover:bg-slate-50 transition-colors">Previous</button>
                    <button
                        class="px-3 py-1 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg hover:bg-slate-50 transition-colors">Next</button>
                </div>
            </div>
        </div>
    </div>
@endsection
