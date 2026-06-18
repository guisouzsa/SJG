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
            <div class="relative">
                <x-text-input 
                    id="password" 
                    class="block w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] transition-all pr-10"
                    type="password"
                    name="password"
                    required 
                    autocomplete="new-password"
                    placeholder="Mínimo 8 caracteres"
                />
                <button 
                    type="button" 
                    onclick="togglePassword('password')" 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#6699CC] hover:text-[#003262] transition-colors"
                >
                    <svg id="password-eye" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Senha -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" class="text-[#003262] font-medium mb-2" />
            <div class="relative">
                <x-text-input 
                    id="password_confirmation" 
                    class="block w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#20729E] focus:ring-[#20729E] transition-all pr-10"
                    type="password"
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    placeholder="Digite a senha novamente"
                />
                <button 
                    type="button" 
                    onclick="togglePassword('password_confirmation')" 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#6699CC] hover:text-[#003262] transition-colors"
                >
                    <svg id="password_confirmation-eye" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
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