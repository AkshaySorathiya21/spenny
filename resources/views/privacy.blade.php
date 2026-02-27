<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Spenny Privacy Policy — Learn how we collect, use, and protect your personal and financial data." />
    <title>Privacy Policy — Spenny</title>

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
            content: '✓';
            position: absolute;
            left: 0;
            color: #61b20b;
            font-weight: 700;
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
        <h1 class="text-4xl font-black mb-3">Privacy Policy</h1>
        <p class="text-white/70 max-w-xl mx-auto text-sm">Last updated: <strong
                class="text-white">{{ date('F d, Y') }}</strong></p>
    </div>

    {{-- Content --}}
    <div class="max-w-3xl mx-auto px-6 py-16">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-10 prose-spenny">

            <p>Welcome to <strong>Spenny</strong> ("we", "our", or "us"). We are committed to protecting your personal
                information and your right to privacy. This Privacy Policy explains how we collect, use, disclose, and
                safeguard your information when you use the Spenny application.</p>
            <p>Please read this policy carefully. If you disagree with its terms, please discontinue use of the
                application.</p>

            <h2>1. Information We Collect</h2>
            <p>We collect information that you voluntarily provide when registering or using Spenny:</p>
            <ul>
                <li>Name and email address (for account creation)</li>
                <li>Expense entries, categories, and amounts you log manually</li>
                <li>Budget and savings goal data you set within the app</li>
                <li>Bill splitting records you create with other users</li>
                <li>App preferences and notification settings</li>
            </ul>
            <p><strong>We do NOT collect:</strong> bank account numbers, UPI credentials, credit/debit card details, or
                any banking login information. Spenny is entirely manual — we never connect to your bank.</p>

            <h2>2. How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide, operate, and maintain the Spenny application</li>
                <li>Generate your personal spending summaries and reports</li>
                <li>Send you smart alerts and budget notifications you opt into</li>
                <li>Improve our app features based on anonymous usage patterns</li>
                <li>Respond to your support requests and inquiries</li>
                <li>Process premium plan subscriptions and billing</li>
            </ul>

            <h2>3. Data Storage & Security</h2>
            <p>Your data is stored on secured servers with industry-standard protections:</p>
            <ul>
                <li>All data transmitted between your device and our servers is encrypted using TLS 1.3</li>
                <li>Stored data is protected with AES-256 encryption at rest</li>
                <li>Access to user data is strictly limited to authorised Spenny personnel</li>
                <li>We perform regular security audits and vulnerability assessments</li>
                <li>We maintain backups to protect against data loss</li>
            </ul>

            <h2>4. Sharing Your Information</h2>
            <p>We do not sell, trade, or rent your personal information to third parties. We may share data only in
                these limited circumstances:</p>
            <ul>
                <li><strong>Service Providers:</strong> Trusted vendors who assist in operating our platform (e.g.,
                    hosting, payment processing) under strict confidentiality agreements</li>
                <li><strong>Legal Compliance:</strong> If required by law, court order, or governmental authority</li>
                <li><strong>Business Transfers:</strong> In the event of a merger or acquisition, your data may transfer
                    with appropriate notice to you</li>
                <li><strong>Your Consent:</strong> With your explicit permission for any other purpose</li>
            </ul>

            <h2>5. Cookies & Tracking</h2>
            <p>Spenny uses minimal cookies strictly necessary for:</p>
            <ul>
                <li>Maintaining your login session securely</li>
                <li>Remembering your app preferences (theme, language)</li>
                <li>Basic anonymous analytics to understand feature usage</li>
            </ul>
            <p>We do not use advertising cookies, cross-site tracking, or third-party marketing pixels.</p>

            <h2>6. Your Rights & Choices</h2>
            <p>You have full control over your data at all times:</p>
            <ul>
                <li><strong>Access:</strong> Request a copy of all personal data we hold about you</li>
                <li><strong>Correction:</strong> Update inaccurate or incomplete information via your profile settings
                </li>
                <li><strong>Deletion:</strong> Delete your account and all associated data permanently from Settings →
                    Delete Account</li>
                <li><strong>Export:</strong> Download all your expense data as CSV or PDF (Premium)</li>
                <li><strong>Opt-out:</strong> Unsubscribe from promotional emails at any time via the unsubscribe link
                </li>
            </ul>
            <p>To exercise any of these rights, contact us at <a href="mailto:privacy@spenny.app"
                    class="text-primary font-bold hover:underline">privacy@spenny.app</a>.</p>

            <h2>7. Children's Privacy</h2>
            <p>Spenny is not directed to individuals under the age of 13. We do not knowingly collect personal
                information from children. If you believe a child has provided us with personal information, please
                contact us and we will promptly delete such data.</p>

            <h2>8. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for legal,
                operational, or regulatory reasons. We will notify you of any material changes via email or a prominent
                notice within the app at least 7 days before the change takes effect.</p>

            <h2>9. Contact Us</h2>
            <p>If you have questions, concerns, or requests regarding this Privacy Policy, please reach out:</p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:privacy@spenny.app"
                        class="text-primary font-bold hover:underline">privacy@spenny.app</a></li>
                <li><strong>Support Portal:</strong> <a href="{{ route('support') }}"
                        class="text-primary font-bold hover:underline">spenny.app/support</a></li>
            </ul>

        </div>
    </div>

    {{-- Footer --}}
    <footer class="border-t border-slate-100 bg-white py-8 text-center">
        <p class="text-slate-400 text-sm">© {{ date('Y') }} Spenny Technologies. All rights reserved.</p>
        <div class="flex justify-center gap-6 mt-3">
            <a href="{{ route('privacy') }}" class="text-primary font-semibold text-sm hover:underline">Privacy</a>
            <a href="{{ route('terms') }}" class="text-slate-400 hover:text-primary font-semibold text-sm">Terms</a>
            <a href="{{ route('support') }}" class="text-slate-400 hover:text-primary font-semibold text-sm">Support</a>
        </div>
    </footer>

</body>

</html>
