<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description"
        content="Spenny — The privacy-first personal finance app. Log expenses manually, split bills, and stay in control with no bank links required." />
    <title>Spenny — Take Control of Your Spending</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- SEO & Social Meta Tags -->
    <meta property="og:title" content="Spenny — Take Control of Your Spending" />
    <meta property="og:description"
        content="The privacy-first personal finance app. Log expenses manually, split bills, and stay in control with no bank links required." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Spenny — Take Control of Your Spending" />
    <meta name="twitter:description"
        content="Manual expense logging for total privacy. No bank sync, no data sharing." />
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#013b8f",
                        "primary-dark": "#012a6a",
                        "accent": "#61b20b",
                        "accent-dark": "#4e9009",
                        "bg-light": "#f5f7fb",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>

    <style type="text/tailwindcss">
        body {
            font-family: 'Manrope', sans-serif;
        }

        /* ── Scrollbar ── */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #013b8f44;
            border-radius: 9999px;
        }

        /* ── Nav Glass ── */
        .nav-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(1, 59, 143, 0.08);
        }

        /* ── Hero Gradient ── */
        .hero-bg {
            background: linear-gradient(135deg, #f5f7fb 0%, #eef3ff 50%, #f0f9e8 100%);
        }

        /* ── Gradient Text ── */
        .text-gradient {
            background: linear-gradient(135deg, #013b8f 0%, #1a6ee0 50%, #61b20b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── Step connector ── */
        .dashed-line {
            background-image: linear-gradient(to right, #013b8f44 50%, transparent 50%);
            background-size: 16px 2px;
            background-repeat: repeat-x;
        }

        /* ── Card hover lift ── */
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -12px rgba(1, 59, 143, 0.14);
        }

        /* ── iPhone frame ── */
        .iphone-frame {
            border: 8px solid #1a1a1a;
            border-radius: 3rem;
            position: relative;
        }

        .iphone-notch {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 110px;
            height: 24px;
            background: #1a1a1a;
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
            z-index: 10;
        }

        /* ── FAQ toggle ── */
        details>summary::-webkit-details-marker {
            display: none;
        }

        details[open] .faq-icon {
            transform: rotate(180deg);
        }

        .faq-icon {
            transition: transform 0.3s ease;
        }

        /* ── Pulse badge ── */
        @keyframes pulse-ring {
            0% {
                transform: scale(0.9);
                opacity: 1;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .pulse-ring::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 9999px;
            background: #61b20b;
            animation: pulse-ring 1.8s ease-out infinite;
        }

        /* ── Fade-in on scroll ── */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── CTA gradient ── */
        .cta-bg {
            background: linear-gradient(135deg, #012a6a 0%, #013b8f 50%, #014abf 100%);
        }

        /* ── Stat counter highlight ── */
        .stat-accent {
            color: #61b20b;
        }

        /* ── Float Y animation for hero cards ── */
        @keyframes floatY {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body class="bg-white text-slate-900 antialiased overflow-x-hidden">

    {{-- ═══════════════════════════════════════════════
         NAVBAR
    ═══════════════════════════════════════════════ --}}
    <nav class="nav-glass fixed top-0 left-0 right-0 z-50">
        <div class="py-3 flex items-center justify-center">
            <a href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Spenny Logo" class="h-10 w-auto">
            </a>
        </div>
    </nav>

    {{-- ═══════════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════════ --}}
    <section class="hero-bg relative pt-28 pb-16 md:pt-32 md:pb-24 overflow-hidden">
        {{-- Decorative blobs --}}
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full translate-x-1/3 -translate-y-1/3 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent/5 rounded-full -translate-x-1/3 translate-y-1/3 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Left: Text --}}
                <div class="z-10 text-center lg:text-left fade-up">

                    {{-- Badge --}}
                    <div
                        class="inline-flex items-center gap-2 bg-white border border-primary/15 text-primary font-bold text-xs uppercase tracking-widest py-1.5 px-4 rounded-full shadow-sm mb-6">
                        <span class="relative flex h-2 w-2 pulse-ring">
                            <span class="w-2 h-2 rounded-full bg-accent inline-block relative z-10"></span>
                        </span>
                        Privacy-First Finance App
                    </div>

                    <h1 class="text-4xl lg:text-6xl font-black leading-[1.1] mb-6 text-primary">
                        Your Money,<br />
                        <span class="text-gradient">Managed Smartly.</span>
                    </h1>
                    <p class="text-lg text-slate-500 mb-10 max-w-xl lg:mx-0 mx-auto leading-relaxed">
                        The power of a finance app with the privacy of a notebook.
                        No bank links, no card sync — just total, effortless control.
                    </p>

                    {{-- Trust indicators --}}
                    <div class="flex items-center gap-6 mt-10 justify-center lg:justify-start">
                        <div class="flex -space-x-3">
                            @foreach (['#4f46e5', '#0891b2', '#059669', '#d97706'] as $c)
                                <div class="w-9 h-9 rounded-full border-2 border-white flex items-center justify-center text-white text-xs font-bold"
                                    style="background:{{ $c }}">
                                    {{ strtoupper(chr(rand(65, 90))) }}
                                </div>
                            @endforeach
                        </div>
                        <div>
                            <div class="flex items-center gap-0.5 mb-0.5">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="h-3.5 w-3.5 text-accent" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-xs text-slate-500 font-semibold">Loved by <strong
                                    class="text-primary">50,000+</strong> users</p>
                        </div>
                    </div>
                </div>

                {{-- Right: Hero SVG Illustration --}}
                <div class="relative flex justify-center items-center lg:justify-end fade-up"
                    style="transition-delay:0.15s">
                    <div class="relative w-full max-w-[540px]">

                        {{-- Glow rings behind --}}
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                            <div class="w-[420px] h-[420px] rounded-full border border-primary/8 absolute"></div>
                            <div class="w-[320px] h-[320px] rounded-full border border-accent/10 absolute"></div>
                        </div>

                        {{-- Main Phone SVG Illustration --}}
                        <svg viewBox="0 0 480 580" xmlns="http://www.w3.org/2000/svg"
                            class="w-full drop-shadow-2xl relative z-10">
                            <defs>
                                <linearGradient id="phoneBg" x1="0%" y1="0%" x2="0%"
                                    y2="100%">
                                    <stop offset="0%" stop-color="#013b8f" />
                                    <stop offset="100%" stop-color="#012a6a" />
                                </linearGradient>
                                <linearGradient id="chartGrad" x1="0%" y1="0%" x2="0%"
                                    y2="100%">
                                    <stop offset="0%" stop-color="#61b20b" stop-opacity="0.9" />
                                    <stop offset="100%" stop-color="#61b20b" stop-opacity="0.05" />
                                </linearGradient>
                                <filter id="softShadow" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="12" stdDeviation="20" flood-color="#013b8f"
                                        flood-opacity="0.22" />
                                </filter>
                            </defs>

                            {{-- ── Phone Shell ── --}}
                            <rect x="58" y="14" width="364" height="552" rx="50" ry="50"
                                fill="#1a1a1a" filter="url(#softShadow)" />
                            <rect x="64" y="20" width="352" height="540" rx="44" ry="44"
                                fill="url(#phoneBg)" />

                            {{-- Notch --}}
                            <rect x="168" y="20" width="144" height="28" rx="14" fill="#1a1a1a" />

                            {{-- ── Status bar dot --}}
                            <circle cx="316" cy="34" r="4" fill="rgba(255,255,255,0.3)" />

                            {{-- ── Header ── --}}
                            <text x="240" y="76" text-anchor="middle" fill="rgba(255,255,255,0.55)" font-size="12"
                                font-family="Manrope,sans-serif" font-weight="600">My Dashboard</text>

                            {{-- ── Balance Card ── --}}
                            <rect x="84" y="90" width="312" height="105" rx="20"
                                fill="rgba(255,255,255,0.09)" />
                            <text x="240" y="118" text-anchor="middle" fill="rgba(255,255,255,0.5)" font-size="11"
                                font-family="Manrope,sans-serif" font-weight="600">Total Balance</text>
                            <text x="240" y="156" text-anchor="middle" fill="#ffffff" font-size="32"
                                font-family="Manrope,sans-serif" font-weight="800">₹4,280.50</text>
                            <text x="182" y="179" fill="#61b20b" font-size="11" font-family="Manrope,sans-serif"
                                font-weight="700">▲ +12.4%</text>
                            <text x="232" y="179" fill="rgba(255,255,255,0.4)" font-size="11"
                                font-family="Manrope,sans-serif">vs last month</text>

                            {{-- ── Quick Actions ── --}}

                            {{-- Send box --}}
                            <rect x="84" y="210" width="68" height="68" rx="18"
                                fill="rgba(255,255,255,0.1)" />
                            {{-- Send icon: paper plane SVG path --}}
                            <g transform="translate(107,228)">
                                <path d="M2 2L22 12L2 22L6 12Z" fill="none" stroke="white" stroke-width="1.8"
                                    stroke-linejoin="round" transform="scale(0.95)" />
                                <line x1="6" y1="12" x2="14" y2="12" stroke="white"
                                    stroke-width="1.8" stroke-linecap="round" transform="scale(0.95)" />
                            </g>
                            <text x="118" y="268" text-anchor="middle" fill="rgba(255,255,255,0.55)" font-size="10"
                                font-family="Manrope,sans-serif">Send</text>

                            {{-- Receive box --}}
                            <rect x="164" y="210" width="68" height="68" rx="18"
                                fill="rgba(255,255,255,0.1)" />
                            {{-- Download arrow icon --}}
                            <g transform="translate(187,227)">
                                <line x1="11" y1="2" x2="11" y2="16" stroke="white"
                                    stroke-width="1.8" stroke-linecap="round" />
                                <polyline points="5,10 11,16 17,10" fill="none" stroke="white" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <line x1="3" y1="20" x2="19" y2="20" stroke="white"
                                    stroke-width="1.8" stroke-linecap="round" />
                            </g>
                            <text x="198" y="268" text-anchor="middle" fill="rgba(255,255,255,0.55)" font-size="10"
                                font-family="Manrope,sans-serif">Receive</text>

                            {{-- Split box --}}
                            <rect x="244" y="210" width="68" height="68" rx="18"
                                fill="rgba(97,178,11,0.22)" />
                            {{-- People/group icon --}}
                            <g transform="translate(264,226)">
                                <circle cx="9" cy="5" r="3.5" fill="none" stroke="#61b20b"
                                    stroke-width="1.8" />
                                <path d="M1 21c0-4 3.6-7 8-7s8 3 8 7" fill="none" stroke="#61b20b"
                                    stroke-width="1.8" stroke-linecap="round" />
                                <circle cx="18" cy="6" r="2.5" fill="none" stroke="#61b20b"
                                    stroke-width="1.6" />
                                <path d="M22 21c0-3-2-5-4.5-5" fill="none" stroke="#61b20b" stroke-width="1.6"
                                    stroke-linecap="round" />
                            </g>
                            <text x="278" y="268" text-anchor="middle" fill="rgba(97,178,11,0.9)" font-size="10"
                                font-family="Manrope,sans-serif">Split</text>

                            {{-- Budget box --}}
                            <rect x="324" y="210" width="68" height="68" rx="18"
                                fill="rgba(255,255,255,0.1)" />
                            {{-- Pie chart icon --}}
                            <g transform="translate(348,228)">
                                <path d="M10 2a10 10 0 1 0 10 10H10z" fill="none" stroke="white"
                                    stroke-width="1.8" />
                                <path d="M10 2v10h10A10 10 0 0 0 10 2z" fill="rgba(255,255,255,0.35)" stroke="white"
                                    stroke-width="1.8" />
                            </g>
                            <text x="358" y="268" text-anchor="middle" fill="rgba(255,255,255,0.55)" font-size="10"
                                font-family="Manrope,sans-serif">Budget</text>

                            {{-- ── Spending Overview Label ── --}}
                            <text x="100" y="305" fill="rgba(255,255,255,0.75)" font-size="12"
                                font-family="Manrope,sans-serif" font-weight="700">Spending Overview</text>
                            <text x="380" y="305" text-anchor="end" fill="#61b20b" font-size="11"
                                font-family="Manrope,sans-serif" font-weight="700">This Week</text>

                            {{-- ── Animated Bar Chart ── --}}
                            {{-- Base track bars --}}
                            <rect x="100" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />
                            <rect x="143" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />
                            <rect x="186" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />
                            <rect x="229" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />
                            <rect x="272" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />
                            <rect x="315" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />
                            <rect x="358" y="315" width="28" height="49" rx="4"
                                fill="rgba(255,255,255,0.08)" />

                            {{-- Filled bars (animated) --}}
                            <rect x="100" y="340" width="28" height="24" rx="4"
                                fill="url(#chartGrad)">
                                <animate attributeName="height" from="0" to="24" dur="0.8s"
                                    begin="0.1s" fill="freeze" />
                                <animate attributeName="y" from="364" to="340" dur="0.8s"
                                    begin="0.1s" fill="freeze" />
                            </rect>
                            <rect x="143" y="318" width="28" height="46" rx="4"
                                fill="url(#chartGrad)">
                                <animate attributeName="height" from="0" to="46" dur="0.8s"
                                    begin="0.2s" fill="freeze" />
                                <animate attributeName="y" from="364" to="318" dur="0.8s"
                                    begin="0.2s" fill="freeze" />
                            </rect>
                            <rect x="186" y="330" width="28" height="34" rx="4"
                                fill="url(#chartGrad)">
                                <animate attributeName="height" from="0" to="34" dur="0.8s"
                                    begin="0.3s" fill="freeze" />
                                <animate attributeName="y" from="364" to="330" dur="0.8s"
                                    begin="0.3s" fill="freeze" />
                            </rect>
                            {{-- Tallest bar highlight --}}
                            <rect x="229" y="315" width="28" height="49" rx="4" fill="#61b20b">
                                <animate attributeName="height" from="0" to="49" dur="0.8s"
                                    begin="0.4s" fill="freeze" />
                                <animate attributeName="y" from="364" to="315" dur="0.8s"
                                    begin="0.4s" fill="freeze" />
                            </rect>
                            <rect x="272" y="322" width="28" height="42" rx="4"
                                fill="url(#chartGrad)">
                                <animate attributeName="height" from="0" to="42" dur="0.8s"
                                    begin="0.5s" fill="freeze" />
                                <animate attributeName="y" from="364" to="322" dur="0.8s"
                                    begin="0.5s" fill="freeze" />
                            </rect>
                            <rect x="315" y="335" width="28" height="29" rx="4"
                                fill="url(#chartGrad)">
                                <animate attributeName="height" from="0" to="29" dur="0.8s"
                                    begin="0.6s" fill="freeze" />
                                <animate attributeName="y" from="364" to="335" dur="0.8s"
                                    begin="0.6s" fill="freeze" />
                            </rect>
                            <rect x="358" y="348" width="28" height="16" rx="4"
                                fill="url(#chartGrad)">
                                <animate attributeName="height" from="0" to="16" dur="0.8s"
                                    begin="0.7s" fill="freeze" />
                                <animate attributeName="y" from="364" to="348" dur="0.8s"
                                    begin="0.7s" fill="freeze" />
                            </rect>

                            {{-- Day labels --}}
                            <text x="114" y="378" text-anchor="middle" fill="rgba(255,255,255,0.4)" font-size="9"
                                font-family="Manrope,sans-serif">M</text>
                            <text x="157" y="378" text-anchor="middle" fill="rgba(255,255,255,0.4)" font-size="9"
                                font-family="Manrope,sans-serif">T</text>
                            <text x="200" y="378" text-anchor="middle" fill="rgba(255,255,255,0.4)" font-size="9"
                                font-family="Manrope,sans-serif">W</text>
                            <text x="243" y="378" text-anchor="middle" fill="#61b20b" font-size="9"
                                font-family="Manrope,sans-serif" font-weight="700">T</text>
                            <text x="286" y="378" text-anchor="middle" fill="rgba(255,255,255,0.4)" font-size="9"
                                font-family="Manrope,sans-serif">F</text>
                            <text x="329" y="378" text-anchor="middle" fill="rgba(255,255,255,0.4)" font-size="9"
                                font-family="Manrope,sans-serif">S</text>
                            <text x="372" y="378" text-anchor="middle" fill="rgba(255,255,255,0.4)" font-size="9"
                                font-family="Manrope,sans-serif">S</text>

                            {{-- ── Recent Transactions Label ── --}}
                            <text x="100" y="402" fill="rgba(255,255,255,0.75)" font-size="12"
                                font-family="Manrope,sans-serif" font-weight="700">Recent</text>

                            {{-- Transaction 1: Lunch --}}
                            <rect x="84" y="410" width="312" height="46" rx="14"
                                fill="rgba(255,255,255,0.07)" />
                            <circle cx="110" cy="433" r="14" fill="rgba(97,178,11,0.25)" />
                            {{-- Fork & knife icon --}}
                            <g transform="translate(103,422)">
                                <line x1="4" y1="2" x2="4" y2="10" stroke="#61b20b"
                                    stroke-width="1.6" stroke-linecap="round" />
                                <path d="M2 2C2 2 2 6 4 8C6 10 6 8 6 8V2" fill="none" stroke="#61b20b"
                                    stroke-width="1.6" stroke-linecap="round" />
                                <line x1="10" y1="2" x2="10" y2="20" stroke="#61b20b"
                                    stroke-width="1.6" stroke-linecap="round" />
                            </g>
                            <text x="134" y="429" fill="white" font-size="12" font-family="Manrope,sans-serif"
                                font-weight="700">Lunch</text>
                            <text x="134" y="443" fill="rgba(255,255,255,0.4)" font-size="10"
                                font-family="Manrope,sans-serif">Food · Today</text>
                            <text x="381" y="434" text-anchor="end" fill="#ff6b6b" font-size="12"
                                font-family="Manrope,sans-serif" font-weight="800">-₹12.50</text>

                            {{-- Transaction 2: Uber --}}
                            <rect x="84" y="463" width="312" height="46" rx="14"
                                fill="rgba(255,255,255,0.07)" />
                            <circle cx="110" cy="486" r="14" fill="rgba(1,59,143,0.4)" />
                            {{-- Car icon --}}
                            <g transform="translate(99,477)">
                                <path d="M5 11L7 5h8l2 6" fill="none" stroke="white" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <rect x="2" y="11" width="18" height="7" rx="2" fill="none"
                                    stroke="white" stroke-width="1.6" />
                                <circle cx="6" cy="20" r="1.5" fill="white" />
                                <circle cx="16" cy="20" r="1.5" fill="white" />
                            </g>
                            <text x="134" y="482" fill="white" font-size="12" font-family="Manrope,sans-serif"
                                font-weight="700">Uber</text>
                            <text x="134" y="496" fill="rgba(255,255,255,0.4)" font-size="10"
                                font-family="Manrope,sans-serif">Travel · Yesterday</text>
                            <text x="381" y="487" text-anchor="end" fill="#ff6b6b" font-size="12"
                                font-family="Manrope,sans-serif" font-weight="800">-₹8.00</text>

                            {{-- Transaction 3: Salary --}}
                            <rect x="84" y="516" width="312" height="46" rx="14"
                                fill="rgba(255,255,255,0.07)" />
                            <circle cx="110" cy="539" r="14" fill="rgba(97,178,11,0.3)" />
                            {{-- Wallet/savings icon --}}
                            <g transform="translate(99,528)">
                                <rect x="2" y="5" width="18" height="14" rx="2" fill="none"
                                    stroke="#61b20b" stroke-width="1.6" />
                                <path d="M16 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" fill="#61b20b" />
                                <path d="M2 9h18" stroke="#61b20b" stroke-width="1.6" />
                                <path d="M6 2l-2 3" stroke="#61b20b" stroke-width="1.6" stroke-linecap="round" />
                                <path d="M12 2v3" stroke="#61b20b" stroke-width="1.6" stroke-linecap="round" />
                                <path d="M18 2l2 3" stroke="#61b20b" stroke-width="1.6" stroke-linecap="round" />
                            </g>
                            <text x="134" y="535" fill="white" font-size="12" font-family="Manrope,sans-serif"
                                font-weight="700">Salary</text>
                            <text x="134" y="549" fill="rgba(255,255,255,0.4)" font-size="10"
                                font-family="Manrope,sans-serif">Income · Mon</text>
                            <text x="381" y="540" text-anchor="end" fill="#61b20b" font-size="12"
                                font-family="Manrope,sans-serif" font-weight="800">+₹2,400</text>
                        </svg>

                        {{-- Floating Card: Saved --}}
                        <div class="absolute -bottom-6 -left-4 bg-white rounded-2xl shadow-2xl border border-slate-100 px-5 py-4 flex items-center gap-3 z-20 animate-bounce"
                            style="animation-duration:3s">
                            <div
                                class="w-11 h-11 bg-accent/10 rounded-xl flex items-center justify-center flex-shrink-0 text-accent">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                                    <polyline points="17 6 23 6 23 12" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400 font-semibold">Saved this month</p>
                                <p class="text-xl font-black text-primary">₹1,240</p>
                            </div>
                        </div>

                        {{-- Floating Card: Budget --}}
                        <div class="absolute top-12 -right-4 bg-white rounded-2xl shadow-2xl border border-slate-100 px-5 py-4 z-20"
                            style="animation:floatY 4s ease-in-out infinite">
                            <p class="text-[11px] text-slate-400 font-semibold mb-1">Budget Used</p>
                            <div class="flex items-center gap-3">
                                <div class="w-24 bg-slate-100 h-2 rounded-full overflow-hidden">
                                    <div class="bg-accent h-full rounded-full" style="width:68%"></div>
                                </div>
                                <span class="text-sm font-black text-primary">68%</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         STATS BAR
    ═══════════════════════════════════════════════ --}}
    <section class="bg-primary py-10">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach ([['50K+', 'Active Users'], ['₹2M+', 'Expenses Logged'], ['4.9 ★', 'App Rating'], ['100%', 'Privacy Focused']] as $stat)
                    <div class="fade-up">
                        <p class="text-3xl font-black text-white mb-1">{{ $stat[0] }}</p>
                        <p class="text-sm text-white/60 font-semibold">{{ $stat[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         HOW IT WORKS
    ═══════════════════════════════════════════════ --}}
    <section class="w-full bg-white py-24 px-4 overflow-hidden" id="how-it-works">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20 fade-up">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-primary/5 text-primary font-bold text-xs mb-4 uppercase tracking-widest">Workflow</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">How Spenny Works</h2>
                <p class="text-slate-500 mt-4 max-w-xl mx-auto">Three simple steps to complete financial clarity.</p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <div class="absolute top-16 left-0 w-full h-0.5 dashed-line hidden md:block"></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 relative z-10">
                    @php
                        $steps = [
                            [
                                'svg' =>
                                    '<path d="M20 5H4c-1.1 0-1.99.9-1.99 2L2 17c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-9 3h2v2h-2V8zm0 3h2v2h-2v-2zM8 8h2v2H8V8zm0 3h2v2H8v-2zm-1 2H5v-2h2v2zm0-3H5V8h2v2zm9 7H8v-2h8v2zm0-4h-2v-2h2v2zm0-3h-2V8h2v2zm3 7h-2v-2h2v2zm0-4h-2v-2h2v2z"/>',
                                'num' => '1',
                                'title' => 'Log',
                                'desc' => 'Instantly record daily spending with our intuitive, manual entry interface.',
                            ],
                            [
                                'svg' =>
                                    '<path d="M11 2v20c-5.07-.5-9-4.79-9-10s3.93-9.5 9-10zm2.03 0v8.99H22c-.47-4.74-4.24-8.52-8.97-8.99zm0 11.01V22c4.74-.47 8.5-4.25 8.97-8.99h-8.97z"/>',
                                'num' => '2',
                                'title' => 'Analyse',
                                'desc' => 'Divide bills and see spending breakdowns categorised beautifully.',
                            ],
                            [
                                'svg' =>
                                    '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>',
                                'num' => '3',
                                'title' => 'Settle',
                                'desc' => 'Track balances and clear debts — without any bank integration.',
                            ],
                        ];
                    @endphp
                    @foreach ($steps as $step)
                        <div class="flex flex-col items-center text-center fade-up">
                            <div class="relative mb-8">
                                <div
                                    class="absolute -top-4 left-1/2 -translate-x-1/2 z-20 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm shadow-lg shadow-accent/30">
                                    {{ $step['num'] }}</div>
                                <div
                                    class="w-32 h-32 rounded-full bg-bg-light flex items-center justify-center border-4 border-white relative transition-transform hover:scale-110 duration-300 shadow-md">
                                    <svg class="w-14 h-14 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                        {!! $step['svg'] !!}
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-2xl font-extrabold text-primary mb-2">{{ $step['title'] }}</h3>
                            <p class="text-slate-500 max-w-[240px] mx-auto leading-relaxed text-sm">
                                {{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         CORE FEATURES (3 highlight cards)
    ═══════════════════════════════════════════════ --}}
    <section class="w-full bg-bg-light py-24 px-4 border-y border-slate-100" id="features">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-up">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-primary/5 text-primary font-bold text-xs mb-4 uppercase tracking-widest">Why
                    Spenny</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">Built Around <span
                        class="text-gradient">You</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $builtAround = [
                        [
                            'svg' =>
                                '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                            'color' => '#013b8f',
                            'title' => 'Total Privacy',
                            'desc' =>
                                "Your data stays with you. We don't require bank syncing or access to your accounts. Everything is logged manually for maximum security.",
                        ],
                        [
                            'svg' =>
                                '<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><polyline points="12 6 12 12 16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><line x1="12" y1="2" x2="12" y2="4" stroke="currentColor" stroke-width="2"/><line x1="12" y1="20" x2="12" y2="22" stroke="currentColor" stroke-width="2"/><line x1="2" y1="12" x2="4" y2="12" stroke="currentColor" stroke-width="2"/><line x1="20" y1="12" x2="22" y2="12" stroke="currentColor" stroke-width="2"/>',
                            'color' => '#61b20b',
                            'title' => '5-Second Logging',
                            'desc' =>
                                'Speed is our priority. Enter an expense in just a few taps with our streamlined interface designed for fast manual entry on the go.',
                        ],
                        [
                            'svg' =>
                                '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2"/><path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2"/>',
                            'color' => '#013b8f',
                            'title' => 'Easy Bill Splitting',
                            'desc' =>
                                'No more awkward math. Share expenses with friends and track who owes what in real-time without complex spreadsheets.',
                        ],
                    ];
                @endphp
                @foreach ($builtAround as $item)
                    <div
                        class="bg-white p-10 rounded-2xl shadow-sm border border-slate-100 flex flex-col items-start card-hover fade-up">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6"
                            style="background:{{ $item['color'] }}18">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                style="color:{{ $item['color'] }}">
                                {!! $item['svg'] !!}
                            </svg>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <h3 class="text-xl font-extrabold text-slate-900">{{ $item['title'] }}</h3>
                            <svg class="h-4 w-4 text-accent" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                        </div>
                        <p class="text-slate-500 leading-relaxed text-sm">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         MISSION
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 bg-white" id="mission">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Left: Text --}}
                <div class="fade-up">
                    <span
                        class="inline-block py-1 px-4 rounded-full bg-primary/5 text-primary font-bold text-xs mb-6 uppercase tracking-widest">Our
                        Mission</span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-primary mb-6 leading-tight">
                        Financial freedom
                        <span class="text-gradient"> for everyone.</span>
                    </h2>
                    <p class="text-slate-500 leading-relaxed mb-4">
                        Managing money shouldn't be complicated. Spenny helps you take back full control — log every
                        expense in seconds, identify funds you aren't using, and redirect them where they matter most:
                        your savings.
                    </p>
                    <p class="text-slate-500 leading-relaxed mb-8">
                        No bank links, no automatic sync, no privacy compromise — just you and a smarter way to grow
                        your wealth, one decision at a time.
                    </p>

                    {{-- Feature pills --}}
                    <div class="flex flex-col gap-3 mb-10">
                        <div class="flex items-center gap-3">
                            <span
                                class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="#61b20b" stroke-width="2.2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="5" width="20" height="14" rx="2" />
                                    <path d="M2 10h20" />
                                    <circle cx="16" cy="14" r="1.5" fill="#61b20b" stroke="none" />
                                </svg>
                            </span>
                            <p class="text-sm font-semibold text-slate-700">Manage your expenses — log and categorise
                                every rupee spent effortlessly</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span
                                class="w-8 h-8 rounded-full bg-primary/8 flex items-center justify-center flex-shrink-0">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="#013b8f" stroke-width="2.2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2L4 6v6c0 5 3.5 9.7 8 11 4.5-1.3 8-6 8-11V6z" />
                                    <path d="M9 12l2 2 4-4" stroke="#61b20b" stroke-width="2.2" />
                                </svg>
                            </span>
                            <p class="text-sm font-semibold text-slate-700">Control unused funds — spot idle money and
                                redirect it with one tap</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span
                                class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="#61b20b" stroke-width="2.2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="3,17 9,11 13,14 20,6" />
                                    <polyline points="16,6 20,6 20,10" />
                                </svg>
                            </span>
                            <p class="text-sm font-semibold text-slate-700">Increase savings — watch your savings grow
                                with smart weekly insights</p>
                        </div>
                    </div>

                    {{-- Stats row --}}
                    <div class="flex items-center gap-8">
                        <div>
                            <p class="text-3xl font-black text-primary">50K+</p>
                            <p class="text-sm text-slate-400 font-semibold mt-0.5">Active Users</p>
                        </div>
                        <div class="w-px h-12 bg-slate-200"></div>
                        <div>
                            <p class="text-3xl font-black text-accent">₹2M+</p>
                            <p class="text-sm text-slate-400 font-semibold mt-0.5">Logged Monthly</p>
                        </div>
                        <div class="w-px h-12 bg-slate-200"></div>
                        <div>
                            <p class="text-3xl font-black text-primary">4.9★</p>
                            <p class="text-sm text-slate-400 font-semibold mt-0.5">App Rating</p>
                        </div>
                    </div>
                </div>

                {{-- Right: SVG Illustration --}}
                <div class="relative fade-up" style="transition-delay:0.15s">

                    {{-- SVG Illustration: Financial Freedom --}}
                    <svg viewBox="0 0 520 480" xmlns="http://www.w3.org/2000/svg" class="w-full drop-shadow-xl"
                        style="border-radius:32px">
                        <defs>
                            <linearGradient id="missionBg" x1="0%" y1="0%" x2="100%"
                                y2="100%">
                                <stop offset="0%" stop-color="#013b8f" />
                                <stop offset="100%" stop-color="#0250bf" />
                            </linearGradient>
                            <linearGradient id="savingsBar" x1="0%" y1="0%" x2="100%"
                                y2="0%">
                                <stop offset="0%" stop-color="#61b20b" />
                                <stop offset="100%" stop-color="#8fdc2c" />
                            </linearGradient>
                            <linearGradient id="chartArea" x1="0%" y1="0%" x2="0%"
                                y2="100%">
                                <stop offset="0%" stop-color="#61b20b" stop-opacity="0.25" />
                                <stop offset="100%" stop-color="#61b20b" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="mCardGrad" x1="0%" y1="0%" x2="100%"
                                y2="100%">
                                <stop offset="0%" stop-color="#ffffff" />
                                <stop offset="100%" stop-color="#f0f4ff" />
                            </linearGradient>
                            <filter id="mCardShadow" x="-10%" y="-10%" width="120%" height="130%">
                                <feDropShadow dx="0" dy="8" stdDeviation="14" flood-color="#013b8f"
                                    flood-opacity="0.12" />
                            </filter>
                            <filter id="mGlowGreen">
                                <feDropShadow dx="0" dy="0" stdDeviation="8" flood-color="#61b20b"
                                    flood-opacity="0.4" />
                            </filter>
                        </defs>

                        {{-- ── Background rounded card ── --}}
                        <rect x="10" y="10" width="500" height="460" rx="32" fill="url(#missionBg)" />

                        {{-- Subtle grid lines --}}
                        <line x1="10" y1="130" x2="510" y2="130"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />
                        <line x1="10" y1="250" x2="510" y2="250"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />
                        <line x1="10" y1="370" x2="510" y2="370"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />
                        <line x1="130" y1="10" x2="130" y2="470"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />
                        <line x1="260" y1="10" x2="260" y2="470"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />
                        <line x1="390" y1="10" x2="390" y2="470"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />

                        {{-- ── SECTION HEADER ── --}}
                        <text x="36" y="54" fill="rgba(255,255,255,0.5)" font-size="11"
                            font-family="Manrope,sans-serif" font-weight="600">FINANCIAL OVERVIEW</text>
                        <text x="36" y="78" fill="#ffffff" font-size="20" font-family="Manrope,sans-serif"
                            font-weight="800">Total Savings Growth</text>

                        {{-- Trend badge --}}
                        <rect x="352" y="58" width="118" height="28" rx="14"
                            fill="rgba(97,178,11,0.2)" />
                        <text x="411" y="76" text-anchor="middle" fill="#8fdc2c" font-size="12"
                            font-family="Manrope,sans-serif" font-weight="700">▲ +28.4% this year</text>

                        {{-- ── AREA CHART ── --}}
                        {{-- Chart filled area --}}
                        <polygon points="36,320 100,290 170,265 240,230 310,195 380,155 460,115 460,340 36,340"
                            fill="url(#chartArea)" />
                        {{-- Chart line --}}
                        <polyline points="36,320 100,290 170,265 240,230 310,195 380,155 460,115" fill="none"
                            stroke="#61b20b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />

                        {{-- Chart dots --}}
                        <circle cx="36" cy="320" r="4" fill="#61b20b" filter="url(#mGlowGreen)" />
                        <circle cx="100" cy="290" r="4" fill="#61b20b" filter="url(#mGlowGreen)" />
                        <circle cx="170" cy="265" r="4" fill="#61b20b" filter="url(#mGlowGreen)" />
                        <circle cx="240" cy="230" r="4" fill="#61b20b" filter="url(#mGlowGreen)" />
                        <circle cx="310" cy="195" r="4" fill="#61b20b" filter="url(#mGlowGreen)" />
                        <circle cx="380" cy="155" r="4" fill="#61b20b" filter="url(#mGlowGreen)" />
                        {{-- Highlighted last point --}}
                        <circle cx="460" cy="115" r="7" fill="#8fdc2c" filter="url(#mGlowGreen)" />
                        <circle cx="460" cy="115" r="4" fill="white" />

                        {{-- X-axis month labels --}}
                        <text x="36" y="358" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="10"
                            font-family="Manrope,sans-serif">Jul</text>
                        <text x="100" y="358" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="10"
                            font-family="Manrope,sans-serif">Aug</text>
                        <text x="170" y="358" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="10"
                            font-family="Manrope,sans-serif">Sep</text>
                        <text x="240" y="358" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="10"
                            font-family="Manrope,sans-serif">Oct</text>
                        <text x="310" y="358" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="10"
                            font-family="Manrope,sans-serif">Nov</text>
                        <text x="380" y="358" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="10"
                            font-family="Manrope,sans-serif">Dec</text>
                        <text x="460" y="358" text-anchor="middle" fill="#8fdc2c" font-size="10"
                            font-family="Manrope,sans-serif" font-weight="700">Jan</text>

                        {{-- Dashed vertical line at latest point --}}
                        <line x1="460" y1="120" x2="460" y2="340"
                            stroke="rgba(97,178,11,0.3)" stroke-width="1.5" stroke-dasharray="4 4" />

                        {{-- Tooltip bubble at peak --}}
                        <rect x="384" y="80" width="108" height="32" rx="10"
                            fill="rgba(97,178,11,0.9)" />
                        <polygon points="433,112 440,126 447,112" fill="rgba(97,178,11,0.9)" />
                        <text x="438" y="100" text-anchor="middle" fill="white" font-size="13"
                            font-family="Manrope,sans-serif" font-weight="800">₹48,200</text>

                        {{-- ── BOTTOM 3 STAT CARDS ── --}}

                        {{-- Card 1: Manage Expenses --}}
                        <rect x="20" y="374" width="152" height="80" rx="18" fill="url(#mCardGrad)"
                            filter="url(#mCardShadow)" />
                        {{-- Wallet icon --}}
                        <g transform="translate(36,388)">
                            <rect x="0" y="4" width="20" height="14" rx="3" fill="none"
                                stroke="#013b8f" stroke-width="1.8" />
                            <path d="M0 9h20" stroke="#013b8f" stroke-width="1.6" />
                            <circle cx="15" cy="13" r="1.5" fill="#013b8f" />
                            <path d="M4 0l-2 4" stroke="#013b8f" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M10 0v4" stroke="#013b8f" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M16 0l2 4" stroke="#013b8f" stroke-width="1.5" stroke-linecap="round" />
                        </g>
                        <text x="64" y="397" fill="#013b8f" font-size="9" font-family="Manrope,sans-serif"
                            font-weight="700">EXPENSES</text>
                        <text x="36" y="425" fill="#013b8f" font-size="17" font-family="Manrope,sans-serif"
                            font-weight="900">₹12,400</text>
                        <text x="36" y="442" fill="#64748b" font-size="9" font-family="Manrope,sans-serif">Managed
                            this month</text>
                        {{-- Mini green bar --}}
                        <rect x="36" y="448" width="120" height="4" rx="2" fill="#f1f5f9" />
                        <rect x="36" y="448" width="74" height="4" rx="2" fill="#61b20b">
                            <animate attributeName="width" from="0" to="74" dur="1.2s"
                                begin="0.5s" fill="freeze" />
                        </rect>

                        {{-- Card 2: Control Unused --}}
                        <rect x="184" y="374" width="152" height="80" rx="18" fill="url(#mCardGrad)"
                            filter="url(#mCardShadow)" />
                        {{-- Lock/shield icon --}}
                        <g transform="translate(201,388)">
                            <path d="M9 2L3 5v5c0 4 3 7.8 6 9 3-1.2 6-5 6-9V5z" fill="none" stroke="#013b8f"
                                stroke-width="1.8" stroke-linejoin="round" />
                            <path d="M6 10l2 2 4-4" stroke="#61b20b" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <text x="228" y="397" fill="#013b8f" font-size="9" font-family="Manrope,sans-serif"
                            font-weight="700">UNUSED FUNDS</text>
                        <text x="200" y="425" fill="#013b8f" font-size="17" font-family="Manrope,sans-serif"
                            font-weight="900">₹4,200</text>
                        <text x="200" y="442" fill="#64748b" font-size="9"
                            font-family="Manrope,sans-serif">Redirected to savings</text>
                        {{-- Circular arc indicator --}}
                        <circle cx="316" cy="421" r="14" fill="none" stroke="#f1f5f9"
                            stroke-width="4" />
                        <circle cx="316" cy="421" r="14" fill="none" stroke="#61b20b"
                            stroke-width="4" stroke-dasharray="54" stroke-dashoffset="16" stroke-linecap="round"
                            transform="rotate(-90 316 421)" />
                        <text x="316" y="425" text-anchor="middle" fill="#013b8f" font-size="8"
                            font-family="Manrope,sans-serif" font-weight="800">75%</text>

                        {{-- Card 3: Increase Savings --}}
                        <rect x="348" y="374" width="152" height="80" rx="18" fill="url(#mCardGrad)"
                            filter="url(#mCardShadow)" />
                        {{-- Piggy bank / trending up icon --}}
                        <g transform="translate(365,388)">
                            <polyline points="2,16 7,10 11,13 16,5 20,2" fill="none" stroke="#61b20b"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <polyline points="15,2 20,2 20,7" fill="none" stroke="#61b20b" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <text x="396" y="397" fill="#013b8f" font-size="9" font-family="Manrope,sans-serif"
                            font-weight="700">SAVINGS GOAL</text>
                        <text x="364" y="425" fill="#013b8f" font-size="17" font-family="Manrope,sans-serif"
                            font-weight="900">₹48,200</text>
                        <text x="364" y="442" fill="#64748b" font-size="9" font-family="Manrope,sans-serif">↑ 28%
                            increase YoY</text>
                        {{-- Mini sparkline bars --}}
                        <rect x="364" y="452" width="8" height="8" rx="2" fill="#61b20b"
                            opacity="0.4" />
                        <rect x="376" y="448" width="8" height="12" rx="2" fill="#61b20b"
                            opacity="0.6" />
                        <rect x="388" y="444" width="8" height="16" rx="2" fill="#61b20b"
                            opacity="0.8" />
                        <rect x="400" y="440" width="8" height="20" rx="2" fill="#61b20b" />
                        <rect x="412" y="443" width="8" height="17" rx="2" fill="#61b20b"
                            opacity="0.7" />
                    </svg>

                    {{-- Floating badge --}}
                    <div
                        class="absolute top-4 left-4 z-10 bg-white rounded-full shadow-xl px-4 py-2 flex items-center gap-2 border border-slate-100">
                        <span class="w-2 h-2 rounded-full bg-accent inline-block animate-pulse"></span>
                        <span class="text-xs font-bold text-primary">Budget On Track ✓</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         POWERFUL FEATURES GRID
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 bg-bg-light">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-up">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-primary/5 text-primary font-bold text-xs mb-4 uppercase tracking-widest">Features</span>
                <h2 class="text-4xl font-extrabold text-primary mb-4">Powerful Features</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Everything you need to manage your money like a pro, all
                    in
                    one place.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $features = [
                        [
                            'svg' =>
                                '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="#013b8f"/><path d="M12 17.77l6.18 3.25-1.18-6.88 5-4.87-6.91-1.01L12 2V17.77z" fill="#1a6ee0"/>',
                            'title' => 'Smart Budgeting',
                            'desc' =>
                                'Automated budget creation based on your historical spending habits. Adjusts dynamically as your life changes.',
                        ],
                        [
                            'svg' =>
                                '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8a2.5 2.5 0 0 1 2.5 2.5c0 2.5-2.5 4.5-2.5 4.5s-2.5-2-2.5-4.5A2.5 2.5 0 0 1 12 8z" fill="#61b20b"/>',
                            'title' => 'Fraud Protection',
                            'desc' =>
                                'Real-time monitoring and instant alerts for suspicious activity. Your data is protected by AES-256 encryption.',
                        ],
                        [
                            'svg' =>
                                '<line x1="3" y1="21" x2="21" y2="21" stroke="currentColor" stroke-width="2"/><line x1="3" y1="7" x2="21" y2="7" stroke="currentColor" stroke-width="2"/><path d="M5 21V7" stroke="currentColor" stroke-width="2"/><path d="M9 21V7" stroke="currentColor" stroke-width="2"/><path d="M15 21V7" stroke="currentColor" stroke-width="2"/><path d="M19 21V7" stroke="currentColor" stroke-width="2"/><path d="M12 3L2 7h20L12 3z" stroke="currentColor" stroke-width="2"/>',
                            'title' => 'Unified View',
                            'desc' =>
                                'See your net worth, investments, savings, and debts in one beautiful, easy-to-read dashboard.',
                        ],
                        [
                            'svg' =>
                                '<line x1="12" y1="20" x2="12" y2="10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><line x1="18" y1="20" x2="18" y2="4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><line x1="6" y1="20" x2="6" y2="16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
                            'title' => 'Visual Analytics',
                            'desc' =>
                                'Interactive charts and breakdowns to understand where your money goes — at a glance.',
                        ],
                        [
                            'svg' =>
                                '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2"/><path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2"/>',
                            'title' => 'Split Bills',
                            'desc' =>
                                'Easily split expenses with friends, track who owes what, and settle up in seconds.',
                        ],
                        [
                            'svg' =>
                                '<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                            'title' => 'Smart Alerts',
                            'desc' =>
                                'Get notified when you\'re close to your budget limit or when unusual spending is detected.',
                        ],
                    ];
                @endphp

                @foreach ($features as $f)
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 card-hover fade-up">
                        <div
                            class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mb-5 text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                {!! $f['svg'] !!}
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-3">{{ $f['title'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         TESTIMONIALS
    ═══════════════════════════════════════════════ --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-up">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-primary/5 text-primary font-bold text-xs mb-4 uppercase tracking-widest">Testimonials</span>
                <h2 class="text-4xl font-extrabold text-primary mb-4">Loved by Thousands</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Hear from our community about how Spenny is transforming
                    their financial futures.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([['"Spenny has completely changed how I look at my monthly expenses. The manual logging is so fast I never skip it!"', 'Sarah Jenkins', 'Marketing Director', '#4f46e5'], ['"I finally feel like I\'m in control. The interface is so clean and the insights are actually actionable."', 'Marcus Chen', 'Software Engineer', '#0891b2'], ['"The bill splitting feature saved my friendships. No more awkward IOUs — everything is tracked automatically."', 'Elena Rodriguez', 'Small Business Owner', '#059669']] as [$quote, $name, $role, $color])
                    <div class="p-8 rounded-3xl border border-slate-100 bg-bg-light card-hover fade-up">
                        <div class="flex gap-1 mb-5">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-3.5 w-3.5 text-accent" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-slate-600 italic mb-6 leading-relaxed text-sm">{{ $quote }}</p>
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full flex items-center justify-center text-white font-bold text-sm"
                                style="background:{{ $color }}">
                                {{ substr($name, 0, 1) }}
                            </div>
                            <div>
                                <p class="font-bold text-primary text-sm">{{ $name }}</p>
                                <p class="text-xs text-slate-400">{{ $role }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         FAQ
    ═══════════════════════════════════════════════ --}}
    <section class="py-10 bg-bg-light" id="faq">
        <div class="max-w-5xl mx-auto px-6">

            {{-- Header --}}
            <div class="text-center mb-16 fade-up">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-primary/5 text-primary font-bold text-xs mb-4 uppercase tracking-widest">FAQ</span>
                <h2 class="text-4xl font-extrabold text-primary mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-500 max-w-xl mx-auto">Everything you need to know about Spenny — your
                    privacy-first personal finance companion.</p>
            </div>

            {{-- Two column FAQ grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 fade-up">

                @php
                    $faqs = [
                        [
                            'q' => 'Do I need to link my bank account or UPI?',
                            'a' =>
                                'No — and that\'s the whole point. Spenny is 100% manual. You log each transaction yourself, which means your bank credentials, UPI PIN, and account details never leave your device. No third-party sync, no data leaks.',
                            'open' => true,
                        ],
                        [
                            'q' => 'How do I log an expense in Spenny?',
                            'a' =>
                                'Simply tap the "+" button, enter the amount in ₹, select a category (Food, Travel, Bills, etc.), add an optional note, and save. It takes under 5 seconds. You can also set recurring expenses so they log themselves automatically.',
                            'open' => false,
                        ],
                        [
                            'q' => 'Can I split bills with friends or family?',
                            'a' =>
                                'Yes! The Split Bills feature lets you divide any expense among a group. Each person\'s share is tracked inside Spenny and you can mark amounts as "settled" once paid. Perfect for flatmates, trips, and group dinners.',
                            'open' => false,
                        ],
                        [
                            'q' => 'What expense categories does Spenny support?',
                            'a' =>
                                'Spenny comes with 15+ built-in categories: Food & Dining, Travel, Shopping, Bills & Utilities, Health, Entertainment, Education, EMI / Loans, Groceries, Fuel, Rent, and more. You can also create fully custom categories.',
                            'open' => false,
                        ],
                        [
                            'q' => 'How does the budget and savings goal feature work?',
                            'a' =>
                                'Set a monthly budget per category (e.g., ₹5,000 for Food). Spenny tracks your spending in real time and alerts you when you\'re nearing the limit. Savings goals let you set a target (e.g., ₹1,00,000 for a phone) and Spenny shows your weekly progress.',
                            'open' => false,
                        ],
                        [
                            'q' => 'Is my data private and secure?',
                            'a' =>
                                'Absolutely. All data is stored locally on your account and encrypted in transit. We never sell, share, or access your financial records. There is no advertising model — Spenny earns only through its optional premium plan.',
                            'open' => false,
                        ],
                        [
                            'q' => 'Can I export my expense data?',
                            'a' =>
                                'Yes. Premium users can export a full expense report as CSV or PDF at any time — monthly, quarterly, or custom date range. Ideal for self-employed individuals filing ITR or tracking GST-eligible purchases.',
                            'open' => false,
                        ],
                        [
                            'q' => 'Is there a free plan? What\'s included?',
                            'a' =>
                                'Yes! The free plan includes unlimited manual expense logging, up to 5 custom categories, monthly summaries, and bill splitting for up to 3 people — forever free. Premium unlocks analytics, exports, unlimited categories, smart alerts, and savings goals.',
                            'open' => false,
                        ],
                    ];
                @endphp

                @foreach ($faqs as $faq)
                    <details
                        class="group border border-slate-200 rounded-2xl bg-white hover:border-primary/30 hover:shadow-md transition-all duration-300 cursor-pointer overflow-hidden"
                        {{ $faq['open'] ? 'open' : '' }}>

                        <summary
                            class="flex justify-between items-center font-bold text-primary text-sm leading-snug list-none px-6 py-5 gap-4">
                            <span>{{ $faq['q'] }}</span>
                            {{-- SVG Chevron — rotates when open --}}
                            <span
                                class="flex-shrink-0 w-7 h-7 rounded-full bg-primary/5 flex items-center justify-center faq-icon transition-transform duration-300">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="#013b8f" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </span>
                        </summary>

                        <div class="px-6 pb-5 border-t border-slate-100 pt-4">
                            <p class="text-slate-500 leading-relaxed text-sm">{{ $faq['a'] }}</p>
                        </div>
                    </details>
                @endforeach

            </div>

            {{-- Bottom helper text --}}
            <p class="text-center text-slate-400 text-sm mt-10 fade-up">
                Still have questions?
                <a href="mailto:support@spenny.app" class="text-primary font-bold hover:underline">Contact our
                    support team →</a>
            </p>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         CTA BANNER
    ═══════════════════════════════════════════════ --}}
    {{-- <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="cta-bg rounded-[2.5rem] p-12 md:p-20 text-center relative overflow-hidden fade-up">
    <div class="absolute top-0 right-0 w-72 h-72 bg-white/5 rounded-full -mr-24 -mt-24 pointer-events-none">
    </div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-accent/10 rounded-full -ml-24 -mb-24 pointer-events-none">
    </div>

    <div class="relative z-10">
        <span
            class="inline-block py-1 px-4 rounded-full bg-white/10 text-white font-bold text-xs mb-6 uppercase tracking-widest">Get
            Started Today</span>
        <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
            Ready to take <br /><span class="text-accent">control</span> of your money?
        </h2>
        <p class="text-xl text-white/70 mb-12 max-w-2xl mx-auto">
            Join 50,000+ others who use Spenny to master their finances. It takes less than 2 minutes to get
            started — for free.
        </p>
        @guest
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block px-12 py-5 bg-accent hover:bg-accent-dark text-white text-xl font-extrabold rounded-full shadow-2xl shadow-accent/30 transition-all hover:-translate-y-1 active:translate-y-0">
                    Create Free Account →
                </a>
            @endif
        @else
            <a href="{{ url('/admin/dashboard') }}"
                class="inline-block px-12 py-5 bg-accent hover:bg-accent-dark text-white text-xl font-extrabold rounded-full shadow-2xl shadow-accent/30 transition-all hover:-translate-y-1 active:translate-y-0">
                Go to Dashboard →
            </a>
        @endguest
    </div>
    </div>
    </div>
    </section> --}}

    {{-- ═══════════════════════════════════════════════
         FOOTER
    ═══════════════════════════════════════════════ --}}
    <footer class="py-10 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                {{-- Logo --}}
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Spenny Logo" class="h-9 w-auto">
                </div>

                {{-- Copyright --}}
                <p class="text-slate-400 text-sm">
                    © {{ date('Y') }} Spenny Technologies. All rights reserved.
                </p>

                {{-- Links --}}
                <div class="flex gap-6">
                    <a class="text-slate-400 hover:text-primary font-semibold text-sm transition-colors"
                        href="{{ route('privacy') }}">Privacy</a>
                    <a class="text-slate-400 hover:text-primary font-semibold text-sm transition-colors"
                        href="{{ route('terms') }}">Terms</a>
                    <a class="text-slate-400 hover:text-primary font-semibold text-sm transition-colors"
                        href="{{ route('support') }}">Support</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- ═══════════════════════════════════════════════
         SCRIPTS — Scroll Animation
    ═══════════════════════════════════════════════ --}}
    <script>
        // Fade-up on scroll
        const fadeEls = document.querySelectorAll('.fade-up');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(el => {
                if (el.isIntersecting) {
                    el.target.classList.add('visible');
                    observer.unobserve(el.target);
                }
            });
        }, {
            threshold: 0.12
        });
        fadeEls.forEach(el => observer.observe(el));

        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', e => {
                const target = document.querySelector(link.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

</body>

</html>
