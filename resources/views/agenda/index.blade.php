@extends('layouts.app-with-sidebar')

@section('title', 'Agenda - SJG')
@section('breadcrumb', 'Agenda')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Agenda</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Organize seus compromissos e prazos</p>
            </div>
            <button class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <span>Novo Evento</span>
            </button>
        </div>
    </div>

    <div class="p-6">
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-[#9EB9D4] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <h3 class="text-xl font-semibold text-[#003262] mb-2">Agenda em Construção</h3>
            <p class="text-[#6699CC]">Este módulo está sendo desenvolvido. Em breve você poderá gerenciar sua agenda de compromissos e prazos.</p>
        </div>
    </div>
</div>
@endsection
