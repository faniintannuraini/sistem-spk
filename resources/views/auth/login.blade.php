<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="h-full bg-white antialiased text-gray-900">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left Banner Section (Hidden on Mobile) -->
        <div class="relative hidden md:flex md:w-[45%] lg:w-[50%] xl:w-[55%] flex-col justify-between p-12 overflow-hidden bg-slate-900">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 bg-cover bg-center transform scale-105 transition-transform duration-10000" style="background-image: url('https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?q=80&w=1600&auto=format&fit=crop');"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-slate-950/50"></div>

            <!-- Top Floating Badge -->
            <div class="relative z-10 self-start">
                <div class="flex items-center space-x-3 rounded-2xl border border-white/10 bg-white/5 p-4 shadow-2xl backdrop-blur-xl">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/20 text-blue-300">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-white">Analisis Real-time</div>
                        <div class="text-xs text-slate-300">Memproses 500+ Titik Data SKU</div>
                    </div>
                </div>
            </div>

            <!-- Bottom Content -->
            <div class="relative z-10 space-y-6 max-w-xl">
                <h1 class="text-4xl lg:text-5xl font-bold tracking-tight text-white leading-tight">
                    Tingkatkan perjalanan keputusan laptop Anda.
                </h1>
                <p class="text-base lg:text-lg text-slate-300 font-light leading-relaxed">
                    Memanfaatkan Teknik Order of Preference by Similarity to Ideal Solution (TOPSIS) untuk memberikan rekomendasi perangkat keras yang akurat secara matematis dan tidak bias.
                </p>
                
                <div class="pt-4 flex items-center space-x-2">
                    <span class="inline-block w-2.5 h-2.5 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-widest text-slate-300 uppercase">MESIN SPK CERDAS V2.4</span>
                </div>
            </div>
        </div>

        <!-- Right Form Section -->
        <div class="flex-1 flex flex-col justify-between p-8 sm:p-12 md:p-16 lg:p-20 bg-white">
            <!-- Top Spacing/Empty wrapper on mobile -->
            <div class="hidden sm:block"></div>

            <!-- Central Form Card -->
            <div class="max-w-md w-full mx-auto space-y-8 my-auto">
                <!-- Brand & Logo -->
                <div class="space-y-6">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-500/20">
                        <!-- Custom Blue Logo SVG -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zm1 2v8h14V7H5zm-2 10h18v1H3v-1z"/>
                        </svg>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="text-sm font-bold tracking-wider text-blue-600 uppercase">TOPLAP</div>
                        <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                            Sistem Pendukung Keputusan
                        </h2>
                        <p class="text-sm text-slate-500">
                            SistemPendukungKeputusanmenggunakanTOPSIS
                        </p>
                    </div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-semibold text-slate-700">Email Kerja</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input id="email" 
                                   type="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="nama@perusahaan.com"
                                   required 
                                   autofocus 
                                   autocomplete="username"
                                   class="block w-full rounded-2xl border border-slate-200 bg-slate-50/50 py-3.5 pl-12 pr-4 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-500/10 transition-all duration-200" />
                        </div>
                        @if ($errors->has('email'))
                            <p class="text-xs text-red-600 mt-1.5 font-medium">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label for="password" class="text-sm font-semibold text-slate-700">Kata Sandi</label>
                            @if (Route::has('password.request'))
                                <a class="text-xs font-semibold text-blue-600 hover:text-blue-700 transition-colors" href="{{ route('password.request') }}">
                                    Lupa Kata Sandi?
                                </a>
                            @endif
                        </div>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input id="password" 
                                   type="password" 
                                   name="password" 
                                   placeholder="••••••••"
                                   required 
                                   autocomplete="current-password"
                                   class="block w-full rounded-2xl border border-slate-200 bg-slate-50/50 py-3.5 pl-12 pr-12 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-blue-500/10 transition-all duration-200" />
                            <button type="button" 
                                    onclick="togglePasswordVisibility()" 
                                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400 hover:text-slate-600 transition-colors">
                                <svg id="eye-icon-visible" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg id="eye-icon-hidden" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                        @if ($errors->has('password'))
                            <p class="text-xs text-red-600 mt-1.5 font-medium">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" 
                               type="checkbox" 
                               name="remember" 
                               class="h-4.5 w-4.5 rounded border-slate-300 text-blue-600 focus:ring-blue-500/20" />
                        <label for="remember_me" class="ml-2 text-sm text-slate-600">Tetap masuk selama 30 hari</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="flex w-full items-center justify-center space-x-2 rounded-2xl bg-blue-600 py-4 px-4 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500/25 transition-all duration-200 cursor-pointer">
                        <span>Masuk ke Dashboard</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Footer -->
            <div class="flex flex-col sm:flex-row items-center justify-between border-t border-slate-100 pt-8 mt-12 text-xs text-slate-500 gap-4">
                <div>© 2024 TOPLAP Inc.</div>
                <div class="flex items-center space-x-6 font-medium">
                    <a href="#" class="hover:text-slate-800 transition-colors">Pusat Bantuan</a>
                    <a href="#" class="hover:text-slate-800 transition-colors">Privasi</a>
                    <a href="#" class="hover:text-slate-800 transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Toggle Password Visibility JS -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const visibleIcon = document.getElementById('eye-icon-visible');
            const hiddenIcon = document.getElementById('eye-icon-hidden');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                visibleIcon.classList.add('hidden');
                hiddenIcon.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                visibleIcon.classList.remove('hidden');
                hiddenIcon.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
