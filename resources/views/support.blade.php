<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Spenny Support Centre — Get help with your account, expenses, bill splitting, and more." />
    <title>Support Centre — Spenny</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#013b8f',
                        'primary-dark': '#012a6a',
                        accent: '#61b20b',
                        'accent-dark': '#4e9009',
                        'bg-light': '#f5f7fb',
                    },
                    fontFamily: {
                        display: ['Manrope', 'sans-serif']
                    },
                    borderRadius: {
                        DEFAULT: '1rem',
                        lg: '2rem',
                        full: '9999px'
                    },
                },
            },
        }
    </script>
    <style>
        * {
            font-family: 'Manrope', sans-serif;
        }

        .card-hover {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px -10px rgba(1, 59, 143, 0.12);
        }

        details>summary::-webkit-details-marker {
            display: none;
        }

        details[open] .faq-chevron {
            transform: rotate(180deg);
        }

        .faq-chevron {
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased">

    {{-- Navbar --}}
    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Spenny" class="h-9 w-auto">
            </a>
            <a href="{{ url('/') }}"
                class="px-4 py-2 bg-slate-50 border border-slate-100 rounded-full text-xs font-bold text-slate-600 hover:bg-white hover:text-primary hover:border-primary/20 transition-all flex items-center gap-2">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
                Home
            </a>
        </div>
    </nav>

    {{-- Hero --}}
    <div class="bg-primary text-white py-20 px-6 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-16 -mt-16 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/10 rounded-full -ml-16 -mb-16 pointer-events-none">
        </div>
        <div class="relative z-10">
            <span
                class="inline-block py-1 px-4 rounded-full bg-white/10 text-white font-bold text-xs mb-4 uppercase tracking-widest">Help
                Centre</span>
            <h1 class="text-4xl md:text-5xl font-black mb-4">How can we help you?</h1>
            <p class="text-white/70 max-w-xl mx-auto">Get answers to common questions, or reach out to our support team
                — we typically reply within 24 hours.</p>
        </div>
    </div>

    {{-- Contact Channels --}}
    <div class="max-w-5xl mx-auto px-6 -mt-10 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            {{-- Email --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-7 card-hover text-center">
                <div class="w-14 h-14 bg-primary/5 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#013b8f"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2" />
                        <polyline points="2,4 12,13 22,4" />
                    </svg>
                </div>
                <h3 class="font-bold text-primary text-base mb-1">Email Support</h3>
                <p class="text-slate-500 text-xs mb-3">For general queries and account issues</p>
                <a href="mailto:support@spenny.app"
                    class="text-primary font-bold text-sm hover:underline">support@spenny.app</a>
                <p class="text-slate-400 text-xs mt-2">Response within 24 hrs</p>
            </div>

            {{-- Live Chat --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-7 card-hover text-center">
                <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#61b20b"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-primary text-base mb-1">Live Chat</h3>
                <p class="text-slate-500 text-xs mb-3">Chat with our team in real-time</p>
                <span class="inline-flex items-center gap-1.5 text-accent font-bold text-sm">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse inline-block"></span>
                    Available Mon–Sat, 9am–6pm IST
                </span>
                <p class="text-slate-400 text-xs mt-2">Usually replies in &lt; 5 minutes</p>
            </div>

            {{-- Privacy / Legal --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-7 card-hover text-center">
                <div class="w-14 h-14 bg-primary/5 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#013b8f"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L4 6v6c0 5 3.5 9.7 8 11 4.5-1.3 8-6 8-11V6z" />
                        <path d="M9 12l2 2 4-4" stroke="#61b20b" stroke-width="2.2" />
                    </svg>
                </div>
                <h3 class="font-bold text-primary text-base mb-1">Privacy & Legal</h3>
                <p class="text-slate-500 text-xs mb-3">Data requests, deletion, legal queries</p>
                <a href="mailto:privacy@spenny.app"
                    class="text-primary font-bold text-sm hover:underline">privacy@spenny.app</a>
                <p class="text-slate-400 text-xs mt-2">Response within 48 hrs</p>
            </div>

        </div>
    </div>

    {{-- Quick Help Topics --}}
    <div class="max-w-5xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-extrabold text-primary mb-8 text-center">Browse Help Topics</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @php
                $topics = [
                    ['icon' => 'M12 2L4 6v6c0 5 3.5 9.7 8 11 4.5-1.3 8-6 8-11V6z', 'label' => 'Privacy & Security'],
                    [
                        'icon' =>
                            'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2 M23 21v-2a4 4 0 0 0-3-3.87 M16 3.13a4 4 0 0 1 0 7.75',
                        'label' => 'Account Management',
                    ],
                    [
                        'icon' =>
                            'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17 M17 13v4a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-4',
                        'label' => 'Expenses & Logging',
                    ],
                    ['icon' => 'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2', 'label' => 'Bill Splitting'],
                    [
                        'icon' => 'M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6',
                        'label' => 'Subscriptions & Billing',
                    ],
                    ['icon' => 'M18 20V10 M12 20V4 M6 20v-6', 'label' => 'Reports & Analytics'],
                    [
                        'icon' => 'M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z',
                        'label' => 'Notifications',
                    ],
                    ['icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', 'label' => 'Data & Backup'],
                ];
            @endphp
            @foreach ($topics as $topic)
                <button
                    class="bg-white border border-slate-100 rounded-2xl p-5 flex flex-col items-center gap-3 card-hover text-center hover:border-primary/20 transition-all w-full">
                    <div class="w-10 h-10 bg-primary/5 rounded-xl flex items-center justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#013b8f"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="{{ $topic['icon'] }}" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-slate-700 leading-snug">{{ $topic['label'] }}</span>
                </button>
            @endforeach
        </div>
    </div>

    {{-- Quick FAQs --}}
    <div class="bg-white py-16 border-t border-slate-100">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-2xl font-extrabold text-primary mb-2 text-center">Common Questions</h2>
            <p class="text-slate-500 text-sm text-center mb-10">Quick answers to the most frequently asked support
                questions.</p>

            @php
                $faqs = [
                    [
                        'q' => 'How do I reset my password?',
                        'a' =>
                            'Go to the Login page and tap "Forgot Password". Enter your registered email and we will send you a secure reset link within a few minutes. Check your spam folder if it doesn\'t arrive.',
                    ],
                    [
                        'q' => 'I accidentally deleted an expense. Can I recover it?',
                        'a' =>
                            'Deleted expenses can be recovered within 30 days from Settings → Trash. After 30 days, deletions are permanent. Contact support immediately if you need urgent recovery.',
                    ],
                    [
                        'q' => 'How do I upgrade to Premium?',
                        'a' =>
                            'Open the app → Profile → Upgrade to Premium. We accept UPI, debit/credit cards, and net banking. Your premium features activate instantly upon payment confirmation.',
                    ],
                    [
                        'q' => 'Why are my export reports not generating?',
                        'a' =>
                            'Report exports are a Premium feature. Ensure your subscription is active. If it is, try logging out and back in, then retry. If the issue persists, contact support with your account email.',
                    ],
                    [
                        'q' => 'How do I delete my Spenny account?',
                        'a' =>
                            'Go to Settings → Account → Delete Account. This permanently removes all your data within 7 business days. This action cannot be undone. Export your data first if needed.',
                    ],
                    [
                        'q' => 'Can I use Spenny on multiple devices?',
                        'a' =>
                            'Yes! Your Spenny account syncs across all devices — simply log in with your credentials. Free users can use up to 2 devices; Premium users have unlimited device access.',
                    ],
                ];
            @endphp

            <div class="space-y-3">
                @foreach ($faqs as $faq)
                    <details
                        class="border border-slate-200 rounded-2xl bg-slate-50 hover:border-primary/30 transition-all cursor-pointer overflow-hidden">
                        <summary
                            class="flex justify-between items-center font-bold text-primary text-sm list-none px-6 py-4 gap-4">
                            <span>{{ $faq['q'] }}</span>
                            <span
                                class="flex-shrink-0 w-7 h-7 rounded-full bg-white border border-slate-200 flex items-center justify-center faq-chevron">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                                    stroke="#013b8f" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </span>
                        </summary>
                        <div class="px-6 pb-5 pt-3 border-t border-slate-100">
                            <p class="text-slate-500 text-sm leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Contact Form --}}
    <div class="max-w-2xl mx-auto px-6 py-16">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-10">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-extrabold text-primary mb-2">Send Us a Message</h2>
                <p class="text-slate-500 text-sm">Can't find your answer? Fill in the form below and our team will get
                    back to you.</p>
            </div>

            @if (session('success'))
                <div
                    class="bg-accent/10 border border-accent/20 text-accent font-semibold text-sm rounded-xl px-5 py-3 mb-6 flex items-center gap-2">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('support.submit') }}" method="POST" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1.5 uppercase tracking-wide">Your
                            Name</label>
                        <input type="text" name="name" required placeholder="Rahul Sharma"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1.5 uppercase tracking-wide">Email
                            Address</label>
                        <input type="email" name="email" required placeholder="rahul@example.com"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1.5 uppercase tracking-wide">Topic</label>
                    <select name="topic" required
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all">
                        <option value="" disabled selected>Select a topic...</option>
                        <option value="account">Account & Login</option>
                        <option value="expenses">Expenses & Logging</option>
                        <option value="splitting">Bill Splitting</option>
                        <option value="billing">Subscription & Billing</option>
                        <option value="reports">Reports & Export</option>
                        <option value="privacy">Privacy & Data</option>
                        <option value="bug">Bug / Technical Issue</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1.5 uppercase tracking-wide">Your
                        Message</label>
                    <textarea name="message" required rows="5" placeholder="Describe your issue in detail..."
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all resize-none">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-4 bg-primary hover:bg-primary-dark text-white font-extrabold rounded-xl transition-all hover:-translate-y-0.5 shadow-lg shadow-primary/20 text-sm">
                    Submit Support Request →
                </button>
            </form>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="border-t border-slate-100 bg-white py-8 text-center">
        <p class="text-slate-400 text-sm">© {{ date('Y') }} Spenny Technologies. All rights reserved.</p>
        <div class="flex justify-center gap-6 mt-3">
            <a href="{{ route('privacy') }}"
                class="text-slate-400 hover:text-primary font-semibold text-sm">Privacy</a>
            <a href="{{ route('terms') }}" class="text-slate-400 hover:text-primary font-semibold text-sm">Terms</a>
            <a href="{{ route('support') }}" class="text-primary font-semibold text-sm hover:underline">Support</a>
        </div>
    </footer>

</body>

</html>
