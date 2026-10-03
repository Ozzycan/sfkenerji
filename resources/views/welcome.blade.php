<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SFK Enerji | Geleceğin Enerji Sistemleri</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased selection:bg-blue-600 selection:text-white font-sans text-slate-800 bg-[#f8fafc]">

    <!-- Interactive Cursor Glow Track -->
    <div id="cursorLight" class="cursor-light hidden md:block"></div>

    <!-- Ambient background glows -->
    <div class="glow-sphere w-[80vw] h-[80vw] bg-blue-200/50 top-[-20%] left-[-20%] hidden md:block"></div>
    <div class="glow-sphere w-[70vw] h-[70vw] bg-indigo-200/40 bottom-[-10%] right-[-10%] hidden md:block"></div>
    <div class="glow-sphere w-[50vw] h-[50vw] bg-cyan-200/30 top-[40%] left-[25%] hidden md:block"></div>

    <!-- Floating Navigation Bar -->
    <header class="fixed top-6 left-1/2 -translate-x-1/2 w-[90%] max-w-6xl z-50">
        <nav
            class="liquid-glass-nav rounded-full px-6 py-3.5 flex justify-between items-center transition-all duration-300 shadow-xl shadow-slate-200/30">
            <!-- Logo -->
            <a href="#" class="flex items-center px-1 transition-transform duration-300 hover:scale-[1.03]">
                <img src="{{ asset('logo.png') }}" alt="SFK Enerji" class="h-8 md:h-9 w-auto">
            </a>

            <!-- Mid-links -->
            <div class="hidden md:flex items-center space-x-10 text-sm font-medium tracking-wide text-slate-600">
                <a href="#vizyon" class="hover:text-blue-600 transition-colors duration-300">Vizyon</a>
                <a href="#hizmetler" class="hover:text-blue-600 transition-colors duration-300">Hizmetlerimiz</a>
                <a href="#simulasyon" class="hover:text-blue-600 transition-colors duration-300">GES Simülatörü</a>
                <a href="#paketler" class="hover:text-blue-600 transition-colors duration-300">Paketler</a>
            </div>

            <!-- CTA & Contact -->
            <div class="flex items-center gap-4">
                <!-- Social Media Icons -->
                <div class="hidden lg:flex items-center gap-2 border-r border-slate-200/40 pr-4 mr-2">
                    @if($settings->facebook_link)
                    <a href="{{ $settings->facebook_link }}" target="_blank" rel="noopener"
                        class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:bg-white/40 border border-white/20 transition-all duration-300 shadow-sm"
                        title="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    @endif
                    @if($settings->instagram_link)
                    <a href="{{ $settings->instagram_link }}" target="_blank" rel="noopener"
                        class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:bg-white/40 border border-white/20 transition-all duration-300 shadow-sm"
                        title="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg>
                    </a>
                    @endif
                    @if($settings->linkedin_link)
                    <a href="{{ $settings->linkedin_link }}" target="_blank" rel="noopener"
                        class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:bg-white/40 border border-white/20 transition-all duration-300 shadow-sm"
                        title="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                    @endif
                </div>
                <a href="tel:{{ str_replace(' ', '', $settings->phone) }}"
                    class="hidden sm:flex items-center gap-2 text-sm text-slate-600 hover:text-blue-600 transition-colors duration-300">
                    <span class="w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </span>
                    <span class="font-semibold">{{ $settings->phone }}</span>
                </a>
                <button onclick="toggleDrawer('teklif-drawer', true)"
                    class="px-5 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-400 hover:to-blue-500 transition-all duration-300 shadow-lg shadow-blue-500/20 hover:scale-[1.03] inline-block">
                    Teklif Al
                </button>

                <!-- Mobile Nav Toggle -->
                <button onclick="toggleMobileNav(true)"
                    class="md:hidden w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Mobile Navigation Overlay -->
    <div id="mobile-nav"
        class="fixed inset-0 z-50 bg-white/98 backdrop-blur-xl translate-x-full transition-transform duration-500 flex flex-col justify-between p-8 border-l border-slate-200 shadow-2xl">
        <div>
            <div class="flex justify-between items-center mb-16">
                <div class="flex items-center justify-center px-1">
                    <img src="{{ asset('logo.png') }}" alt="SFK Enerji" class="h-8 w-auto">
                </div>
                <button onclick="toggleMobileNav(false)"
                    class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col space-y-6 text-2xl font-semibold font-display text-slate-800">
                <a href="#vizyon" onclick="toggleMobileNav(false)"
                    class="hover:text-blue-600 transition-colors">Vizyon</a>
                <a href="#hizmetler" onclick="toggleMobileNav(false)"
                    class="hover:text-blue-600 transition-colors">Hizmetlerimiz</a>
                <a href="#simulasyon" onclick="toggleMobileNav(false)" class="hover:text-blue-600 transition-colors">GES
                    Simülatörü</a>
                <a href="#paketler" onclick="toggleMobileNav(false)"
                    class="hover:text-blue-600 transition-colors">Paketler</a>
            </div>
        </div>
        <div class="space-y-6 border-t border-slate-200/80 pt-8">
            <a href="tel:{{ str_replace(' ', '', $settings->phone) }}" class="flex items-center gap-3 text-lg font-semibold text-slate-800">
                <span class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                </span>
                {{ $settings->phone }}
            </a>
            <div class="flex justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">{{ $settings->email }}</p>
                <div class="flex space-x-3">
                    @if($settings->facebook_link)
                    <a href="{{ $settings->facebook_link }}" target="_blank" rel="noopener"
                        class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-600 hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    @endif
                    @if($settings->instagram_link)
                    <a href="{{ $settings->instagram_link }}" target="_blank" rel="noopener"
                        class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-600 hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg>
                    </a>
                    @endif
                    @if($settings->linkedin_link)
                    <a href="{{ $settings->linkedin_link }}" target="_blank" rel="noopener"
                        class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-600 hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <main class="relative min-h-screen flex flex-col justify-center items-center overflow-hidden px-6 pt-32 pb-20">
        <div class="max-w-5xl mx-auto text-center z-10">
            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-panel border-slate-200/80 mb-8 animate-pulse">
                <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                <span class="text-xs font-semibold tracking-widest uppercase text-blue-600 font-display">{{ $settings->hero_badge ?? 'Geleceğin Enerji Altyapıları' }}</span>
            </div>

            <!-- Title -->
            <h1
                class="font-display font-extrabold text-5xl md:text-8xl lg:text-9xl tracking-tighter leading-[0.95] mb-8 text-slate-900 select-none">
                {!! $settings->hero_title ?? 'Enerjinin <br /> <span class="text-gradient-emerald-blue">Kusursuz Hali.</span>' !!}
            </h1>

            <!-- Description -->
            <p
                class="max-w-2xl mx-auto text-base md:text-xl text-slate-600 font-light tracking-wide leading-relaxed mb-12">
                {{ $settings->hero_description ?? 'Fabrikalar, ticari binalar ve konutlar için sürdürülebilir, yüksek verimli ve yenilikçi enerji altyapı mühendisliği. Geleceği asimetrik teknolojiyle bugünden kurun.' }}
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#simulasyon"
                    class="w-full sm:w-auto group relative inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-300 ease-out rounded-full bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 shadow-lg shadow-blue-500/25 overflow-hidden">
                    <span class="relative flex items-center gap-3">
                        {{ $settings->hero_cta_1 ?? 'Yatırımını Hesapla' }}
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a href="#paketler"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 font-medium text-slate-700 transition-all duration-300 rounded-full border border-slate-200 bg-white hover:bg-slate-50 hover:border-slate-300 shadow-sm">
                    {{ $settings->hero_cta_2 ?? 'Sistem Paketleri' }}
                </a>
            </div>
        </div>

        <!-- Scroll down indicator -->
        <div
            class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50 hover:opacity-100 transition-opacity">
            <span class="text-xs tracking-widest uppercase font-display text-slate-500">Keşfet</span>
            <div class="w-6 h-10 rounded-full border-2 border-slate-400 flex justify-center p-1.5">
                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-bounce"></div>
            </div>
        </div>
    </main>

    <!-- Key Metrics Panel (Asymmetric Row) -->
    <section id="vizyon" class="relative py-12 px-6 bg-white/60 border-y border-slate-200/80 z-10">
        <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-16 text-center md:text-left">
            <div class="space-y-2">
                <div class="text-3xl md:text-5xl font-display font-bold text-slate-900">{{ $settings->metric_1_val }}</div>
                <div class="text-xs font-semibold tracking-wider text-slate-500 uppercase">{{ $settings->metric_1_lbl }}</div>
            </div>
            <div class="space-y-2">
                <div class="text-3xl md:text-5xl font-display font-bold text-slate-900">{{ $settings->metric_2_val }}</div>
                <div class="text-xs font-semibold tracking-wider text-slate-500 uppercase">{{ $settings->metric_2_lbl }}</div>
            </div>
            <div class="space-y-2">
                <div class="text-3xl md:text-5xl font-display font-bold text-slate-900">{{ $settings->metric_3_val }}</div>
                <div class="text-xs font-semibold tracking-wider text-slate-500 uppercase">{{ $settings->metric_3_lbl }}</div>
            </div>
            <div class="space-y-2">
                <div class="text-3xl md:text-5xl font-display font-bold text-slate-900">{{ $settings->metric_4_val }}</div>
                <div class="text-xs font-semibold tracking-wider text-slate-500 uppercase">{{ $settings->metric_4_lbl }}</div>
            </div>
        </div>
    </section>

    <!-- Corporate Values Section -->
    <section class="relative py-28 px-6 lg:px-12 bg-slate-50/40 border-b border-slate-200/80 z-10 overflow-hidden">
        <!-- Ambient blue background glow -->
        <div
            class="hidden md:block absolute top-1/2 left-1/3 w-[50vw] h-[50vw] bg-blue-500/10 rounded-full blur-[120px] pointer-events-none -z-10">
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            <!-- Left Info Column -->
            <div class="lg:col-span-4 space-y-8">
                <div class="space-y-4">
                    <div
                        class="inline-block px-3 py-1 rounded-full bg-blue-50/80 border border-blue-100 text-xs font-semibold uppercase tracking-wider text-blue-600">
                        {{ $settings->vision_badge ?? 'Şirket Profilimiz' }}
                    </div>
                    <h2 class="font-display text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                        {{ $settings->vision_title }}
                    </h2>
                </div>

                <p class="text-slate-600 font-light leading-relaxed text-base md:text-lg">
                    {{ $settings->vision_description }}
                </p>

                <div class="p-6 border-l-2 border-blue-600 bg-blue-50/50 rounded-r-2xl">
                    <p class="text-slate-700 font-semibold text-sm leading-relaxed">
                        {{ $settings->vision_quote ?? "En önemli hedefimiz tüm Türkiye'de var olarak, enerji yatırımlarında çözüm ortağınız olmaktır." }}
                    </p>
                </div>
            </div>

            <!-- Right Grid Column -->
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($settings->about_features ?? [] as $feature)
                    <div
                        class="group p-6 glass-panel glass-panel-hover rounded-2xl transition-all duration-500 hover:scale-[1.02] relative overflow-hidden">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            {!! $feature['svg_icon'] ?? '' !!}
                        </div>
                        <h4 class="text-base font-semibold text-slate-800 mb-2 uppercase tracking-wider font-display">
                            {{ $feature['title'] ?? '' }}</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">{{ $feature['description'] ?? '' }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Bento Grid Services Section -->
    <section id="hizmetler" class="relative py-32 px-6 lg:px-12 z-10">
        <div class="max-w-7xl mx-auto">
            <div class="mb-20">
                <div
                    class="inline-block px-3 py-1 rounded-full bg-blue-50 border border-blue-100 mb-4 text-xs font-semibold uppercase tracking-wider text-blue-600">
                    {{ $settings->services_badge ?? 'Uzmanlık Alanlarımız' }}
                </div>
                <h2 class="font-display text-4xl md:text-6xl font-bold tracking-tight text-slate-900 mb-6">
                    {!! $settings->services_title ?? 'Geleceğin Enerjisini <br />Bugünden Kuruyoruz.' !!}
                </h2>
                <p class="text-slate-600 max-w-2xl text-lg font-light">
                    {{ $settings->services_description ?? 'Mühendislik sınırlarını aşan asimetrik sistemlerimizle verimliliği artırırken karbon izinizi sıfıra indiriyoruz.' }}
                </p>
            </div>

            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
                @foreach($services as $index => $service)
                @php
                    $spanClass = match((int)($service->grid_span ?? 2)) {
                        1 => 'md:col-span-1',
                        2 => 'md:col-span-2',
                        3 => 'md:col-span-3',
                        4 => 'md:col-span-4',
                        5 => 'md:col-span-5',
                        6 => 'md:col-span-6',
                        default => 'md:col-span-2',
                    };
                @endphp
                <div class="{{ $spanClass }} glass-panel glass-panel-hover glass-card-glow rounded-[2rem] p-8 md:p-12 flex flex-col justify-between min-h-[350px] transition-all duration-500 hover:scale-[1.01] group overflow-hidden relative">
                    <!-- Project Background Overlay -->
                    @if($service->image)
                    <img src="{{ filter_var($service->image, FILTER_VALIDATE_URL) ? $service->image : Storage::url($service->image) }}" alt="{{ $service->title }}"
                        class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-25 group-hover:scale-[1.05] transition-all duration-700 pointer-events-none z-0">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/85 to-transparent pointer-events-none z-0"></div>
                    <div class="absolute top-0 right-0 w-80 h-80 bg-blue-500/10 rounded-full blur-[100px] group-hover:bg-blue-500/15 transition-all duration-700 pointer-events-none z-0"></div>
                    
                    <div class="flex justify-between items-start relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600">
                            @if(str_contains($service->subtitle, '01'))
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m11.314 11.314l.707-.707M12 17a5 5 0 100-10 5 5 0 000 10z"></path></svg>
                            @elseif(str_contains($service->subtitle, '02'))
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            @elseif(str_contains($service->subtitle, '03'))
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                            @endif
                        </div>
                        <span class="text-xs font-mono text-slate-500">{{ $service->subtitle }}</span>
                    </div>

                    <div class="mt-8 space-y-4 relative z-10">
                        <h3 class="text-2xl md:text-3xl font-display font-semibold text-slate-900">{{ $service->title }}</h3>
                        <p class="text-slate-600 text-sm max-w-xl leading-relaxed">
                            {{ $service->description }}
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            @if(!empty($service->tags))
                                @foreach(explode(',', $service->tags) as $tag)
                                    @if(trim($tag))
                                        <span class="text-xs px-3 py-1 rounded-full bg-slate-100 text-slate-700 border border-slate-200/50">{{ trim($tag) }}</span>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Reference Projects Slideshow Section -->
    <section class="relative py-32 px-6 lg:px-12 bg-slate-50/50 z-10 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4">
                <div>
                    <div class="inline-block px-3 py-1 rounded-full bg-blue-50 border border-blue-100 mb-4 text-xs font-semibold uppercase tracking-wider text-blue-600">
                        {{ $settings->projects_badge ?? 'Başarı Hikayelerimiz' }}
                    </div>
                    <h2 class="font-display text-4xl md:text-5xl font-bold tracking-tight text-slate-900">
                        {{ $settings->projects_title ?? 'Referans Projelerimiz' }}
                    </h2>
                </div>
                <div class="flex gap-3">
                    <button onclick="prevSlide()" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:border-slate-400 transition-all bg-white shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="nextSlide()" class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:border-slate-400 transition-all bg-white shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Slider Viewport -->
            <div class="relative h-[450px] md:h-[600px] rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-2xl">
                <!-- Slides container -->
                <div class="relative w-full h-full">
                    @foreach($projects as $index => $project)
                    <!-- Slide {{ $index + 1 }} -->
                    <div class="project-slide absolute inset-0 {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }} transition-all duration-1000 ease-in-out">
                        @if($project->image)
                        <img src="{{ filter_var($project->image, FILTER_VALIDATE_URL) ? $project->image : Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/20 to-transparent"></div>
                        <div class="absolute bottom-8 left-8 md:bottom-12 md:left-12 right-8 sm:right-auto max-w-xl p-8 rounded-[2rem] bg-white/90 border border-white shadow-2xl backdrop-blur-md">
                            <span class="text-xs font-mono text-blue-600 uppercase tracking-widest block mb-2">{{ sprintf("%02d", $index + 1) }} / {{ $project->category }}</span>
                            <h3 class="text-xl md:text-3xl font-display font-bold text-slate-900 mb-2">{{ $project->title }}</h3>
                            <p class="text-slate-600 text-xs md:text-sm mb-4 font-light leading-relaxed">{{ $project->description }}</p>
                            <div class="flex gap-6 text-xs font-mono text-slate-500 border-t border-slate-100 pt-4">
                                <div><span class="text-slate-800 block font-sans font-semibold text-sm">{{ $project->location }}</span>Konum</div>
                                <div><span class="text-slate-800 block font-sans font-semibold text-sm">{{ $project->capacity }}</span>Kapasite</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Slide indicators / dots -->
                <div class="absolute bottom-8 right-8 md:bottom-12 md:right-12 z-20 flex gap-2">
                    @foreach($projects as $index => $project)
                    <button onclick="goToSlide({{ $index }})" class="slide-dot w-3 h-3 rounded-full {{ $index === 0 ? 'bg-slate-800' : 'bg-slate-300' }} transition-all duration-300"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive GES Simulation Calculator -->
    <section id="simulasyon" class="relative py-32 px-6 lg:px-12 bg-slate-50/50 border-y border-slate-200/80 z-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <!-- Text Area -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="inline-block px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-xs font-semibold uppercase tracking-wider text-blue-600">
                        {{ $settings->simulator_badge ?? 'Yatırım Simülatörü' }}
                    </div>
                    <h2 class="font-display text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                        {{ $settings->simulator_title ?? 'Güneş Paneli Yatırım Getirinizi Keşfedin.' }}
                    </h2>
                    <p class="text-slate-700 font-normal leading-relaxed">
                        {{ $settings->simulator_description ?? 'Çatı alanınızı veya aylık elektrik faturanızı simülatöre girerek, sisteminizin tahmini kurulu gücünü, üreteceği elektriği, kazanacağınız tasarrufu ve yıllık doğaya olan katkınızı anında görün.' }}
                    </p>
                    <div class="p-6 glass-panel rounded-2xl space-y-4">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>{{ $settings->simulator_info_1 ?? 'Hesaplamalar Türkiye ortalama güneşlenme verilerine dayanır.' }}</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>{{ $settings->simulator_info_2 ?? 'Güneş paneli ömrü ortalama 25 yıldır.' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Simulation Widget -->
                <div class="lg:col-span-7">
                    <div class="glass-panel glass-card-glow rounded-[2.5rem] p-8 md:p-12 shadow-2xl relative">
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-500/5 rounded-full blur-[80px] pointer-events-none"></div>

                        <!-- Selector tabs -->
                        <div class="flex p-1 bg-slate-100 rounded-full mb-8">
                            <button id="tab-bill" onclick="switchCalcTab('bill')" class="flex-1 py-3 text-sm font-semibold rounded-full bg-blue-600 text-white shadow-lg shadow-blue-500/20 transition-all duration-300">
                                Aylık Fatura ile Hesapla
                            </button>
                            <button id="tab-area" onclick="switchCalcTab('area')" class="flex-1 py-3 text-sm font-semibold rounded-full text-slate-600 hover:text-slate-900 transition-all duration-300">
                                Çatı Alanı ile Hesapla
                            </button>
                        </div>

                        <!-- Bill Input -->
                        <div id="calc-bill-container" class="space-y-6">
                            <div class="flex justify-between items-center">
                                <label class="text-sm font-bold text-slate-700">Aylık Ortalama Fatura</label>
                                <div class="text-2xl font-display font-bold text-slate-900"><span id="val-bill-text">50.000</span> ₺</div>
                            </div>
                            <input id="input-bill" type="range" min="10000" max="1000000" step="5000" value="50000" oninput="calculateGES()" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                            <div class="flex justify-between text-xs text-slate-600 font-mono font-medium">
                                <span>10.000 ₺</span>
                                <span>1.000.000 ₺</span>
                            </div>
                        </div>

                        <!-- Area Input (Hidden by default) -->
                        <div id="calc-area-container" class="space-y-6 hidden">
                            <div class="flex justify-between items-center">
                                <label class="text-sm font-bold text-slate-700">Toplam Çatı Alanı</label>
                                <div class="text-2xl font-display font-bold text-slate-900"><span id="val-area-text">500</span> m²</div>
                            </div>
                            <input id="input-area" type="range" min="50" max="10000" step="50" value="500" oninput="calculateGES()" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                            <div class="flex justify-between text-xs text-slate-600 font-mono font-medium">
                                <span>50 m²</span>
                                <span>10.000 m²</span>
                            </div>
                        </div>

                        <!-- Results Grid -->
                        <div class="grid grid-cols-2 gap-6 mt-12 pt-8 border-t border-slate-200/80">
                            <div class="space-y-1">
                                <div class="text-xs font-bold text-slate-500 tracking-wider uppercase">Sistem Gücü</div>
                                <div class="text-xl md:text-3xl font-sans font-extrabold tabular-nums text-slate-900"><span id="res-power" class="text-blue-600 font-extrabold">12.5</span> kWp</div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-xs font-bold text-slate-500 tracking-wider uppercase">Tahmini Panel Adedi</div>
                                <div class="text-xl md:text-3xl font-sans font-extrabold tabular-nums text-slate-900"><span id="res-panels">28</span> Adet</div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-xs font-bold text-slate-500 tracking-wider uppercase">Yıllık Kazanç & Tasarruf</div>
                                <div class="text-xl md:text-3xl font-sans font-extrabold tabular-nums text-slate-900"><span id="res-savings" class="text-blue-600 font-extrabold">510.000</span> ₺</div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-xs font-bold text-slate-500 tracking-wider uppercase">CO2 Azaltımı</div>
                                <div class="text-xl md:text-3xl font-sans font-extrabold tabular-nums text-slate-900"><span id="res-co2">8.4</span> Ton/Yıl</div>
                            </div>
                        </div>

                        <!-- Environmental savings extra badge -->
                        <div class="mt-8 p-4 bg-cyan-50 border border-cyan-100 rounded-2xl flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-cyan-100/80 flex items-center justify-center text-cyan-700 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            </div>
                            <div class="text-xs md:text-sm text-slate-700 font-medium">
                                @php
                                    $treesText = $settings->simulator_trees_text ?? 'Bu yatırımınızla her yıl ortalama :trees ağaç dikmiş kadar çevresel katkı sağlarsınız.';
                                    $treesHtml = str_replace(':trees', '<span id="res-trees" class="font-bold text-cyan-700 font-semibold">385</span>', $treesText);
                                @endphp
                                {!! $treesHtml !!}
                            </div>
                        </div>

                        <!-- CTA button -->
                        <button onclick="openDrawerWithSimResults()" class="w-full py-4 mt-8 rounded-2xl bg-slate-900 text-white font-semibold text-sm hover:bg-slate-800 transition-colors duration-300 shadow-xl flex items-center justify-center gap-2">
                            Simülasyon Detaylı Teklifini Al
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="paketler" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-[#fafcff] border-t border-slate-200/80 z-10 font-sans overflow-hidden">
        <!-- Avant-Garde Ambient Background -->
        <div class="hidden md:block absolute -top-40 -right-40 w-[600px] h-[600px] bg-blue-400/10 rounded-full blur-[150px] pointer-events-none -z-10 mix-blend-multiply"></div>
        <div class="hidden md:block absolute top-1/2 -left-40 w-[500px] h-[500px] bg-cyan-300/10 rounded-full blur-[120px] pointer-events-none -z-10 mix-blend-multiply"></div>

        <div class="max-w-[90rem] mx-auto relative z-10">
            <!-- Header (Minimalist & Distinctive) -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white rounded-full mb-6 border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)]">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-[9px] font-bold tracking-[0.2em] text-slate-600 uppercase">{{ $settings->packages_badge ?? 'Solar Enerji Sistemleri' }}</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold tracking-tighter text-slate-900 mb-4 leading-[1.1]">
                    Enerji <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Paketleri</span>
                </h2>
                <p class="text-[15px] text-slate-500 font-light leading-relaxed max-w-2xl mx-auto">
                    {{ $settings->packages_description ?? 'İhtiyacınıza en uygun, mühendislik ekibimiz tarafından optimize edilmiş, yüksek performanslı hazır güneş enerjisi paketleri.' }}
                </p>

                <!-- Countdown Timer -->
                <div class="mt-10 flex flex-col items-center justify-center">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-rose-500"></span>
                        </span>
                        <span id="promo-month-text" class="text-xs font-bold tracking-[0.15em] text-rose-500 uppercase">Ağustos Ayı Fırsatı</span>
                    </div>
                    <div class="flex gap-4 sm:gap-6 items-center">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center bg-white border border-rose-100 rounded-[1.25rem] shadow-[0_8px_30px_rgb(244,63,94,0.12)]">
                                <span id="cd-days" class="text-xl sm:text-2xl font-display font-bold text-slate-900">00</span>
                            </div>
                            <span class="text-[10px] font-semibold tracking-widest text-slate-400 uppercase">Gün</span>
                        </div>
                        <div class="text-2xl font-light text-rose-200 mb-6">:</div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center bg-white border border-rose-100 rounded-[1.25rem] shadow-[0_8px_30px_rgb(244,63,94,0.12)]">
                                <span id="cd-hours" class="text-xl sm:text-2xl font-display font-bold text-slate-900">00</span>
                            </div>
                            <span class="text-[10px] font-semibold tracking-widest text-slate-400 uppercase">Saat</span>
                        </div>
                        <div class="text-2xl font-light text-rose-200 mb-6">:</div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center bg-white border border-rose-100 rounded-[1.25rem] shadow-[0_8px_30px_rgb(244,63,94,0.12)]">
                                <span id="cd-minutes" class="text-xl sm:text-2xl font-display font-bold text-slate-900">00</span>
                            </div>
                            <span class="text-[10px] font-semibold tracking-widest text-slate-400 uppercase">Dakika</span>
                        </div>
                        <div class="text-2xl font-light text-rose-200 mb-6">:</div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center bg-rose-50 border border-rose-200 rounded-[1.25rem] shadow-[0_8px_30px_rgb(244,63,94,0.2)]">
                                <span id="cd-seconds" class="text-xl sm:text-2xl font-display font-bold text-rose-600">00</span>
                            </div>
                            <span class="text-[10px] font-semibold tracking-widest text-rose-500 uppercase">Saniye</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toggles (Sleek pill design) -->
            <div class="flex justify-center mb-12 relative z-20">
                <div class="inline-flex items-center p-1 bg-white/80 backdrop-blur-md rounded-2xl border border-slate-200/60 shadow-[0_4px_20px_rgb(0,0,0,0.03)] overflow-x-auto max-w-full custom-scrollbar" id="package-filters">
                    <button onclick="filterPackages('Off Grid', this)" class="package-filter-btn whitespace-nowrap flex-shrink-0 px-6 py-2.5 rounded-[10px] bg-slate-900 text-white text-[13px] font-semibold shadow-sm transition-all duration-300">
                        Off Grid
                    </button>
                    <button onclick="filterPackages('On Grid', this)" class="package-filter-btn whitespace-nowrap flex-shrink-0 px-6 py-2.5 rounded-[10px] text-slate-500 hover:text-slate-900 hover:bg-slate-50 text-[13px] font-medium transition-all duration-300">
                        On Grid
                    </button>
                    <button onclick="filterPackages('Hybrid', this)" class="package-filter-btn whitespace-nowrap flex-shrink-0 px-6 py-2.5 rounded-[10px] text-slate-500 hover:text-slate-900 hover:bg-slate-50 text-[13px] font-medium transition-all duration-300">
                        Hybrid
                    </button>
                    <button onclick="filterPackages('Sulama', this)" class="package-filter-btn whitespace-nowrap flex-shrink-0 px-6 py-2.5 rounded-[10px] text-slate-500 hover:text-slate-900 hover:bg-slate-50 text-[13px] font-medium transition-all duration-300">
                        Sulama
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 relative">
                @foreach($packages as $package)
                    <div class="package-card group relative bg-white/70 backdrop-blur-xl border border-white/90 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_15px_40px_rgba(59,130,246,0.08)] rounded-3xl p-6 lg:p-8 transition-all duration-500 overflow-hidden flex flex-col" data-category="{{ $package->category ?? 'Off Grid' }}">
                        
                        <!-- Avant-Garde Hover Glow inside card -->
                        <div class="absolute -top-16 -right-16 w-48 h-48 bg-blue-400/10 rounded-full blur-[60px] opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                        @if($package->is_popular)
                            <div class="absolute top-5 right-5 px-3 py-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full text-[9px] font-bold tracking-widest text-white shadow-md shadow-blue-500/20 uppercase z-10">
                                Popüler
                            </div>
                        @endif

                        <!-- Card Header & Title -->
                        <div class="mb-6 relative z-10">
                            <div class="font-mono text-xs font-bold tracking-widest text-slate-700 uppercase mb-3 flex items-center">
                                <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded-md shadow-sm border border-slate-200/60">{{ $package->kva_badge ?? '' }}</span> 
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mx-3"></span> 
                                <span class="text-slate-500 text-[11px]">{{ $package->type_badge ?? '' }}</span>
                            </div>
                            <h3 class="text-2xl font-display font-bold tracking-tight text-slate-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $package->title }}
                            </h3>
                            <p class="text-slate-500 font-medium text-[12px] leading-snug">{{ $package->description }}</p>
                        </div>

                        <!-- Minimalist Feature List -->
                        <div class="flex-1 space-y-3 mb-8 relative z-10">
                            @if(is_array($package->features))
                                @foreach($package->features as $feature)
                                    <div class="flex justify-between items-end border-b border-slate-100 pb-2 group-hover:border-blue-50 transition-colors duration-300">
                                        <span class="text-slate-500 text-[11px] font-medium">{{ $feature['name'] ?? '' }}</span>
                                        <span class="text-slate-900 text-[11px] font-bold text-right ml-2">{{ $feature['value'] ?? '' }}</span>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!-- Price & Action (Vertical Stack) -->
                        <div class="pt-2 flex flex-col gap-4 relative z-10">
                            <div>
                                <div class="flex items-center gap-1.5 mb-1.5">
                                    <div class="w-1.5 h-1.5 rounded-full bg-emerald-400"></div>
                                    <span class="text-[10px] font-bold tracking-widest text-slate-500 uppercase">Üretim</span>
                                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded">{{ $package->daily_production ?? '' }}</span>
                                </div>

                            </div>

                            <button onclick="openDrawerWithPackage(this)" data-title="{{ $package->title }}" data-kva="{{ $package->kva_badge ?? '' }}" data-features="{{ json_encode($package->features ?? []) }}" class="relative overflow-hidden group/btn px-6 py-3 bg-slate-900 rounded-full w-full transition-all hover:scale-[1.02] shadow-lg hover:shadow-blue-500/20">
                                <span class="relative z-10 flex items-center justify-center gap-2 text-white font-semibold text-[13px] tracking-wide">
                                    Teklif İste
                                    <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </span>
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-cyan-500 translate-y-full group-hover/btn:translate-y-0 transition-transform duration-500 ease-out"></div>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Solution Partners -->
    <section class="py-28 border-t border-slate-200/80 bg-slate-50/50 z-10 relative">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-slate-500 font-display text-sm tracking-widest uppercase mb-16">Çözüm Ortaklarımız ve Güç Birliğimiz</p>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-8 items-center justify-center">
                @foreach($settings->partners ?? [] as $partner)
                    <div class="flex flex-col items-center gap-3 group">
                        @php
                            $logoUrl = isset($partner['logo']) && $partner['logo'] ? (filter_var($partner['logo'], FILTER_VALIDATE_URL) ? $partner['logo'] : url('image-render?path=' . urlencode($partner['logo']))) : null;
                        @endphp
                        @if($logoUrl)
                            <img src="{{ $logoUrl }}" alt="{{ $partner['name'] ?? 'Partner' }}" class="h-12 md:h-16 w-auto mx-auto object-contain grayscale opacity-60 group-hover:opacity-100 group-hover:grayscale-0 transition-all duration-500 rounded-lg">
                        @else
                            <div class="h-12 md:h-16 w-full max-w-[120px] mx-auto bg-slate-200/50 rounded-lg flex items-center justify-center text-slate-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                        @if(!empty($partner['name']))
                            <span class="text-xs font-semibold text-slate-500 group-hover:text-blue-600 transition-colors text-center">{{ $partner['name'] }}</span>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Detailed "Teklif Al" Slide-over Drawer -->
    <div id="teklif-drawer" class="fixed inset-y-0 right-0 z-50 w-full sm:max-w-lg bg-white border-l border-slate-200 shadow-2xl translate-x-full transition-transform duration-500 flex flex-col justify-between overflow-y-auto">
        <!-- Close & Header -->
        <div class="p-8 border-b border-slate-200/80">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-display font-semibold text-slate-900">Teklif İsteyin</h3>
                <button onclick="toggleDrawer('teklif-drawer', false)" class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <p class="text-slate-500 text-sm">Bizimle iletişime geçin, mühendislik ekibimiz en kısa sürede projeniz için özel teklif hazırlasın.</p>
        </div>

        <!-- Form Body -->
        <form class="p-8 space-y-6 flex-1" onsubmit="handleFormSubmit(event)">
            <!-- Name -->
            <div class="space-y-2">
                <label for="form-name" class="text-xs font-semibold uppercase text-slate-500 tracking-wider">Adınız Soyadınız / Firma</label>
                <input id="form-name" required type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:bg-white focus:border-blue-500 transition-all" placeholder="Ahmet Yılmaz / Yılmaz A.Ş.">
            </div>

            <!-- Contact detail -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label for="form-phone" class="text-xs font-semibold uppercase text-slate-500 tracking-wider">Telefon</label>
                    <input id="form-phone" required type="tel" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:bg-white focus:border-blue-500 transition-all" placeholder="0555 555 5555">
                </div>
                <div class="space-y-2">
                    <label for="form-email" class="text-xs font-semibold uppercase text-slate-500 tracking-wider">E-posta</label>
                    <input id="form-email" required type="email" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:bg-white focus:border-blue-500 transition-all" placeholder="ahmet@firma.com">
                </div>
            </div>

            <!-- Subject Type / Package -->
            <div class="space-y-2">
                <label for="form-interest" class="text-xs font-semibold uppercase text-slate-500 tracking-wider">İlgilendiğiniz Çözüm</label>
                <select id="form-interest" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:bg-white focus:border-blue-500 transition-all">
                    <option value="genel">Genel Bilgi / Mühendislik Danışmanlığı</option>
                    <option value="ges-cati">Çatı GES Projeleri</option>
                    <option value="ges-arazi">Arazi GES Projeleri</option>
                    <option value="taahhut">Alçak/Yüksek Gerilim Taahhüt</option>
                    <option value="ev-sarj">EV Şarj İstasyonları</option>
                    <option value="bakim">SCADA ve Bakım Anlaşması</option>
                    <option value="paket">Hazır Sistem Paketleri</option>
                </select>
            </div>

            <!-- Custom message details -->
            <div class="space-y-2">
                <label for="form-message" class="text-xs font-semibold uppercase text-slate-500 tracking-wider">Açıklama / Mesajınız</label>
                <textarea id="form-message" rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:bg-white focus:border-blue-500 transition-all" placeholder="Projeniz veya ihtiyaçlarınız hakkında kısa detaylar..."></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-400 hover:to-blue-500 text-white font-semibold text-sm transition-all shadow-lg shadow-blue-500/20">
                Teklifi Gönder
            </button>
        </form>

        <!-- Footer -->
        <div class="p-8 border-t border-slate-200/80 bg-slate-50 flex items-center justify-between text-xs text-slate-500">
            <span>SFK Enerji Mühendislik Departmanı</span>
            <div class="flex items-center gap-4">
                <span>{{ $settings->phone }}</span>
            </div>
        </div>
    </div>

    <!-- Detailed "Privacy Policy" Drawer -->
    <div id="privacy-drawer" class="fixed inset-y-0 right-0 z-50 w-full sm:max-w-xl bg-white border-l border-slate-200 shadow-2xl translate-x-full transition-transform duration-500 flex flex-col justify-between overflow-y-auto">
        <!-- Close & Header -->
        <div class="p-8 border-b border-slate-200/80">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-display font-semibold text-slate-900">Gizlilik Politikası</h3>
                <button onclick="toggleDrawer('privacy-drawer', false)" class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <!-- Content Body -->
        <div class="p-8 prose prose-slate max-w-none flex-1 overflow-y-auto leading-relaxed text-slate-600 text-sm space-y-4">
            {!! $settings->privacy_policy !!}
        </div>

        <!-- Footer -->
        <div class="p-8 border-t border-slate-200/80 bg-slate-50 text-xs text-slate-505">
            <span>SFK Enerji A.Ş. Hukuk ve Uyum Birimi</span>
        </div>
    </div>

    <!-- Detailed "KVKK" Drawer -->
    <div id="kvkk-drawer" class="fixed inset-y-0 right-0 z-50 w-full sm:max-w-xl bg-white border-l border-slate-200 shadow-2xl translate-x-full transition-transform duration-500 flex flex-col justify-between overflow-y-auto">
        <!-- Close & Header -->
        <div class="p-8 border-b border-slate-200/80">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-display font-semibold text-slate-900">KVKK Aydınlatma Metni</h3>
                <button onclick="toggleDrawer('kvkk-drawer', false)" class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 hover:bg-slate-100 transition-colors">
                    <svg class="w-5 h-5 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <!-- Content Body -->
        <div class="p-8 prose prose-slate max-w-none flex-1 overflow-y-auto leading-relaxed text-slate-600 text-sm space-y-4">
            {!! $settings->kvkk_text !!}
        </div>

        <!-- Footer -->
        <div class="p-8 border-t border-slate-200/80 bg-slate-50 text-xs text-slate-505">
            <span>SFK Enerji A.Ş. Kişisel Verileri Koruma Komitesi</span>
        </div>
    </div>

    <!-- Backdrop overlay for Drawer/Mobile Nav -->
    <div id="drawer-backdrop" onclick="closeAllDrawers()" class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm hidden transition-opacity duration-300"></div>

    <!-- Footer -->
    <footer class="py-20 border-t border-slate-200/80 px-6 relative z-10 bg-gradient-to-b from-transparent to-blue-50/40">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <!-- Brand Column -->
            <div class="space-y-6">
                <div class="inline-block mb-4 flex items-center justify-start max-w-[170px] px-1">
                    <img src="{{ asset('logo.png') }}" alt="SFK Enerji" class="h-8 w-auto">
                </div>
                <p class="text-slate-600 text-sm leading-relaxed max-w-xs font-light">
                    Geleceğin enerji projelerinde en son teknoloji ve üst düzey mühendislik çözümleri ile verimliliğinizi garanti ediyoruz.
                </p>
                <div class="flex space-x-4">
                    <!-- Social icons -->
                    @if($settings->facebook_link)
                    <a href="{{ $settings->facebook_link }}" target="_blank" rel="noopener" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-600 hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    @endif
                    @if($settings->instagram_link)
                    <a href="{{ $settings->instagram_link }}" target="_blank" rel="noopener" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-600 hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    @endif
                    @if($settings->linkedin_link)
                    <a href="{{ $settings->linkedin_link }}" target="_blank" rel="noopener" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-600 hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Navigation Column -->
            <div class="space-y-4">
                <h4 class="text-sm font-semibold tracking-wider uppercase text-slate-800 font-display">Hızlı Menü</h4>
                <div class="flex flex-col space-y-2.5 text-sm text-slate-600">
                    <a href="#" class="hover:text-blue-600 transition-colors">Vizyon</a>
                    <a href="#hizmetler" class="hover:text-blue-600 transition-colors">Hizmetlerimiz</a>
                    <a href="#simulasyon" class="hover:text-blue-600 transition-colors">GES Yatırım Hesaplama</a>
                    <a href="#paketler" class="hover:text-blue-600 transition-colors">Hazır Paketler</a>
                </div>
            </div>

            <!-- Focus Areas Column -->
            <div class="space-y-4">
                <h4 class="text-sm font-semibold tracking-wider uppercase text-slate-800 font-display">Çözümler</h4>
                <div class="flex flex-col space-y-2.5 text-sm text-slate-600">
                    @foreach($services as $service)
                    <a href="#hizmetler" class="hover:text-blue-600 transition-colors">{{ $service->title }}</a>
                    @endforeach
                </div>
            </div>

            <!-- Contact Column -->
            <div class="space-y-4">
                <h4 class="text-sm font-semibold tracking-wider uppercase text-slate-800 font-display">İletişim</h4>
                <div class="flex flex-col space-y-3.5 text-sm text-slate-600">
                    <div class="flex items-start gap-2.5">
                        <svg class="w-5 h-5 text-blue-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="leading-relaxed">{{ $settings->address }}</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:{{ $settings->email }}" class="hover:text-blue-600 transition-colors font-medium">{{ $settings->email }}</a>
                    </div>
                    <div class="flex items-center gap-2.5 font-semibold text-slate-800">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:{{ str_replace(' ', '', $settings->phone) }}" class="hover:text-blue-600 transition-colors font-bold">{{ $settings->phone }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto pt-8 border-t border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500">
            <p>© {{ date('Y') }} SFK Enerji A.Ş. Tüm hakları saklıdır.</p>
            <div class="flex space-x-6">
                <a href="#" onclick="toggleDrawer('privacy-drawer', true); return false;" class="hover:text-slate-800 transition-colors">Gizlilik Politikası</a>
                <a href="#" onclick="toggleDrawer('kvkk-drawer', true); return false;" class="hover:text-slate-800 transition-colors">KVKK Aydınlatma</a>
            </div>
        </div>
    </footer>

    <!-- Interactive Client Scripts -->
    <script>
        // Interactive custom cursor tracker (ambient lighting)
        const cursorLight = document.getElementById('cursorLight');
        if (cursorLight) {
            document.addEventListener('mousemove', (e) => {
                cursorLight.style.left = e.clientX + 'px';
                cursorLight.style.top = e.clientY + 'px';
            });
        }

        // Drawer mechanism
        function toggleDrawer(id, open) {
            const drawer = document.getElementById(id);
            const backdrop = document.getElementById('drawer-backdrop');
            
            if (open) {
                backdrop.classList.remove('hidden');
                setTimeout(() => {
                    backdrop.classList.add('opacity-100');
                    drawer.classList.remove('translate-x-full');
                }, 20);
            } else {
                drawer.classList.add('translate-x-full');
                backdrop.classList.remove('opacity-100');
                setTimeout(() => {
                    backdrop.classList.add('hidden');
                }, 500);
            }
        }

        function closeAllDrawers() {
            toggleDrawer('teklif-drawer', false);
            toggleDrawer('privacy-drawer', false);
            toggleDrawer('kvkk-drawer', false);
            toggleMobileNav(false);
        }

        // Mobile nav mechanism
        function toggleMobileNav(open) {
            const nav = document.getElementById('mobile-nav');
            const backdrop = document.getElementById('drawer-backdrop');
            
            if (open) {
                backdrop.classList.remove('hidden');
                setTimeout(() => {
                    backdrop.classList.add('opacity-100');
                    nav.classList.remove('translate-x-full');
                }, 20);
            } else {
                nav.classList.add('translate-x-full');
                backdrop.classList.remove('opacity-100');
                setTimeout(() => {
                    backdrop.classList.add('hidden');
                }, 500);
            }
        }

        // Form logic
        async function handleFormSubmit(event) {
            event.preventDefault();
            const name = document.getElementById('form-name').value;
            const phone = document.getElementById('form-phone').value;
            const email = document.getElementById('form-email').value;
            const interest = document.getElementById('form-interest').value;
            const message = document.getElementById('form-message').value;

            const submitBtn = event.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;
            submitBtn.innerText = 'Gönderiliyor...';
            submitBtn.disabled = true;

            try {
                const response = await fetch('{{ url("/send-quote") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ name, phone, email, interest, message })
                });

                if(response.ok) {
                    alert(`Sayın ${name}, teklif talebiniz başarıyla alınmıştır. En kısa sürede sizinle iletişime geçilecektir.`);
                    closeAllDrawers();
                    event.target.reset();
                } else {
                    let errorMessage = `Sunucu Hatası (HTTP ${response.status})`;
                    try {
                        const errData = await response.json();
                        errorMessage = errData.error || errorMessage;
                    } catch(parseErr) {
                        // Eğer sunucu JSON yerine HTML (hata sayfası) döndürdüyse
                    }
                    alert('Mail Gönderim Hatası: \n\n' + errorMessage + '\n\nLütfen ayarlarınızı kontrol edin.');
                }
            } catch (error) {
                alert('Sistemsel bir bağlantı hatası oluştu: ' + error.message);
            } finally {
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            }
        }

        // Open with custom interest selected
        function openDrawerWithPackage(buttonElement) {
            const packageName = buttonElement.getAttribute('data-title');
            const packageKva = buttonElement.getAttribute('data-kva');
            let packageFeatures = [];
            try {
                packageFeatures = JSON.parse(buttonElement.getAttribute('data-features') || '[]');
            } catch(e) {}

            const interestSelect = document.getElementById('form-interest');
            interestSelect.value = 'paket';
            
            const messageArea = document.getElementById('form-message');
            let message = `"${packageKva ? packageKva + ' ' : ''}${packageName}" paketiniz hakkında detaylı teknik şartname ve teklif almak istiyorum.\n\nPaket İçeriği:\n`;
            
            if (packageFeatures && packageFeatures.length > 0) {
                packageFeatures.forEach(f => {
                    message += `- ${f.name || ''}: ${f.value || ''}\n`;
                });
            }
            
            messageArea.value = message;
            
            toggleDrawer('teklif-drawer', true);
        }

        // Open with simulation results pre-filled
        function openDrawerWithSimResults() {
            const activeTab = currentCalcTab;
            const powerVal = document.getElementById('res-power').textContent;
            const savingsVal = document.getElementById('res-savings').textContent;
            
            const interestSelect = document.getElementById('form-interest');
            const messageArea = document.getElementById('form-message');
            
            if (activeTab === 'bill') {
                const billVal = document.getElementById('val-bill-text').textContent;
                interestSelect.value = 'ges-cati';
                messageArea.value = `Aylık ${billVal} ₺ faturamız için simülatörünüzün önerdiği ${powerVal} kWp gücündeki GES kurulumu hakkında fizibilite ve anahtar teslim kurulum teklifi almak istiyoruz.`;
            } else {
                const areaVal = document.getElementById('val-area-text').textContent;
                interestSelect.value = 'ges-cati';
                messageArea.value = `Toplam ${areaVal} m² çatı alanımız için simülatörünüzün önerdiği ${powerVal} kWp gücündeki GES kurulumu hakkında fizibilite ve anahtar teslim kurulum teklifi almak istiyoruz.`;
            }
            
            toggleDrawer('teklif-drawer', true);
        }

        // Calculator Logic
        let currentCalcTab = 'bill';

        function switchCalcTab(tab) {
            currentCalcTab = tab;
            const btnBill = document.getElementById('tab-bill');
            const btnArea = document.getElementById('tab-area');
            const containerBill = document.getElementById('calc-bill-container');
            const containerArea = document.getElementById('calc-area-container');

            if (tab === 'bill') {
                btnBill.className = "flex-1 py-3 text-sm font-semibold rounded-full bg-blue-600 text-white shadow-lg shadow-blue-500/20 transition-all duration-300";
                btnArea.className = "flex-1 py-3 text-sm font-semibold rounded-full text-slate-500 hover:text-slate-800 transition-all duration-300";
                containerBill.classList.remove('hidden');
                containerArea.classList.add('hidden');
            } else {
                btnArea.className = "flex-1 py-3 text-sm font-semibold rounded-full bg-blue-600 text-white shadow-lg shadow-blue-500/20 transition-all duration-300";
                btnBill.className = "flex-1 py-3 text-sm font-semibold rounded-full text-slate-500 hover:text-slate-800 transition-all duration-300";
                containerArea.classList.remove('hidden');
                containerBill.classList.add('hidden');
            }
            calculateGES();
        }

        function calculateGES() {
            let kwp = 0;
            let panels = 0;
            let annualSavings = 0;
            let co2 = 0;
            let trees = 0;

            if (currentCalcTab === 'bill') {
                const bill = parseFloat(document.getElementById('input-bill').value);
                document.getElementById('val-bill-text').textContent = bill.toLocaleString('tr-TR');

                // Let's model calculations based on monthly bill:
                // If monthly bill is TL, estimated monthly kWh consumption is: Bill / ~5 TL (average industrial/commercial tariff in Turkey including taxes)
                // Let's assume tariff = 5 TL/kWh. Monthly consumption = bill / 5.
                // Needed solar generation to offset = monthly consumption * 1.2 (to cover seasonal variances).
                // Required capacity kWp = (Offset monthly kWh / 115 kWh generated per month per kWp in TR)
                const monthlyKwh = bill / 5.0;
                kwp = (monthlyKwh * 1.15) / 115.0;
                // Bound capacity minimum & maximum for reasonable display
                if (kwp < 5) kwp = 5;
            } else {
                const area = parseFloat(document.getElementById('input-area').value);
                document.getElementById('val-area-text').textContent = area.toLocaleString('tr-TR');

                // 1 m² of roof can host roughly ~0.2 kWp of modern solar panels (approx 1 panel = 2m² = 450W to 550W)
                kwp = area * 0.18;
            }

            // Calculations based on kwp
            panels = Math.round(kwp * 1000 / 450); // Assuming 450W solar panels
            
            // In Turkey, 1 kWp system generates ~1350 kWh electricity per year.
            const annualGenKwh = kwp * 1350;
            
            // Assume 1 kWh tariff savings = 5 TL
            annualSavings = annualGenKwh * 5.0;
            
            // CO2 reduction: 1 kWh generated = ~0.45 kg of CO2 saved (or 0.00045 Tons)
            co2 = (annualGenKwh * 0.45) / 1000.0;
            
            // 1 Ton CO2 offset = approx 45 trees planted per year
            trees = Math.round(co2 * 45);

            // Update DOM with animations / values
            document.getElementById('res-power').textContent = kwp.toFixed(1);
            document.getElementById('res-panels').textContent = panels.toLocaleString('tr-TR');
            document.getElementById('res-savings').textContent = Math.round(annualSavings).toLocaleString('tr-TR');
            document.getElementById('res-co2').textContent = co2.toFixed(1);
            document.getElementById('res-trees').textContent = trees.toLocaleString('tr-TR');
        }

        // Reference Projects Slideshow Logic
        let currentSlideIdx = 0;
        const slides = document.querySelectorAll('.project-slide');
        const dots = document.querySelectorAll('.slide-dot');
        let slideInterval = setInterval(nextSlide, 6000);

        function showSlide(idx) {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 6000);

            slides.forEach((slide, i) => {
                if (i === idx) {
                    slide.classList.remove('opacity-0', 'z-0');
                    slide.classList.add('opacity-100', 'z-10');
                } else {
                    slide.classList.remove('opacity-100', 'z-10');
                    slide.classList.add('opacity-0', 'z-0');
                }
            });

            dots.forEach((dot, i) => {
                if (i === idx) {
                    dot.classList.remove('bg-slate-300');
                    dot.classList.add('bg-slate-800');
                } else {
                    dot.classList.remove('bg-slate-800');
                    dot.classList.add('bg-slate-300');
                }
            });
            currentSlideIdx = idx;
        }

        function nextSlide() {
            let nextIdx = (currentSlideIdx + 1) % slides.length;
            showSlide(nextIdx);
        }

        function prevSlide() {
            let prevIdx = (currentSlideIdx - 1 + slides.length) % slides.length;
            showSlide(prevIdx);
        }

        function goToSlide(idx) {
            showSlide(idx);
        }

        function filterPackages(category, btn) {
            // Update active button styles
            const buttons = document.querySelectorAll('.package-filter-btn');
            buttons.forEach(b => {
                b.className = 'package-filter-btn flex-shrink-0 flex items-center gap-2 px-6 py-2.5 rounded-lg text-slate-500 hover:bg-slate-50 hover:text-slate-900 text-sm font-medium transition-all';
            });
            if (btn) {
                btn.className = 'package-filter-btn flex-shrink-0 flex items-center gap-2 px-6 py-2.5 rounded-lg bg-slate-900 text-blue-400 text-sm font-semibold transition-all shadow-sm';
            }

            // Filter packages
            const packages = document.querySelectorAll('.package-card');
            packages.forEach(pkg => {
                if (pkg.getAttribute('data-category') === category) {
                    pkg.style.display = 'flex';
                } else {
                    pkg.style.display = 'none';
                }
            });
        }

        // Initial execution on load
        calculateGES();
        showSlide(0);
        
        // Initial package filter
        const firstFilterBtn = document.querySelector('.package-filter-btn');
        if (firstFilterBtn) {
            filterPackages('Off Grid', firstFilterBtn);
        }

        // Close on escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeAllDrawers();
            }
        });

        // Countdown Timer Logic
        function initCountdown() {
            const now = new Date();
            const currentYear = now.getFullYear();
            const currentMonth = now.getMonth();
            
            // End of the current month (last day at 23:59:59)
            const targetDate = new Date(currentYear, currentMonth + 1, 0, 23, 59, 59).getTime();

            const monthsTR = [
                "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", 
                "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
            ];
            
            const promoTextEl = document.getElementById('promo-month-text');
            if(promoTextEl) {
                promoTextEl.textContent = monthsTR[currentMonth].toUpperCase() + ' AYI FIRSATI';
            }

            const elDays = document.getElementById('cd-days');
            const elHours = document.getElementById('cd-hours');
            const elMinutes = document.getElementById('cd-minutes');
            const elSeconds = document.getElementById('cd-seconds');

            function updateTimer() {
                const currentTime = new Date().getTime();
                let distance = targetDate - currentTime;

                if (distance < 0) {
                    distance = 0;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                if(elDays) elDays.textContent = days.toString().padStart(2, '0');
                if(elHours) elHours.textContent = hours.toString().padStart(2, '0');
                if(elMinutes) elMinutes.textContent = minutes.toString().padStart(2, '0');
                if(elSeconds) elSeconds.textContent = seconds.toString().padStart(2, '0');
            }

            updateTimer(); // İlk açılışta 00:00:00:00 gecikmesini önlemek için hemen çalıştır
            setInterval(updateTimer, 1000);
        }
        initCountdown();
    </script>

</body>
</html>

