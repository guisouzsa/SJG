<x-guest-layout>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-[#003262]">Bem-vindo de volta!</h2>
        <p class="text-gray-600 mt-2">Entre com suas credenciais para continuar</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-[#003262] font-medium" />
            <x-text-input 
                id="email" 
                class="block mt-2 w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] focus:ring-2 transition-all" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
                placeholder="seu@email.com"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Senha')" class="text-[#003262] font-medium" />
            <div class="relative">
                <x-text-input 
                    id="password" 
                    class="block mt-2 w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] focus:ring-2 transition-all pr-10"
                    type="password"
                    name="password"
                    required 
                    autocomplete="current-password"
                    placeholder="••••••••"
                />
                <button 
                    type="button" 
                    onclick="togglePassword('password')" 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#6699CC] hover:text-[#003262] transition-colors mt-2"
                >
                    <svg id="password-eye" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="rounded border-gray-300 text-[#20729E] shadow-sm focus:ring-[#20729E] focus:ring-2" 
                    name="remember"
                >
                <span class="ms-2 text-sm text-gray-600">Lembrar de mim</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-[#20729E] hover:text-[#003262] font-medium transition-colors" href="{{ route('password.request') }}">
                    Esqueceu a senha?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="space-y-4 pt-2">
            <button 
                type="submit"
                class="w-full bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
                Entrar
            </button>

            @if (Route::has('register'))
                <div class="text-center">
                    <span class="text-sm text-gray-600">Não tem uma conta?</span>
                    <a href="{{ route('register') }}" class="text-sm text-[#20729E] hover:text-[#003262] font-semibold ml-1 transition-colors">
                        Cadastre-se
                    </a>
                </div>
            @endif
        </div>
    </form>
    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const eye = document.getElementById(fieldId + '-eye');
            
            if (field.type === 'password') {
                field.type = 'text';
                eye.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-2.391m5.005-2.905A9.005 9.005 0 0112 5c4.478 0 8.268 2.943 9.543 7a9.97 9.97 0 01-1.563 2.391m-5.005 2.905a9.06 9.06 0 01-5.657-3.515m5.657 3.515l3.536 3.536c.195.195.45.293.707.293a1 1 0 000-2l-.707-.707a1 1 0 00-1.414 0zm0-5.657l-3.536-3.536"></path>';
            } else {
                field.type = 'password';
                eye.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
            }
        }
    </script>
</x-guest-layout>