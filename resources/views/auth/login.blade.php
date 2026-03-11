<x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-bold text-slate-700 mb-2">{{ __('Email Address') }}</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-regular fa-envelope text-slate-400"></i>
                    </div>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                        class="block w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition duration-300 shadow-sm"
                        placeholder="admin@example.com">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs font-bold text-primary hover:text-emerald-800 transition">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-lock text-slate-400"></i>
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="block w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition duration-300 shadow-sm"
                        placeholder="••••••••">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me & Submit Button -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2">
                <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                    <div class="relative flex items-center justify-center w-5 h-5 mr-3">
                        <input id="remember_me" type="checkbox" name="remember" class="peer appearance-none w-5 h-5 border-2 border-slate-300 rounded focus:ring-primary focus:ring-offset-0 checked:bg-primary checked:border-primary transition cursor-pointer">
                        <i class="fa-solid fa-check absolute text-white text-[10px] opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity duration-200"></i>
                    </div>
                    <span class="text-sm font-medium text-slate-600 group-hover:text-slate-800 transition">{{ __('Ingat Saya') }}</span>
                </label>

                <button type="submit" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-8 py-3.5 bg-primary hover:bg-emerald-700 text-white text-sm font-bold rounded-xl focus:outline-none focus:ring-4 focus:ring-primary/30 transition shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0">
                    {{ __('Log in') }} <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </div>
        </form>
</x-guest-layout>
