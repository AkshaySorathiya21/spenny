@extends('layouts.app')
@section('title', 'Subscription Management')
@section('content')
    <div class="p-8 space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Active Subscriptions</span>
                    <span class="material-symbols-outlined text-primary">group</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white">12,842</span>
                    <span class="text-xs font-bold text-accent-success">+5.2%</span>
                </div>
                <p class="text-xs text-slate-500 mt-2">Current month total</p>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Monthly Recurring Revenue
                        (MRR)</span>
                    <span class="material-symbols-outlined text-accent-success">payments</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white">$84,250</span>
                    <span class="text-xs font-bold text-accent-success">+$4,120</span>
                </div>
                <p class="text-xs text-slate-500 mt-2">Revenue growth this month</p>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Churn Rate</span>
                    <span class="material-symbols-outlined text-red-500">trending_down</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white">2.4%</span>
                    <span class="text-xs font-bold text-accent-success">-0.3%</span>
                </div>
                <p class="text-xs text-slate-500 mt-2">Last 30 days retention</p>
            </div>
        </div>
        <div>
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Active Tiers</h3>
                <div class="flex bg-slate-100 dark:bg-slate-800 p-1 rounded-lg">
                    <button
                        class="px-4 py-1.5 text-xs font-bold bg-white dark:bg-slate-700 shadow-sm rounded-md text-slate-900 dark:text-white">Monthly</button>
                    <button
                        class="px-4 py-1.5 text-xs font-bold text-slate-500 hover:text-slate-700 transition-colors">Annual
                        (Save 20%)</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                    <div class="p-8 border-b border-slate-100 dark:border-slate-800">
                        <h4 class="text-2xl font-bold text-primary mb-2">Free</h4>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900 dark:text-white">$0</span>
                            <span class="text-sm font-medium text-slate-500">/mo</span>
                        </div>
                        <p class="text-sm text-slate-500 mt-4">Essential features for individuals getting started with
                            Spenny.</p>
                    </div>
                    <div class="p-8 flex-1">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Up to 5 basic projects</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Basic analytics dashboard</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Community support</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">1 month data history</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8 pt-0">
                        <button
                            class="w-full py-3 px-4 bg-slate-50 dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-900 dark:text-white font-bold rounded-xl border border-slate-200 dark:border-slate-700 transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-lg">edit</span>
                            Edit Plan
                        </button>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl border-2 border-primary shadow-xl flex flex-col relative transform scale-105 z-10">
                    <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-black uppercase tracking-widest px-4 py-1 rounded-full">
                        Most Popular
                    </div>
                    <div class="p-8 border-b border-slate-100 dark:border-slate-800">
                        <h4 class="text-2xl font-bold text-primary mb-2">Pro</h4>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900 dark:text-white">$49</span>
                            <span class="text-sm font-medium text-slate-500">/mo</span>
                        </div>
                        <p class="text-sm text-slate-500 mt-4">Advanced tools and higher limits for growing businesses.</p>
                    </div>
                    <div class="p-8 flex-1">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Unlimited projects</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Advanced custom reporting</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Priority email support</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">12 months data history</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Team collaboration (up to 5)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8 pt-0">
                        <button
                            class="w-full py-3 px-4 bg-primary hover:brightness-110 text-white font-bold rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-lg">edit</span>
                            Edit Plan
                        </button>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                    <div class="p-8 border-b border-slate-100 dark:border-slate-800">
                        <h4 class="text-2xl font-bold text-primary mb-2">Elite</h4>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900 dark:text-white">$199</span>
                            <span class="text-sm font-medium text-slate-500">/mo</span>
                        </div>
                        <p class="text-sm text-slate-500 mt-4">The ultimate plan for large scale enterprises and heavy
                            usage.</p>
                    </div>
                    <div class="p-8 flex-1">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Everything in Pro tier</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Custom API integration</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Dedicated account manager</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">Unlimited data history</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm text-slate-600 dark:text-slate-300">White-label options</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8 pt-0">
                        <button
                            class="w-full py-3 px-4 bg-slate-50 dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-900 dark:text-white font-bold rounded-xl border border-slate-200 dark:border-slate-700 transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-lg">edit</span>
                            Edit Plan
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <p class="text-slate-500 text-sm">Last edited by <b>Alex Rivera</b> on May 12, 2024 at 10:45 AM</p>
            </div>
        </div>
    </div>
@endsection
