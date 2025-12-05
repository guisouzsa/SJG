@extends('layouts.template_style')

@section('title', 'Cadastro de Processo - SJG')
@section('breadcrumb', 'Processos / Novo')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">

    @if ($errors->any())
        <div class="px-6 pt-6 pb-2">
            <div class="flex items-start space-x-3 mb-4">
                <svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
                <div class="flex-1">
                    <h3 class="text-base font-bold text-red-600 mb-3">
                        Atenção! Existem erros no formulário:
                    </h3>
                    <ul class="space-y-2">
                        @foreach ($errors->all() as $error)
                            <li class="flex items-start text-sm text-red-600">
                                <svg class="w-4 h-4 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="border-b border-red-200 mb-4"></div>
        </div>
    @endif

    @if(session('success'))
        <div class="px-6 pt-6 pb-2">
            <div class="flex items-start space-x-3 mb-4">
                <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-sm font-semibold text-green-600">{{ session('success') }}</p>
            </div>
            <div class="border-b border-green-200 mb-4"></div>
        </div>
    @endif

    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Cadastrar Novo Processo</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Preencha os dados do processo</p>
            </div>
            <a href="{{ route('processos.index') }}" 
               class="text-sm font-semibold text-[#6699CC] hover:text-[#20729E] transition-colors duration-200 flex items-center space-x-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Voltar</span>
            </a>
        </div>
    </div>

    <form action="{{ route('processos.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label for="cliente_id" class="block text-sm font-bold text-[#003262] mb-2">Cliente <span class="text-red-500">*</span></label>
                <select name="cliente_id" id="cliente_id"
                        class="w-full px-4 py-3 rounded-lg border-2 @error('cliente_id') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">Selecione um cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                            {{ $cliente->nomeCompleto }}
                        </option>
                    @endforeach
                </select>
                @error('cliente_id')
                    <div class="flex items-center mt-2 text-sm text-red-600">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="numero_processo" class="block text-sm font-bold text-[#003262] mb-2">Número do Processo <span class="text-red-500">*</span></label>
                <input type="text" name="numero_processo" id="numero_processo" value="{{ old('numero_processo') }}"
                        class="w-full px-4 py-3 rounded-lg border-2 @error('numero_processo') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">

                @error('numero_processo')
                    <div class="flex items-center mt-2 text-sm text-red-600">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="tipo" class="block text-sm font-bold text-[#003262] mb-2">Tipo <span class="text-red-500">*</span></label>
                <select name="tipo" id="tipo"
                        class="w-full px-4 py-3 rounded-lg border-2 @error('tipo') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">Selecione</option>
                    <option value="Civil" {{ old('tipo') == 'Civil' ? 'selected' : '' }}>Processo Civil</option>
                    <option value="Penal" {{ old('tipo') == 'Penal' ? 'selected' : '' }}>Processo Penal</option>
                    <option value="Trabalhista" {{ old('tipo') == 'Trabalhista' ? 'selected' : '' }}>Processo Trabalhista</option>
                    <option value="Administrativo" {{ old('tipo') == 'Administrativo' ? 'selected' : '' }}>Processo Administrativo</option>
                    <option value="Eleitoral" {{ old('tipo') == 'Eleitoral' ? 'selected' : '' }}>Processo Eleitoral</option>
                    <option value="Constitucional" {{ old('tipo') == 'Constitucional' ? 'selected' : '' }}>Processo Constitucional</option>
                </select>
                @error('tipo')
                    <div class="flex items-center mt-2 text-sm text-red-600">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="status" class="block text-sm font-bold text-[#003262] mb-2">Status <span class="text-red-500">*</span></label>
                <select name="status" id="status"
                        class="w-full px-4 py-3 rounded-lg border-2 @error('status') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">Selecione</option>
                    <option value="Novo" {{ old('status') == 'Novo' ? 'selected' : '' }}>Novo</option>
                    <option value="Pronto" {{ old('status') == 'Pronto' ? 'selected' : '' }}>Pronto</option>
                    <option value="Em execução" {{ old('status') == 'Em execução' ? 'selected' : '' }}>Em execução</option>
                    <option value="Espera" {{ old('status') == 'Espera' ? 'selected' : '' }}>Espera (Bloqueado)</option>
                    <option value="Terminado" {{ old('status') == 'Terminado' ? 'selected' : '' }}>Terminado</option>
                </select>
                @error('status')
                    <div class="flex items-center mt-2 text-sm text-red-600">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-bold text-[#003262] mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="3"
                          class="w-full px-4 py-3 rounded-lg border-2 @error('descricao') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none resize-none">{{ old('descricao') }}</textarea>
                @error('descricao')
                    <div class="flex items-center mt-2 text-sm text-red-600">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-bold text-[#003262] mb-2">Documento</label>
                <div class="flex items-center space-x-4">
                    <label for="documento"
                           class="cursor-pointer px-4 py-2 bg-gradient-to-r from-[#003262] to-[#20729E] text-white rounded-lg font-semibold hover:opacity-90 transition duration-200">
                        Escolher Arquivo
                    </label>
                    <span id="file-name" class="text-gray-600 text-sm">Nenhum arquivo selecionado</span>
                </div>
                <input type="file" name="documento" id="documento" class="hidden" 
                       onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'Nenhum arquivo selecionado'">
                @error('documento')
                    <div class="flex items-center mt-2 text-sm text-red-600">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-end space-x-4 mt-8 pt-6 border-t border-[#9EB9D4]/30">
            <a href="{{ route('processos.index') }}" 
               class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all duration-200">
                Cancelar
            </a>
            <button type="submit"
                    class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all duration-300 shadow-md hover:shadow-xl">
                Cadastrar Processo
            </button>
        </div>
    </form>
</div>
@endsection
