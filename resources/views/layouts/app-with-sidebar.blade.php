<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SJG - Sistema Jurídico')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F0F8FF] min-h-screen font-sans antialiased">

<div class="flex min-h-screen bg-gradient-to-br from-[#F0F8FF] via-[#9EB9D4]/10 to-[#6699CC]/20">
    
    <aside class="hidden lg:flex lg:flex-shrink-0">
        <div class="flex flex-col w-72">
            <div class="flex flex-col flex-1 bg-gradient-to-b from-[#003262] to-[#001a3a] border-r border-[#2072AF]/20">
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl @if(request()->route()->getName() === 'dashboard') bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg @else text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all @endif">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span class="text-sm font-semibold">Dashboard</span>
                    </a>

                    <a href="{{ route('clientes.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl @if(str_contains(request()->route()->getName(), 'clientes')) bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg @else text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all @endif">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="text-sm font-medium">Clientes</span>
                    </a>

                    <a href="{{ route('processos.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl @if(str_contains(request()->route()->getName(), 'processos')) bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg @else text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all @endif">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm font-medium">Processos</span>
                    </a>

                    <a href="{{ route('audiencias.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl @if(str_contains(request()->route()->getName(), 'audiencias')) bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg @else text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all @endif">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                        <span class="text-sm font-medium">Audiências</span>
                    </a>

                    <a href="{{ route('tarefas.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl @if(str_contains(request()->route()->getName(), 'tarefas')) bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg @else text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all @endif">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <span class="text-sm font-medium">Tarefas</span>
                    </a>

                    <a href="{{ route('contratos.index') }}" 
                        class="flex items-center space-x-3 px-4 py-3.5 rounded-xl @if(str_contains(request()->route()->getName(), 'contratos')) bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg @else text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all @endif">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        <span class="text-sm font-medium">Contratos</span>
                    </a>
                </nav>

                <div class="px-4 py-6 border-t border-[#2072AF]/20">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            <span class="text-sm font-medium">Sair</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        <header class="bg-gradient-to-r from-[#003262] to-[#20729E] shadow-lg">
            <div class="px-6 py-4 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img src="/images/logo.png" alt="Logo" class="w-12 h-12">
                    <div>
                        <p class="text-sm font-semibold text-white">SJG</p>
                        <p class="text-xs text-[#9EB9D4]">Sistema Jurídico</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-2 text-white hover:text-[#9EB9D4] transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium">Perfil</span>
                    </a>
                </div>
            </div>
        </header>

        <div class="bg-white border-b border-[#9EB9D4]">
            <div class="px-6 py-3">
                <div class="flex items-center space-x-2 text-sm">
                    <svg class="w-4 h-4 text-[#6699CC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="text-[#9EB9D4]">/</span>
                    <span class="text-[#003262] font-medium">@yield('breadcrumb', 'Dashboard')</span>
                </div>
            </div>
        </div>

        <main class="flex-1 overflow-auto p-8">
            @yield('content')
        </main>
    </div>
</div>

@if(session('created'))
<div id="modal-created" class="fixed inset-0 bg-black/50 backdrop-blur-md flex items-center justify-center z-50">
    <div class="bg-[#003264] text-white w-[420px] p-6 rounded-xl shadow-2xl animate-zoom">
        <h2 class="text-xl font-semibold mb-3">Cadastrado com sucesso</h2>
        <p class="text-sm leading-normal mb-5">Seu cadastro foi salvo no sistema.<br>Clique no botão abaixo para retornar e continuar utilizando o sistema normalmente.</p>
        <button onclick="document.getElementById('modal-created').remove()" class="w-full bg-white text-[#003264] font-semibold py-2 rounded-lg shadow hover:bg-gray-100">OK</button>
    </div>
</div>
@endif

@if(session('updated'))
<div id="modal-updated" class="fixed inset-0 bg-black/50 backdrop-blur-md flex items-center justify-center z-50">
    <div class="bg-[#003264] text-white w-[420px] p-6 rounded-xl shadow-2xl animate-zoom">
        <h2 class="text-xl font-semibold mb-3">Atualizado com sucesso</h2>
        <p class="text-sm leading-normal mb-5">As informações foram alteradas corretamente.<br>Você pode seguir usando o sistema normalmente clicando no botão abaixo.</p>
        <button onclick="document.getElementById('modal-updated').remove()" class="w-full bg-white text-[#003264] font-semibold py-2 rounded-lg shadow hover:bg-gray-100">OK</button>
    </div>
</div>
@endif

@if(session('deleted'))
<div id="modal-deleted" class="fixed inset-0 bg-black/50 backdrop-blur-md flex items-center justify-center z-50">
    <div class="bg-[#003264] text-white w-[420px] p-6 rounded-xl shadow-2xl animate-zoom">
        <h2 class="text-xl font-semibold mb-3">Deletado com sucesso</h2>
        <p class="text-sm leading-normal mb-5">O registro foi removido do sistema.<br>Clique em OK para retornar à tela anterior.</p>
        <button onclick="document.getElementById('modal-deleted').remove()" class="w-full bg-white text-[#003264] font-semibold py-2 rounded-lg shadow hover:bg-gray-100">OK</button>
    </div>
</div>
@endif

<style>
@keyframes zoom {
    from { opacity: 0; transform: scale(0.9); }
    to   { opacity: 1; transform: scale(1); }
}
.animate-zoom { animation: zoom .25s ease-out; }
</style>

</body>
</html>
