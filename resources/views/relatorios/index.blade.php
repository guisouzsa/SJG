@extends('layouts.app-with-sidebar')

@section('title', 'Relatórios - SJG')
@section('breadcrumb', 'Relatórios')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Relatórios</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Gere relatórios e análises do sistema</p>
            </div>
            <button class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <span>Novo Relatório</span>
            </button>
        </div>
    </div>

    <div class="p-6">
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-[#9EB9D4] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
            <h3 class="text-xl font-semibold text-[#003262] mb-2">Relatórios em Construção</h3>
            <p class="text-[#6699CC]">Este módulo está sendo desenvolvido. Em breve você poderá gerar relatórios e análises detalhadas do sistema.</p>
        </div>
    </div>
</div>
@endsection
