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
            <x-text-input 
                id="password" 
                class="block mt-2 w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] focus:ring-2 transition-all"
                type="password"
                name="password"
                required 
                autocomplete="current-password"
                placeholder="••••••••"
            />
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
</x-guest-layout>