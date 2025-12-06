@extends('layouts.template_style')

@section('title', 'Lista de Clientes - SJG')
@section('breadcrumb', 'Clientes')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Clientes</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Gerencie a carteira de clientes do escritório</p>
            </div>
            <a href="{{ route('clientes.create') }}" 
               class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <span>Novo Cliente</span>
            </a>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-[#9EB9D4]/30">
            <thead class="bg-gradient-to-r from-[#F0F8FF] to-white">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Nome</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">CPF/CNPJ</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Telefone</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Endereço</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-[#9EB9D4]/20">
                @if(count($clientes) > 0)
                    @foreach($clientes as $cliente)
                        <tr class="hover:bg-[#F0F8FF] transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#003262]">{{ $cliente->nomeCompleto }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $cliente->cpf_Cnpj }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $cliente->telefone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-[#20729E]">{{ $cliente->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $cliente->endereco }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                                <a href="{{ route('clientes.edit', $cliente->id) }}" 
                                   class="text-[#6699CC] hover:text-[#20729E] font-semibold transition-colors duration-200">
                                    Editar
                                </a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center space-y-4">
                                <div class="w-20 h-20 bg-[#F0F8FF] rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-[#9EB9D4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-lg font-semibold text-[#6699CC]">Nenhum cliente cadastrado</p>
                                    <p class="text-sm text-gray-500 mt-1">Adicione clientes para começar a gerenciar processos</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection