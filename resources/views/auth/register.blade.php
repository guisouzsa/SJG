<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-[#003262] mb-2">Criar Conta</h2>
        <p class="text-gray-600 text-sm">Preencha os dados para começar</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome Completo')" class="text-[#003262] font-medium mb-2" />
            <x-text-input 
                id="name" 
                class="block w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] transition-all" 
                type="text" 
                name="name" 
                :value="old('name')" 
                required 
                autofocus 
                autocomplete="name"
                placeholder="Seu nome completo"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- E-mail -->
        <div>
            <x-input-label for="email" :value="__('E-mail')" class="text-[#003262] font-medium mb-2" />
            <x-text-input 
                id="email" 
                class="block w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] transition-all" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autocomplete="username"
                placeholder="seu@email.com"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div>
            <x-input-label for="password" :value="__('Senha')" class="text-[#003262] font-medium mb-2" />
            <x-text-input 
                id="password" 
                class="block w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] transition-all"
                type="password"
                name="password"
                required 
                autocomplete="new-password"
                placeholder="Mínimo 8 caracteres"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Senha -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" class="text-[#003262] font-medium mb-2" />
            <x-text-input 
                id="password_confirmation" 
                class="block w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] transition-all"
                type="password"
                name="password_confirmation" 
                required 
                autocomplete="new-password"
                placeholder="Digite a senha novamente"
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Termos -->
        <div class="flex items-start">
            <input 
                id="terms" 
                type="checkbox" 
                class="mt-1 rounded border-gray-300 text-[#20729E] shadow-sm focus:ring-[#20729E]" 
                required
            >
            <label for="terms" class="ms-2 text-sm text-gray-600">
                Concordo com os 
                <a href="#" class="text-[#20729E] hover:text-[#003262] font-medium">Termos de Uso</a> 
                e 
                <a href="#" class="text-[#20729E] hover:text-[#003262] font-medium">Política de Privacidade</a>
            </label>
        </div>

        <!-- Botão de Cadastro -->
        <div class="pt-2">
            <button 
                type="submit"
                class="w-full bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white font-semibold py-3.5 px-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
                Criar Conta
            </button>
        </div>

        <!-- Link para Login -->
        <div class="text-center pt-4 border-t border-gray-200">
            <span class="text-sm text-gray-600">Já possui uma conta?</span>
            <a href="{{ route('login') }}" class="text-sm text-[#20729E] hover:text-[#003262] font-semibold ml-1 transition-colors">
                Faça login aqui
            </a>
        </div>
    </form>
</x-guest-layout>