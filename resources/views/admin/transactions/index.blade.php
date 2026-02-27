@extends('layouts.app')
@section('title', 'Transactions Log')
@section('content')
    <div class="p-8 space-y-6">
        <div
            class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200 dark:border-slate-800 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="space-y-1">
                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-1">Search</label>
                <div class="relative">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all"
                        placeholder="User or TXN ID..." type="text" />
                </div>
            </div>
            <div class="space-y-1">
                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-1">Date Range</label>
                <div class="relative">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">calendar_month</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all"
                        placeholder="Select dates" type="text" />
                </div>
            </div>
            <div class="space-y-1">
                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-1">Type</label>
                <select
                    class="w-full px-3 py-2 bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all">
                    <option>All Types</option>
                    <option>Inbound</option>
                    <option>Outbound</option>
                </select>
            </div>
            <div class="space-y-1">
                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-1">Status</label>
                <select
                    class="w-full px-3 py-2 bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all">
                    <option>All Status</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Failed</option>
                </select>
            </div>
            <div class="flex items-end">
                <button
                    class="w-full h-[38px] flex items-center justify-center bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg text-sm font-bold transition-all">
                    Clear Filters
                </button>
            </div>
        </div>
        <div
            class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50">
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">User</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Amount</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">
                                Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-xs font-mono text-slate-500">TXN-9021-3342</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 24, 2024,
                                14:22</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 bg-cover bg-center"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7pHv8UmJQuyatjPxAiTNQ5ll5fRiF_AU6oaKiX_9N2MdvdZMGOLCw-SCjGj-AcMM3PlKEF5KHKOfj1KWKhl7XgYa0DHITzk7xXwkBW5WHjb-Q-WD5X2L3DmpCPHcllgqseO1j2ZzVpbfDm3IMg9HlENMVZXANgr2tjLd-OSdvD_8CNfsR5MKlggEdXU_8wFAyFozxH2CT_MBjUoFaVSb5Erc9nUfwegyLfXxXwcBeNU6qNCTYXhbCpv_hcXncu6H2KlTfj2u6YFE')">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Sarah
                                            Jenkins</span>
                                        <span class="text-[10px] text-slate-400 font-medium leading-none">ID: 44210</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-700 dark:text-white">
                                -$1,299.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 uppercase tracking-tighter">Electronics</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-xs font-mono text-slate-500">TXN-9021-3343</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 24, 2024,
                                12:05</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 bg-cover bg-center"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDAfNkjKoO6dTYGpt_iHkJmTU16h8lCI68qVDIjoyo8DyW9JTwNmsN0e_VMrnT7msH9ww7bWCFAdAr4qozyn8W9aIxrYcLNhtO3hXDCZoedtu0vYQkF5boD1yq8NF8i33LynKORL7Q0uxLR7a6rDVV4F9zXPtX-PfQ5TzDiSALeVi4uNeDW5qTL7sckGQgPgxOAM2zfx_KuYL6EDFlVOGwCNjcmRLj_ZvXoF3fAT2rdLVQRg1VysFCKd5hZB0E2Xoq6et7IHnMxwNM')">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Marcus
                                            Thorne</span>
                                        <span class="text-[10px] text-slate-400 font-medium leading-none">ID: 44102</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-accent-success">+$2,500.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 uppercase tracking-tighter">Income</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-xs font-mono text-slate-500">TXN-9021-3344</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 24, 2024,
                                10:45</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-indigo-100 flex items-center justify-center">
                                        <span class="text-[10px] font-bold text-indigo-600">EB</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Elena
                                            Banks</span>
                                        <span class="text-[10px] text-slate-400 font-medium leading-none">ID: 44095</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-700 dark:text-white">-$45.20
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 uppercase tracking-tighter">Dining</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-amber-100 text-amber-600 border border-amber-200">Pending</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-xs font-mono text-slate-500">TXN-9021-3345</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 23, 2024,
                                18:12</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 bg-cover bg-center"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDAfNkjKoO6dTYGpt_iHkJmTU16h8lCI68qVDIjoyo8DyW9JTwNmsN0e_VMrnT7msH9ww7bWCFAdAr4qozyn8W9aIxrYcLNhtO3hXDCZoedtu0vYQkF5boD1yq8NF8i33LynKORL7Q0uxLR7a6rDVV4F9zXPtX-PfQ5TzDiSALeVi4uNeDW5qTL7sckGQgPgxOAM2zfx_KuYL6EDFlVOGwCNjcmRLj_ZvXoF3fAT2rdLVQRg1VysFCKd5hZB0E2Xoq6et7IHnMxwNM')">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Alex
                                            Rivera</span>
                                        <span class="text-[10px] text-slate-400 font-medium leading-none">ID: 43981</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-700 dark:text-white">-$12.90
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 uppercase tracking-tighter">Transport</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-red-100 text-red-600 border border-red-200">Failed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors border-b-0">
                            <td class="px-6 py-4 whitespace-nowrap text-xs font-mono text-slate-500">TXN-9021-3346</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 23, 2024,
                                15:30</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-pink-100 flex items-center justify-center">
                                        <span class="text-[10px] font-bold text-pink-600">JD</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Jane
                                            Doe</span>
                                        <span class="text-[10px] text-slate-400 font-medium leading-none">ID: 43900</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-accent-success">+$450.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 uppercase tracking-tighter">Refund</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span
                                    class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                <span class="text-xs font-medium text-slate-500">Showing 1 to 5 of 1,240 entries</span>
                <div class="flex items-center gap-2">
                    <button class="p-1 rounded hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-400">
                        <span class="material-symbols-outlined text-xl">chevron_left</span>
                    </button>
                    <button
                        class="size-7 flex items-center justify-center rounded bg-primary text-white text-xs font-bold">1</button>
                    <button
                        class="size-7 flex items-center justify-center rounded hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 text-xs font-bold">2</button>
                    <button
                        class="size-7 flex items-center justify-center rounded hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 text-xs font-bold">3</button>
                    <span class="text-slate-400 mx-1">...</span>
                    <button
                        class="size-7 flex items-center justify-center rounded hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 text-xs font-bold">248</button>
                    <button class="p-1 rounded hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-400">
                        <span class="material-symbols-outlined text-xl">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
