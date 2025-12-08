<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SJG - Sistema Jurídico')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F0F8FF] min-h-screen font-sans antialiased">
   <header class="bg-gradient-to-r from-[#003262] to-[#20729E] shadow-lg min-h-[20px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-2">
                <div class="flex items-center space-x-12">
                    <div class="flex items-center space-x-3">
                        <div class="w-14 h-14 rounded-lg shadow-md overflow-hidden">
                            <img src="/images/logo.png" alt="Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <nav class="hidden md:flex space-x-1">
                        <a href="{{ route('clientes.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Clientes</a>
                        <a href="{{ route('processos.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Processos</a>
                        <a href="{{ route('audiencias.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Audiências</a>
                        <a href="{{ route('tarefas.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Tarefas</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-xs text-[#9EB9D4] font-semibold">Sistema Jurídico</p>
                        <p class="text-xs text-white/70">Gestão Advocatícia</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

   
    <div class="bg-white border-b border-[#9EB9D4]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex items-center space-x-2 text-sm">
                <svg class="w-4 h-4 text-[#6699CC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="text-[#9EB9D4]">/</span>
                <span class="text-[#003262] font-medium">@yield('breadcrumb', 'Dashboard')</span>
            </div>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>


    @if(session('created'))
    <div id="modal-created" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

        <div class="bg-[#003264] text-white w-[420px] p-6 rounded-xl shadow-2xl animate-zoom">
            <h2 class="text-xl font-semibold mb-3">Cadastrado com sucesso</h2>
            <p class="text-sm leading-normal mb-5">
                Seu cadastro foi salvo no sistema. <br>
                Clique no botão abaixo para retornar e continuar utilizando o sistema normalmente.
            </p>

            <button onclick="document.getElementById('modal-created').remove()"
                    class="w-full bg-white text-[#003264] font-semibold py-2 rounded-lg shadow hover:bg-gray-100">
                OK
            </button>
        </div>

    </div>
    @endif


    @if(session('updated'))
    <div id="modal-updated" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

        <div class="bg-[#003264] text-white w-[420px] p-6 rounded-xl shadow-2xl animate-zoom">
            <h2 class="text-xl font-semibold mb-3">Atualizado com sucesso</h2>
            <p class="text-sm leading-normal mb-5">
                As informações foram alteradas corretamente. <br>
                Você pode seguir usando o sistema normalmente clicando no botão abaixo.
            </p>

            <button onclick="document.getElementById('modal-updated').remove()"
                    class="w-full bg-white text-[#003264] font-semibold py-2 rounded-lg shadow hover:bg-gray-100">
                OK
            </button>
        </div>

    </div>
    @endif


    @if(session('deleted'))
    <div id="modal-deleted" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

        <div class="bg-[#003264] text-white w-[420px] p-6 rounded-xl shadow-2xl animate-zoom">
            <h2 class="text-xl font-semibold mb-3">Deletado com sucesso</h2>
            <p class="text-sm leading-normal mb-5">
                O registro foi removido do sistema. <br>
                Clique em OK para retornar à tela anterior.
            </p>

            <button onclick="document.getElementById('modal-deleted').remove()"
                    class="w-full bg-white text-[#003264] font-semibold py-2 rounded-lg shadow hover:bg-gray-100">
                OK
            </button>
        </div>

    </div>
    @endif


    <style>
        @keyframes zoom {
            from { opacity: 0; transform: scale(0.9); }
            to   { opacity: 1; transform: scale(1); }
        }
        .animate-zoom {
            animation: zoom .25s ease-out;
        }
    </style>

</body>
</html>