@extends('layouts.app')

@section('title', 'User Management')
@section('content')
    <div class="p-8">
        <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Plan</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Joined Date</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right"> Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 flex-shrink-0"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7pHv8UmJQuyatjPxAiTNQ5ll5fRiF_AU6oaKiX_9N2MdvdZMGOLCw-SCjGj-AcMM3PlKEF5KHKOfj1KWKhl7XgYa0DHITzk7xXwkBW5WHjb-Q-WD5X2L3DmpCPHcllgqseO1j2ZzVpbfDm3IMg9HlENMVZXANgr2tjLd-OSdvD_8CNfsR5MKlggEdXU_8wFAyFozxH2CT_MBjUoFaVSb5Erc9nUfwegyLfXxXwcBeNU6qNCTYXhbCpv_hcXncu6H2KlTfj2u6YFE')">
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Sarah
                                        Jenkins</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                sarah.j@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div class="size-2 rounded-full bg-accent-success"></div>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-bold bg-primary/10 text-primary">Elite</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Oct 12, 2023
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <a href="{{ route('admin.users.show') }}" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 flex-shrink-0"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0DFbbpr4QQtALAdkHOQfeIWP0AHE9rn8plTTrV5FnNA0d90c5Us4O-ELfdI4HrgidCxv523hYeIFwEag1b99uRLFhKlD-aMDiQUwZgDFtsShcWMQWYqzSlXJq_deN2rvgfvHFG5bnUnMS-QX-WSwq_QL4Pxc28-x6iwkixVi_RHGoR_-O-v-r6SgVHrXztyLjX3CDZo2R6UfSKL9yAcho6DiAA-19LhG7-HTTyS1TJNUyKcC-RwaUomfD65x1bg8vZHo_Xy5NuY0')">
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Michael
                                        Chen</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                m.chen@outlook.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div class="size-2 rounded-full bg-accent-success"></div>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">Free</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Nov 04, 2023
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <button
                                    class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 flex-shrink-0"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAohvSd4O1J51W-vanOUEgBKwURXZrnAX06INrT_a8BATpOieEJv-lWHTT7WzsPlRn4TR25H7o468thaORCk8Fs17x-k9GBXkz9zGBT8SDrIZkrtkkRTMFB51Q-QZgfjg3jKVbGeiNBhLzmWBb2wTgS9vJwJTi61qZ8-xQzXlwoRqY1halI-O07UmtkVv_DYjdSlHoRwQ2FCFLqmqmHOy_zdNydUUwN6LIlTvlDGjrtsSBUryuPo6vee91XOvpqflTQzpbVcpdm1Xw')">
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Elena
                                        Rodriguez</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                elena.r@spenny.io</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2 text-slate-400">
                                    <div class="size-2 rounded-full bg-slate-300"></div>
                                    <span class="text-sm font-medium">Inactive</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-bold bg-accent-success/10 text-accent-success">Pro</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Jan 15, 2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <button
                                    class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 flex-shrink-0"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCMtso8phhQRijHNJDAo-MH3yGrX3_V573XQl1U62FUXlfT5KXGpiNOPX4yGd5jGk0cwLhhcY9RJHwLrKD1V8C2DCOVwHIfPA0xhmSFautMZl-yuHtfOcd6fqY0tAkvgSv-bixsaMgPjvmbhqFiuD7DSKcG5mM5xAZ7DTEmYZ9LI1Q8sPybWPWQtj3ihaVaX8mnzVNfB4xIRa6qBcvG0HyrPNOx3B3MDwLWn5LlLm0njQzRyc0el-cnApL_RxXn80Gc5hsg0NPEXsk')">
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">James
                                        Wilson</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                james.w@gmail.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div class="size-2 rounded-full bg-accent-success"></div>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-bold bg-accent-success/10 text-accent-success">Pro</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Feb 02, 2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <button
                                    class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded-full bg-slate-200 flex-shrink-0"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCobXIZIu2hWzrFm0_dl8ixksXDQnlky73vbpSOyj_7XSrtc7q3KWySFfZgH7Aakj_eUY6_cX3_5cRk7q2miMkCysYlnmkDVY94VP4yQd76y1zFTr-xrzfxO0QkNx80pg5dvLV4gvsuiNaHhxoEOVRTN3GEzm0oxn-Rmu9RkdUi0BmvGLA44YuYFMFmkWke-gQdgI7JoMQJJvHG-t4DjHZKAOxofBTYDYMWWdqrqheVDcAuKtdeU9Z02srFhsYTg8MT0WsWvektmfo')">
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Olivia
                                        Park</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                olivia.park@company.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div class="size-2 rounded-full bg-accent-success"></div>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">Free</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">Mar 10, 2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <button
                                    class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                <span class="text-sm text-slate-500">Showing 1 to 5 of 12,450 users</span>
                <div class="flex gap-2">
                    <button
                        class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors disabled:opacity-50">
                        <span class="material-symbols-outlined text-lg leading-none">chevron_left</span>
                    </button>
                    <button class="px-4 py-2 bg-primary text-white text-sm font-bold rounded-lg">1</button>
                    <button
                        class="px-4 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-bold rounded-lg transition-colors">2</button>
                    <button
                        class="px-4 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-bold rounded-lg transition-colors">3</button>
                    <button
                        class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                        <span class="material-symbols-outlined text-lg leading-none">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
