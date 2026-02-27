<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Spenny Terms & Conditions — Read the terms governing your use of the Spenny personal finance application." />
    <title>Terms & Conditions — Spenny</title>

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
                    },
                    fontFamily: {
                        display: ['Manrope', 'sans-serif']
                    },
                },
            },
        }
    </script>
    <style>
        * {
            font-family: 'Manrope', sans-serif;
        }

        .prose-spenny h2 {
            color: #013b8f;
            font-weight: 800;
            font-size: 1.25rem;
            margin-top: 2.5rem;
            margin-bottom: 0.75rem;
        }

        .prose-spenny h3 {
            color: #013b8f;
            font-weight: 700;
            font-size: 1rem;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .prose-spenny p {
            color: #475569;
            line-height: 1.8;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .prose-spenny ul {
            list-style: none;
            padding: 0;
            margin-bottom: 1rem;
        }

        .prose-spenny ul li {
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.8;
            padding-left: 1.5rem;
            position: relative;
        }

        .prose-spenny ul li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: #013b8f;
            font-weight: 700;
        }

        .prose-spenny strong {
            color: #013b8f;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased">

    {{-- Navbar --}}
    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Spenny" class="h-9 w-auto">
            </a>
            <a href="{{ url('/') }}"
                class="px-4 py-2 bg-slate-50 border border-slate-100 rounded-full text-xs font-bold text-slate-600 hover:bg-white hover:text-primary transition-all flex items-center gap-2">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
                Home
            </a>
        </div>
    </nav>

    {{-- Hero --}}
    <div class="bg-primary text-white py-16 px-6 text-center">
        <span
            class="inline-block py-1 px-4 rounded-full bg-white/10 text-white font-bold text-xs mb-4 uppercase tracking-widest">Legal</span>
        <h1 class="text-4xl font-black mb-3">Terms & Conditions</h1>
        <p class="text-white/70 max-w-xl mx-auto text-sm">Last updated: <strong
                class="text-white">{{ date('F d, Y') }}</strong></p>
    </div>

    {{-- Content --}}
    <div class="max-w-3xl mx-auto px-6 py-16">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-10 prose-spenny">

            <p>These Terms and Conditions ("Terms") constitute a legally binding agreement between you ("User") and
                <strong>Spenny Technologies</strong> ("Spenny", "we", "us") governing your access to and use of the
                Spenny mobile and web application.
            </p>
            <p>By creating an account or using Spenny, you confirm that you have read, understood, and agree to be bound
                by these Terms. If you do not agree, please do not use our services.</p>

            <h2>1. Acceptance of Terms</h2>
            <p>You must be at least <strong>13 years of age</strong> to use Spenny. By using the app, you represent that
                you meet this requirement and that the information you provide is accurate and complete. Users between
                13 and 18 must have parental consent.</p>

            <h2>2. Your Account</h2>
            <p>When you create an account with Spenny, you agree to:</p>
            <ul>
                <li>Provide accurate, current, and complete registration information</li>
                <li>Maintain and promptly update your account information</li>
                <li>Keep your password confidential and not share it with others</li>
                <li>Notify us immediately of any unauthorised use of your account</li>
                <li>Accept responsibility for all activities that occur under your account</li>
            </ul>
            <p>Spenny reserves the right to suspend or terminate accounts that violate these Terms or are suspected of
                fraudulent activity.</p>

            <h2>3. Permitted Use</h2>
            <p>Spenny is a personal finance management tool. You may use it solely for lawful personal financial
                tracking. You agree <strong>not</strong> to:</p>
            <ul>
                <li>Use the app for any commercial or business-to-business financial services</li>
                <li>Attempt to reverse-engineer, decompile, or hack the Spenny platform</li>
                <li>Upload or transmit any malicious code, viruses, or harmful data</li>
                <li>Scrape, crawl, or extract data from the platform using automated tools</li>
                <li>Misrepresent your identity or impersonate another person</li>
                <li>Use the service for any illegal activity or in violation of applicable law</li>
            </ul>

            <h2>4. Financial Disclaimer</h2>
            <p>Spenny is a <strong>personal expense tracking tool only</strong>. It is not a financial advisor,
                investment advisor, bank, or licensed financial institution. Nothing within the Spenny application
                constitutes financial, investment, tax, legal, or accounting advice.</p>
            <p>All financial decisions you make based on Spenny data remain entirely your own responsibility. We
                strongly recommend consulting a qualified financial professional for personalised advice.</p>

            <h2>5. Premium Subscription</h2>
            <p>Spenny offers a free tier and an optional Premium subscription. By subscribing to Premium:</p>
            <ul>
                <li>You authorise Spenny to charge your selected payment method on a recurring basis (monthly or
                    annually)</li>
                <li>Subscriptions auto-renew unless cancelled at least 24 hours before the renewal date</li>
                <li>No refunds are issued for partial billing periods, except where required by applicable law</li>
                <li>Premium features are subject to change with reasonable notice to subscribers</li>
                <li>You can cancel anytime from Settings → Subscription → Cancel Plan</li>
            </ul>

            <h2>6. Intellectual Property</h2>
            <p>All content, design, code, trademarks, logos, and features of Spenny are the exclusive intellectual
                property of Spenny Technologies and are protected by copyright and trademark law. You are granted a
                limited, non-exclusive, non-transferable licence to use the app for personal purposes only.</p>
            <p>You may not copy, modify, distribute, sell, or lease any part of the Spenny application without our prior
                written consent.</p>

            <h2>7. Disclaimers</h2>
            <p>Spenny is provided on an <strong>"as is" and "as available"</strong> basis without warranties of any
                kind, either express or implied. We do not warrant that:</p>
            <ul>
                <li>The service will be uninterrupted, error-free, or fully secure at all times</li>
                <li>Any data or information will be 100% accurate or complete</li>
                <li>The app will meet all your personal requirements</li>
            </ul>
            <p>We reserve the right to modify, suspend, or discontinue the service at any time with reasonable notice.
            </p>

            <h2>8. Limitation of Liability</h2>
            <p>To the maximum extent permitted by law, Spenny Technologies shall not be liable for any indirect,
                incidental, special, consequential, or punitive damages — including loss of profits, data, or goodwill —
                arising from your use of or inability to use the service.</p>
            <p>Our total cumulative liability to you for any claims arising out of these Terms shall not exceed the
                amount paid by you to Spenny in the three (3) months preceding the claim.</p>

            <h2>9. Governing Law</h2>
            <p>These Terms are governed by and construed in accordance with the laws of <strong>India</strong>. Any
                disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts located
                in <strong>Maharashtra, India</strong>.</p>

            <h2>10. Changes to Terms</h2>
            <p>We may revise these Terms at any time. Material changes will be communicated via in-app notice or email
                at least 14 days before they take effect. Continued use of Spenny after the effective date constitutes
                acceptance of the revised Terms.</p>

            <h2>11. Contact Us</h2>
            <p>For questions regarding these Terms, please contact:</p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:legal@spenny.app"
                        class="text-primary font-bold hover:underline">legal@spenny.app</a></li>
                <li><strong>Support:</strong> <a href="{{ route('support') }}"
                        class="text-primary font-bold hover:underline">Visit Support Centre</a></li>
            </ul>

        </div>
    </div>

    {{-- Footer --}}
    <footer class="border-t border-slate-100 bg-white py-8 text-center">
        <p class="text-slate-400 text-sm">© {{ date('Y') }} Spenny Technologies. All rights reserved.</p>
        <div class="flex justify-center gap-6 mt-3">
            <a href="{{ route('privacy') }}" class="text-slate-400 hover:text-primary font-semibold text-sm">Privacy</a>
            <a href="{{ route('terms') }}" class="text-primary font-semibold text-sm hover:underline">Terms</a>
            <a href="{{ route('support') }}" class="text-slate-400 hover:text-primary font-semibold text-sm">Support</a>
        </div>
    </footer>

</body>

</html>
