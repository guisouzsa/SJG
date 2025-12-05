@extends('layouts.template_style')

@section('title', 'Lista de Contratos - SJG')
@section('breadcrumb', 'Contratos')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-[#003262]">Contratos</h2>
        <a href="{{ route('contratos.create') }}" 
           class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl">
            Novo Contrato
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-[#9EB9D4]/30">
            <thead class="bg-gradient-to-r from-[#F0F8FF] to-white">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">ID</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Título</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Tipo</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Cliente</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Data Assinatura</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Data Vencimento</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Valor</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-[#9EB9D4]/20">
                @if(count($contratos) > 0)
                    @foreach($contratos as $contrato)
                        <tr class="hover:bg-[#F0F8FF] transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#003262]">
                                {{ $contrato->id }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $contrato->titulo }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $contrato->tipo }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $contrato->cliente?->nomeCompleto ?? '' }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $contrato->data_assinatura ? date('d/m/Y', strtotime($contrato->data_assinatura)) : '' }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $contrato->data_vencimento ? date('d/m/Y', strtotime($contrato->data_vencimento)) : '' }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                R$ {{ number_format($contrato->valor, 2, ',', '.') }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                                <a href="{{ route('contratos.edit', $contrato->id) }}" 
                                   class="text-[#6699CC] hover:text-[#20729E] font-semibold transition-colors duration-200">
                                    Editar
                                </a>

                                <form action="{{ route('contratos.destroy', $contrato->id) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este contrato?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center space-y-4">
                                <p class="text-lg font-semibold text-[#6699CC]">Nenhum contrato cadastrado</p>
                                <p class="text-sm text-gray-500 mt-1">Adicione contratos para começar a gerenciar</p>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
