@extends('layouts.app')

@section('title', 'User Management')
@section('content')
    <div class="p-8 space-y-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm">
                <div class="flex flex-col items-center text-center pb-6 border-b border-slate-100 dark:border-slate-800">
                    <div class="size-24 rounded-full bg-slate-200 bg-cover bg-center mb-4 ring-4 ring-slate-50 dark:ring-slate-800"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7pHv8UmJQuyatjPxAiTNQ5ll5fRiF_AU6oaKiX_9N2MdvdZMGOLCw-SCjGj-AcMM3PlKEF5KHKOfj1KWKhl7XgYa0DHITzk7xXwkBW5WHjb-Q-WD5X2L3DmpCPHcllgqseO1j2ZzVpbfDm3IMg9HlENMVZXANgr2tjLd-OSdvD_8CNfsR5MKlggEdXU_8wFAyFozxH2CT_MBjUoFaVSb5Erc9nUfwegyLfXxXwcBeNU6qNCTYXhbCpv_hcXncu6H2KlTfj2u6YFE')">
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 dark:text-white leading-tight">Sarah Jenkins</h3>
                    <p class="text-sm text-slate-500 font-medium">sarah.j@example.com</p>
                    <div
                        class="mt-4 flex items-center gap-2 px-3 py-1 rounded-full bg-accent-success/10 text-accent-success border border-accent-success/20">
                        <div class="size-2 rounded-full bg-accent-success"></div>
                        <span class="text-xs font-bold uppercase tracking-wider">Active</span>
                    </div>
                </div>
                <div class="pt-6 space-y-4">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500">Member Since</span>
                        <span class="font-semibold text-slate-700 dark:text-slate-300">Oct 12, 2023</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500">Account Status</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input checked="" class="sr-only peer" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent-success">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm flex flex-col">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">verified_user</span>
                    <h3 class="font-bold text-slate-800 dark:text-white">Subscription Details</h3>
                </div>
                <div class="bg-primary/5 rounded-xl p-5 border border-primary/10 mb-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <p class="text-xs font-bold text-primary uppercase tracking-wider mb-1">Current Plan</p>
                            <h4 class="text-2xl font-extrabold text-primary">Elite</h4>
                        </div>
                        <span
                            class="bg-primary text-white text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-tighter">Premium</span>
                    </div>
                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium">$49.99 / billed monthly</p>
                </div>
                <div class="mt-auto space-y-4">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500">Next Payment Date</span>
                        <span class="font-semibold text-slate-700 dark:text-slate-300">Nov 12, 2024</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500">Billing Cycle</span>
                        <span class="font-semibold text-slate-700 dark:text-slate-300">Monthly</span>
                    </div>
                    <button
                        class="w-full py-2.5 text-sm font-bold text-primary hover:bg-primary/5 border border-primary/20 rounded-lg transition-all mt-2">
                        Manage Subscription
                    </button>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm flex flex-col">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-accent-success">insights</span>
                        <h3 class="font-bold text-slate-800 dark:text-white">Financial Overview</h3>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Last 30 Days</span>
                </div>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between items-end mb-2">
                            <div>
                                <p class="text-xs text-slate-500 font-medium mb-1">Total Savings</p>
                                <h4 class="text-xl font-bold text-slate-800 dark:text-white">$12,450.80</h4>
                            </div>
                            <span class="text-xs font-bold text-accent-success flex items-center">
                                <span class="material-symbols-outlined text-sm">arrow_upward</span>
                                12.5%
                            </span>
                        </div>
                        <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                            <div class="bg-accent-success h-full rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-end mb-2">
                            <div>
                                <p class="text-xs text-slate-500 font-medium mb-1">Monthly Spending</p>
                                <h4 class="text-xl font-bold text-slate-800 dark:text-white">$3,210.15</h4>
                            </div>
                            <span class="text-xs font-bold text-red-500 flex items-center">
                                <span class="material-symbols-outlined text-sm">arrow_upward</span>
                                4.2%
                            </span>
                        </div>
                        <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-slate-50 dark:border-slate-800 flex justify-between">
                        <div class="text-center flex-1 border-r border-slate-100 dark:border-slate-800">
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Avg Yield</p>
                            <p class="text-sm font-bold text-slate-700 dark:text-slate-300">4.5% APY</p>
                        </div>
                        <div class="text-center flex-1">
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Cash Flow</p>
                            <p class="text-sm font-bold text-slate-700 dark:text-slate-300">+$2,400</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-slate-400">history</span>
                    <h3 class="font-bold text-slate-800 dark:text-white text-lg">Recent Activity</h3>
                </div>
                <button class="text-primary text-sm font-bold hover:underline transition-all">View All Transactions</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50">
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Transaction</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Amount</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-lg">shopping_cart</span>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Apple Store
                                        Purchase</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">2 mins ago
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800 dark:text-white">
                                -$1,299.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400">Electronics</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-accent-success/10 flex items-center justify-center">
                                        <span
                                            class="material-symbols-outlined text-accent-success text-lg">account_balance_wallet</span>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">External Bank
                                        Transfer</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">4 hours ago
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-accent-success">+$2,500.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400">Income</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-lg">restaurant</span>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">The Italian
                                        Kitchen</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Yesterday,
                                8:45 PM</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800 dark:text-white">
                                -$142.50</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400">Dining</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-lg">local_taxi</span>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Uber Trip</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Yesterday,
                                5:12 PM</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800 dark:text-white">
                                -$24.90</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400">Travel</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors border-b-0">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-slate-400 text-lg">subscriptions</span>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Subscription -
                                        Spenny Elite</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 12, 2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800 dark:text-white">
                                -$49.99</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400">Bills</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter bg-accent-success/10 text-accent-success border border-accent-success/20">Completed</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
