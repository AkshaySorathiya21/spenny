@extends('layouts.app')

@section('content')
    <div class="p-8 space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-xl bg-primary/5 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">group</span>
                    </div>
                    <span
                        class="text-accent-success text-sm font-bold flex items-center bg-accent-success/10 px-2 py-0.5 rounded">
                        <span class="material-symbols-outlined text-sm mr-1">trending_up</span>
                        12%
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium">Total Users</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">42.5k</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-xl bg-primary/5 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">payments</span>
                    </div>
                    <span
                        class="text-accent-success text-sm font-bold flex items-center bg-accent-success/10 px-2 py-0.5 rounded">
                        <span class="material-symbols-outlined text-sm mr-1">trending_up</span>
                        8.4%
                    </span>
                </div>
                <p class="text-slate-500 text-sm font-medium">Monthly Revenue</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">$128k</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-xl bg-primary/5 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">sensors</span>
                    </div>
                </div>
                <p class="text-slate-500 text-sm font-medium">Active Sessions</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">1.2k</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="size-10 rounded-xl bg-primary/5 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">verified_user</span>
                    </div>
                </div>
                <p class="text-slate-500 text-sm font-medium">System Health</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">99.9%</h3>
            </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
            <div class="xl:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h4 class="text-lg font-bold text-primary">User Growth</h4>
                        <p class="text-slate-400 text-xs">Performance over the last 30 days</p>
                    </div>
                    <select
                        class="text-xs font-bold border-slate-200 rounded-lg text-slate-500 focus:ring-primary focus:border-primary">
                        <option>Last 30 Days</option>
                        <option>Last 6 Months</option>
                    </select>
                </div>
                <div class="h-80 w-full relative flex items-end justify-between px-2">
                    <div class="absolute inset-0 flex items-end justify-between px-4 pb-2">
                        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1000 300">
                            <path d="M0,250 Q100,240 200,180 T400,120 T600,150 T800,80 T1000,40" fill="none"
                                stroke="#013b8f" stroke-width="4"></path>
                            <path d="M0,250 Q100,240 200,180 T400,120 T600,150 T800,80 T1000,40 V300 H0 Z"
                                fill="url(#blueGradient)" opacity="0.1"></path>
                            <defs>
                                <linearGradient id="blueGradient" x1="0" x2="0" y1="0"
                                    y2="1">
                                    <stop offset="0%" stop-color="#013b8f"></stop>
                                    <stop offset="100%" stop-color="white"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div
                        class="w-full h-full flex items-end justify-between absolute bottom-0 left-0 px-4 pt-4 border-l border-b border-slate-100">
                        <span class="text-[10px] text-slate-300 absolute -bottom-6 left-0">Week 1</span>
                        <span class="text-[10px] text-slate-300 absolute -bottom-6 left-1/4">Week 2</span>
                        <span class="text-[10px] text-slate-300 absolute -bottom-6 left-2/4">Week 3</span>
                        <span class="text-[10px] text-slate-300 absolute -bottom-6 left-3/4">Week 4</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 overflow-hidden">
                <h4 class="text-lg font-bold text-primary mb-6">Recent Activity</h4>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="size-10 rounded-full bg-slate-50 flex-shrink-0 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-xl">person_add</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold text-slate-800">Sarah Jenkins</p>
                            <p class="text-xs text-slate-500">New registration via Mobile App</p>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] font-bold text-slate-400 uppercase">2m ago</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div
                            class="size-10 rounded-full bg-accent-success/10 flex-shrink-0 flex items-center justify-center">
                            <span class="material-symbols-outlined text-accent-success text-xl">upgrade</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold text-slate-800">Marcus Sterling</p>
                            <p class="text-xs text-slate-500">Upgraded to <span class="text-primary font-bold">Premium
                                    Plan</span></p>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] font-bold text-slate-400 uppercase">14m ago</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="size-10 rounded-full bg-slate-50 flex-shrink-0 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-xl">person_add</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold text-slate-800">Elena Rodriguez</p>
                            <p class="text-xs text-slate-500">New registration via Referral</p>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] font-bold text-slate-400 uppercase">1h ago</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div
                            class="size-10 rounded-full bg-accent-success/10 flex-shrink-0 flex items-center justify-center">
                            <span class="material-symbols-outlined text-accent-success text-xl">upgrade</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold text-slate-800">TechSolutions Inc.</p>
                            <p class="text-xs text-slate-500">Upgraded to <span
                                    class="text-primary font-bold">Enterprise</span></p>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] font-bold text-slate-400 uppercase">3h ago</p>
                        </div>
                    </div>
                </div>
                <button
                    class="w-full mt-8 py-3 text-sm font-bold text-primary hover:bg-slate-50 rounded-xl transition-colors border border-slate-100">
                    View All Activity
                </button>
            </div>
        </div>
    </div>
@endsection
