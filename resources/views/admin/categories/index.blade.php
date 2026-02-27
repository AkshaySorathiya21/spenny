@extends('layouts.app')
@section('title', 'Category Management')
@section('content')
    <div class="p-8 space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-primary/5 dark:bg-primary/20 rounded-xl p-4 border border-primary/10 flex items-center gap-4">
                <div class="size-10 rounded-lg bg-primary text-white flex items-center justify-center">
                    <span class="material-symbols-outlined">category</span>
                </div>
                <div>
                    <p class="text-xs font-bold text-primary dark:text-blue-300 uppercase tracking-widest">Total
                        Categories</p>
                    <p class="text-2xl font-black text-primary dark:text-white">24</p>
                </div>
            </div>
            <div
                class="bg-accent-success/5 dark:bg-accent-success/20 rounded-xl p-4 border border-accent-success/10 flex items-center gap-4">
                <div class="size-10 rounded-lg bg-accent-success text-white flex items-center justify-center">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div>
                    <p class="text-xs font-bold text-accent-success uppercase tracking-widest">Active Categories
                    </p>
                    <p class="text-2xl font-black text-accent-success">21</p>
                </div>
            </div>
            <div
                class="bg-slate-100 dark:bg-slate-800 rounded-xl p-4 border border-slate-200 dark:border-slate-700 flex items-center gap-4">
                <div class="size-10 rounded-lg bg-slate-400 text-white flex items-center justify-center">
                    <span class="material-symbols-outlined">archive</span>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest">Archived</p>
                    <p class="text-2xl font-black text-slate-700 dark:text-slate-300">3</p>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-slate-50 dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
            <div class="relative flex-1 max-w-md">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                <input
                    class="w-full pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all"
                    placeholder="Search categories..." type="text" />
            </div>
            <div class="flex items-center gap-3">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Sort By:</span>
                <select
                    class="px-3 py-2 bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all">
                    <option>Most Used</option>
                    <option>Alphabetical</option>
                    <option>Recently Added</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-xl bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-primary dark:text-blue-400">
                        <span class="material-symbols-outlined text-2xl">devices</span>
                    </div>
                    <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button
                            class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button
                            class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-slate-400 hover:text-red-600 transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-primary dark:text-white text-lg">Electronics</h3>
                    <p class="text-xs text-slate-500 font-medium">842 Transactions linked</p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Active Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success"> </div>
                    </label>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-xl bg-orange-50 dark:bg-orange-900/30 flex items-center justify-center text-orange-600 dark:text-orange-400">
                        <span class="material-symbols-outlined text-2xl">restaurant</span>
                    </div>
                    <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button
                            class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button
                            class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-slate-400 hover:text-red-600 transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-primary dark:text-white text-lg">Dining</h3>
                    <p class="text-xs text-slate-500 font-medium">1,204 Transactions linked</p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Active Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success"> </div>
                    </label>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-xl bg-purple-50 dark:bg-purple-900/30 flex items-center justify-center text-purple-600 dark:text-purple-400">
                        <span class="material-symbols-outlined text-2xl">directions_car</span>
                    </div>
                    <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button
                            class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button
                            class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-slate-400 hover:text-red-600 transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-primary dark:text-white text-lg">Transport</h3>
                    <p class="text-xs text-slate-500 font-medium">956 Transactions linked</p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Active Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success"> </div>
                    </label>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center text-accent-success">
                        <span class="material-symbols-outlined text-2xl">payments</span>
                    </div>
                    <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button
                            class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button
                            class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-slate-400 hover:text-red-600 transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-primary dark:text-white text-lg">Income</h3>
                    <p class="text-xs text-slate-500 font-medium">3,450 Transactions linked</p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Active Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success"> </div>
                    </label>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-xl bg-teal-50 dark:bg-teal-900/30 flex items-center justify-center text-teal-600 dark:text-teal-400">
                        <span class="material-symbols-outlined text-2xl">replay</span>
                    </div>
                    <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button
                            class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button
                            class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-slate-400 hover:text-red-600 transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-primary dark:text-white text-lg">Refund</h3>
                    <p class="text-xs text-slate-500 font-medium">128 Transactions linked</p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Active Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success"> </div>
                    </label>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-xl bg-red-50 dark:bg-red-900/30 flex items-center justify-center text-red-600 dark:text-red-400">
                        <span class="material-symbols-outlined text-2xl">shopping_cart</span>
                    </div>
                    <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button
                            class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button
                            class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded text-slate-400 hover:text-red-600 transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-primary dark:text-white text-lg">Groceries</h3>
                    <p class="text-xs text-slate-500 font-medium">2,110 Transactions linked</p>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Active Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success"> </div>
                    </label>
                </div>
            </div>
            <button
                class="border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-xl p-5 flex flex-col items-center justify-center gap-2 hover:bg-slate-50 dark:hover:bg-slate-900/30 transition-colors text-slate-400 hover:text-primary group">
                <div
                    class="size-12 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                    <span class="material-symbols-outlined text-2xl">add_circle</span>
                </div>
                <span class="text-sm font-bold">Add Category</span>
            </button>
        </div>
    </div>
@endsection
