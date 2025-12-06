@extends('layouts.template_style')

@section('title', 'Nova Tarefa - SJG')
@section('breadcrumb', 'Tarefas / Nova')

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
                                <svg class="w-4 h-4 mt-0.5 mr-2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" class="fill-red-600"/>
                                    <path d="M12 7v5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    <circle cx="12" cy="16" r="1.5" fill="white"/>
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

    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <h2 class="text-2xl font-bold text-[#003262]">Nova Tarefa</h2>
        <p class="text-sm mt-1 text-[#6699CC]">Preencha os dados da tarefa</p>
    </div>

    <form action="{{ route('tarefas.store') }}" method="POST" class="p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- TÍTULO --}}
            <div>
                <label class="block text-sm font-bold text-[#003262] mb-2">
                    Título da tarefa <span class="text-red-500">*</span>
                </label>
                <input type="text" name="titulo" value="{{ old('titulo') }}"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('titulo') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 outline-none"
                    placeholder="Ex.: Relatório mensal">

                @error('titulo')
                    <p class="flex items-center text-red-600 text-sm mt-1">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" class="fill-red-600"/>
                            <path d="M12 7v5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="16" r="1.5" fill="white"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- DATA LIMITE --}}
            <div>
                <label class="block text-sm font-bold text-[#003262] mb-2">
                    Data limite <span class="text-red-500">*</span>
                </label>
                <input type="date" name="data_limite" value="{{ old('data_limite') }}"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('data_limite') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 outline-none">

                @error('data_limite')
                    <p class="flex items-center text-red-600 text-sm mt-1">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" class="fill-red-600"/>
                            <path d="M12 7v5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="16" r="1.5" fill="white"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- STATUS --}}
            <div>
                <label class="block text-sm font-bold text-[#003262] mb-2">
                    Status <span class="text-red-500">*</span>
                </label>
                <select name="status"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('status') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 outline-none">
                    <option value="">Selecione</option>
                    <option value="Pendente" {{ old('status') == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                    <option value="Concluída" {{ old('status') == 'Concluída' ? 'selected' : '' }}>Concluída</option>
                    <option value="Atrasada" {{ old('status') == 'Atrasada' ? 'selected' : '' }}>Atrasada</option>
                </select>

                @error('status')
                    <p class="flex items-center text-red-600 text-sm mt-1">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" class="fill-red-600"/>
                            <path d="M12 7v5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="16" r="1.5" fill="white"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- DESCRIÇÃO --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-bold text-[#003262] mb-2">Descrição</label>
                <textarea name="descricao" rows="3"
                    class="w-full px-4 py-3 rounded-lg border-2 @error('descricao') border-red-500 bg-red-50 @else border-[#9EB9D4] @enderror focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 outline-none resize-none"
                    placeholder="Detalhes da tarefa (opcional)">{{ old('descricao') }}</textarea>

                @error('descricao')
                    <p class="flex items-center text-red-600 text-sm mt-1">
                        <svg class="w-4 h-4 mr-1 flex-shrink-0" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" class="fill-red-600"/>
                            <path d="M12 7v5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="16" r="1.5" fill="white"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

        </div>

        {{-- AÇÕES --}}
        <div class="flex items-center justify-end space-x-4 mt-8 pt-6 border-t border-[#9EB9D4]/30">
            <a href="{{ route('tarefas.index') }}" 
                class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all">
                Cancelar
            </a>
            <button type="submit"
                class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all shadow-md hover:shadow-xl">
                Cadastrar Tarefa
            </button>
        </div>

    </form>
</div>
@endsection
