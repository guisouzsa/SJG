@extends('layouts.app-with-sidebar')

@section('title', 'Configurações - SJG')
@section('breadcrumb', 'Configurações')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div>
            <h2 class="text-2xl font-bold text-[#003262]">Configurações</h2>
            <p class="text-sm mt-1 text-[#6699CC]">Gerencie as configurações do sistema</p>
        </div>
    </div>

    <div class="p-6">
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-[#9EB9D4] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <h3 class="text-xl font-semibold text-[#003262] mb-2">Configurações em Construção</h3>
            <p class="text-[#6699CC]">Este módulo está sendo desenvolvido. Em breve você poderá gerenciar todas as configurações do sistema.</p>
        </div>
    </div>
</div>
@endsection
