<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            
            {{-- Logo & Title --}}
            <div class="text-center">
                <div class="mx-auto h-16 w-16 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-4">
                    <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-white tracking-tight">
                    Buat Akun Baru
                </h2>
                <p class="mt-2 text-sm text-blue-200">
                    Daftar untuk mulai menggunakan sistem
                </p>
            </div>

            {{-- Card Register --}}
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/20 p-8">
                
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    {{-- Name --}}
                    <div>
                        <x-input-label for="name" value="Nama Lengkap" class="text-white" />
                        <x-text-input id="name" 
                            class="block mt-1 w-full bg-white/10 border-white/20 text-white placeholder-blue-200 focus:border-indigo-400 focus:ring-indigo-400" 
                            type="text" 
                            name="name" 
                            :value="old('name')" 
                            required 
                            autofocus 
                            autocomplete="name"
                            placeholder="Nama lengkap" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    {{-- Email --}}
                    <div>
                        <x-input-label for="email" value="Email" class="text-white" />
                        <x-text-input id="email" 
                            class="block mt-1 w-full bg-white/10 border-white/20 text-white placeholder-blue-200 focus:border-indigo-400 focus:ring-indigo-400" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autocomplete="username"
                            placeholder="email@example.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- Password --}}
                    <div>
                        <x-input-label for="password" value="Password" class="text-white" />
                        <x-text-input id="password" 
                            class="block mt-1 w-full bg-white/10 border-white/20 text-white placeholder-blue-200 focus:border-indigo-400 focus:ring-indigo-400"
                            type="password"
                            name="password"
                            required 
                            autocomplete="new-password"
                            placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <x-input-label for="password_confirmation" value="Konfirmasi Password" class="text-white" />
                        <x-text-input id="password_confirmation" 
                            class="block mt-1 w-full bg-white/10 border-white/20 text-white placeholder-blue-200 focus:border-indigo-400 focus:ring-indigo-400"
                            type="password"
                            name="password_confirmation"
                            required 
                            autocomplete="new-password"
                            placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    {{-- Tombol Register --}}
                    <div class="pt-2">
                        <x-primary-button class="w-full justify-center py-3 text-base font-semibold bg-indigo-600 hover:bg-indigo-500 focus:bg-indigo-500 active:bg-indigo-700">
                            Daftar Sekarang
                        </x-primary-button>
                    </div>
                </form>

                {{-- Link ke Login --}}
                <div class="mt-6 text-center">
                    <p class="text-sm text-blue-200">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="font-semibold text-white hover:text-indigo-300 transition">
                            Login di sini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>