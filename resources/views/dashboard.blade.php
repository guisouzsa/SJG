<x-app-layout>
    <div class="flex min-h-screen bg-gradient-to-br from-[#F0F8FF] via-[#9EB9D4]/10 to-[#6699CC]/20">
        
        <aside class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-72">
                <div class="flex flex-col flex-1 bg-gradient-to-b from-[#003262] to-[#001a3a] border-r border-[#2072AF]/20">


                    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                        
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl bg-gradient-to-r from-[#2072AF] to-[#6699CC] text-white shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="text-sm font-semibold">Dashboard</span>
                        </a>

                        <a href="{{ route('clientes.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="text-sm font-medium">Clientes</span>
                        </a>

                        <a href="{{ route('processos.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="text-sm font-medium">Processos</span>
                        </a>

                        <a href="{{ route('audiencias.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                            </svg>
                            <span class="text-sm font-medium">Audiências</span>
                        </a>

                        <a href="{{ route('tarefas.index') }}" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                            <span class="text-sm font-medium">Tarefas</span>
                        </a>

                        <a href="{{ route('contratos.index') }}" 
                            class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            <span class="text-sm font-medium">Contratos</span>
                        </a>

                        <div class="pt-4 border-t border-white/10 mt-4">
                            <a href="#" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-sm font-medium">Agenda</span>
                            </a>

                            <a href="#" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <span class="text-sm font-medium">Relatórios</span>
                            </a>

                            <a href="#" class="flex items-center space-x-3 px-4 py-3.5 rounded-xl text-[#9EB9D4] hover:text-white hover:bg-white/5 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-sm font-medium">Configurações</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </aside>

        <div class="flex-1 py-8 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                     
                


                   <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-[#2072AF]/20">
                        <div class="flex justify-between items-center gap-4">
                            <div>
                                <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Total Clientes</p>
                                <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalClientes }}</p>
                            </div>
                            <!-- Caixinha azul com ícone centralizado -->
                            <div class="bg-gradient-to-br from-[#2072AF] to-[#6699CC] p-4 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            </div>
                        </div>
                    </div>


                    
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-[#6699CC]/20">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Processos Ativos</p>
                                <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalProcessos ?? '142' }}</p>
                            </div>
                            <div class="bg-gradient-to-br from-[#6699CC] to-[#7BAFD4] p-4 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-[#7BAFD4]/20">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Próximas Audiências</p>
                                <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalAudiencias ?? '18' }}</p>
                            </div>
                            <div class="bg-gradient-to-br from-[#7BAFD4] to-[#9EB9D4] p-4 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-[#9EB9D4]/20">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Tarefas Pendentes</p>
                                <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalTarefas ?? '34' }}</p>
                            </div>
                            <div class="bg-gradient-to-br from-[#9EB9D4] to-[#2072AF] p-4 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    
                    <div class="lg:col-span-2 bg-white/80 backdrop-blur-sm rounded-xl shadow-md p-6 border border-[#003262]/10">
                        <h3 class="text-xl font-bold text-[#003262] mb-5">Atualizações Recentes</h3>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3 p-4 bg-gradient-to-r from-[#2072AF]/5 to-transparent rounded-lg border-l-4 border-[#2072AF]">
                                <div class="w-10 h-10 bg-[#2072AF]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#2072AF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-[#003262] text-sm">Novo cliente cadastrado</p>
                                    <p class="text-xs text-[#003262]/60 mt-1">Maria Silva Santos - há 2 horas</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 bg-gradient-to-r from-[#6699CC]/5 to-transparent rounded-lg border-l-4 border-[#6699CC]">
                                <div class="w-10 h-10 bg-[#6699CC]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#6699CC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-[#003262] text-sm">Audiência marcada para 20/11</p>
                                    <p class="text-xs text-[#003262]/60 mt-1">Processo 0001234-56 - há 3 horas</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 bg-gradient-to-r from-[#7BAFD4]/5 to-transparent rounded-lg border-l-4 border-[#7BAFD4]">
                                <div class="w-10 h-10 bg-[#7BAFD4]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#7BAFD4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-[#003262] text-sm">Contrato assinado</p>
                                    <p class="text-xs text-[#003262]/60 mt-1">Prestação de serviços - João Oliveira - há 5 horas</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 bg-gradient-to-r from-[#9EB9D4]/5 to-transparent rounded-lg border-l-4 border-[#9EB9D4]">
                                <div class="w-10 h-10 bg-[#9EB9D4]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#9EB9D4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-[#003262] text-sm">Tarefa concluída</p>
                                    <p class="text-xs text-[#003262]/60 mt-1">Protocolar petição inicial - há 1 dia</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 bg-gradient-to-r from-[#2072AF]/5 to-transparent rounded-lg border-l-4 border-[#2072AF]">
                                <div class="w-10 h-10 bg-[#2072AF]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#2072AF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-[#003262] text-sm">Novo processo cadastrado</p>
                                    <p class="text-xs text-[#003262]/60 mt-1">Ação Trabalhista - Processo 0001235-78 - há 1 dia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        
                        <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md p-6 border border-[#003262]/10">
                            <h3 class="text-xl font-bold text-[#003262] mb-5">Atalhos Rápidos</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="{{ route('clientes.create') }}" class="flex flex-col items-center justify-center p-4 bg-gradient-to-br from-[#2072AF]/10 to-[#2072AF]/5 hover:from-[#2072AF]/20 hover:to-[#2072AF]/10 rounded-xl border border-[#2072AF]/20 transition-all group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#2072AF] to-[#6699CC] rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-[#003262]">Novo Cliente</span>
                                </a>

                                <a href="{{ route('processos.create') }}" class="flex flex-col items-center justify-center p-4 bg-gradient-to-br from-[#6699CC]/10 to-[#6699CC]/5 hover:from-[#6699CC]/20 hover:to-[#6699CC]/10 rounded-xl border border-[#6699CC]/20 transition-all group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#6699CC] to-[#7BAFD4] rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-[#003262]">Novo Processo</span>
                                </a>

                                <a href="{{ route('audiencias.create') }}" class="flex flex-col items-center justify-center p-4 bg-gradient-to-br from-[#7BAFD4]/10 to-[#7BAFD4]/5 hover:from-[#7BAFD4]/20 hover:to-[#7BAFD4]/10 rounded-xl border border-[#7BAFD4]/20 transition-all group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#7BAFD4] to-[#9EB9D4] rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-[#003262]">Nova Audiência</span>
                                </a>

                                <a href="{{ route('tarefas.create') }}" class="flex flex-col items-center justify-center p-4 bg-gradient-to-br from-[#9EB9D4]/10 to-[#9EB9D4]/5 hover:from-[#9EB9D4]/20 hover:to-[#9EB9D4]/10 rounded-xl border border-[#9EB9D4]/20 transition-all group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#9EB9D4] to-[#2072AF] rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-[#003262]">Nova Tarefa</span>
                                </a>
                            </div>
                        </div>

                        <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md p-6 border border-[#003262]/10">
                            <h3 class="text-lg font-bold text-[#003262] mb-4">Tipos de Processos</h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-[#003262]">Civil</span>
                                        <span class="text-sm font-bold text-[#2072AF]">42%</span>
                                    </div>
                                    <div class="w-full bg-[#003262]/10 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-[#2072AF] to-[#6699CC] h-2 rounded-full" style="width: 42%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-[#003262]">Trabalhista</span>
                                        <span class="text-sm font-bold text-[#6699CC]">35%</span>
                                    </div>
                                    <div class="w-full bg-[#003262]/10 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-[#6699CC] to-[#7BAFD4] h-2 rounded-full" style="width: 35%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-[#003262]">Penal</span>
                                        <span class="text-sm font-bold text-[#7BAFD4]">23%</span>
                                    </div>
                                    <div class="w-full bg-[#003262]/10 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-[#7BAFD4] to-[#9EB9D4] h-2 rounded-full" style="width: 23%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md p-6 border border-[#003262]/10">
                        <h3 class="text-xl font-bold text-[#003262] mb-5">Tarefas: Concluídas vs Pendentes</h3>
                        <div class="space-y-5">
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-4 h-4 bg-gradient-to-br from-[#2072AF] to-[#6699CC] rounded"></div>
                                        <span class="text-sm font-medium text-[#003262]">Concluídas</span>
                                    </div>
                                    <span class="text-2xl font-bold text-[#2072AF]">156</span>
                                </div>
                                <div class="w-full bg-[#003262]/10 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-[#2072AF] to-[#6699CC] h-3 rounded-full" style="width: 68%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-4 h-4 bg-gradient-to-br from-[#9EB9D4] to-[#7BAFD4] rounded"></div>
                                        <span class="text-sm font-medium text-[#003262]">Pendentes</span>
                                    </div>
                                    <span class="text-2xl font-bold text-[#7BAFD4]">74</span>
                                </div>
                                <div class="w-full bg-[#003262]/10 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-[#9EB9D4] to-[#7BAFD4] h-3 rounded-full" style="width: 32%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-5 border-t border-[#003262]/10">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-[#003262]/60">Taxa de conclusão</span>
                                <span class="text-lg font-bold text-[#2072AF]">68%</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md p-6 border border-[#003262]/10">
                        <h3 class="text-xl font-bold text-[#003262] mb-5">Módulos do Sistema</h3>
                        <div class="grid grid-cols-2 gap-4">
                            
                            <a href="{{ route('clientes.index') }}" class="group relative overflow-hidden bg-gradient-to-br from-[#2072AF]/10 to-transparent rounded-xl border border-[#2072AF]/20 p-5 hover:shadow-lg transition-all">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-gradient-to-br from-[#2072AF] to-[#6699CC] p-3 rounded-xl mb-3 group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-[#003262] text-sm font-bold">Clientes</h4>
                                </div>
                            </a>

                            <a href="{{ route('processos.index') }}" class="group relative overflow-hidden bg-gradient-to-br from-[#6699CC]/10 to-transparent rounded-xl border border-[#6699CC]/20 p-5 hover:shadow-lg transition-all">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-gradient-to-br from-[#6699CC] to-[#7BAFD4] p-3 rounded-xl mb-3 group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-[#003262] text-sm font-bold">Processos</h4>
                                </div>
                            </a>

                            <a href="{{ route('audiencias.index') }}" class="group relative overflow-hidden bg-gradient-to-br from-[#7BAFD4]/10 to-transparent rounded-xl border border-[#7BAFD4]/20 p-5 hover:shadow-lg transition-all">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-gradient-to-br from-[#7BAFD4] to-[#9EB9D4] p-3 rounded-xl mb-3 group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-[#003262] text-sm font-bold">Audiências</h4>
                                </div>
                            </a>

                            <a href="{{ route('tarefas.index') }}" class="group relative overflow-hidden bg-gradient-to-br from-[#9EB9D4]/10 to-transparent rounded-xl border border-[#9EB9D4]/20 p-5 hover:shadow-lg transition-all">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-gradient-to-br from-[#9EB9D4] to-[#2072AF] p-3 rounded-xl mb-3 group-hover:scale-110 transition-transform">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-[#003262] text-sm font-bold">Tarefas</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>