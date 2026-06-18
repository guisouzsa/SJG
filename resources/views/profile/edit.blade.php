@extends('layouts.app-with-sidebar')

@section('title', 'Perfil - SJG')
@section('breadcrumb', 'Perfil')

@section('content')
    <div class="grid grid-cols-1 gap-6 max-w-4xl">
        <!-- Atualizar Informações -->
        <div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
            <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
                <h2 class="text-2xl font-bold text-[#003262]">Informações do Perfil</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Atualize suas informações pessoais</p>
            </div>
            <div class="p-6">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Atualizar Senha -->
        <div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
            <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
                <h2 class="text-2xl font-bold text-[#003262]">Alterar Senha</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Mantenha sua senha segura e atualizada</p>
            </div>
            <div class="p-6">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Deletar Conta -->
        <div class="bg-white rounded-xl shadow-lg border-l-4 border-red-400">
            <div class="px-6 py-5 border-b border-red-200">
                <h2 class="text-2xl font-bold text-red-600">Deletar Conta</h2>
                <p class="text-sm mt-1 text-red-500">Esta ação é irreversível</p>
            </div>
            <div class="p-6">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection
