#!/usr/bin/env php
<?php

require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Simular um usuário autenticado com ID 1
$userId = 1;

// Testar as queries que o controller faria
echo "Testando queries do controller com user_id = $userId\n\n";

$totalClientes = \Illuminate\Support\Facades\DB::table('clientes')
    ->where('user_id', $userId)->count();
echo "Total de clientes do usuário $userId: $totalClientes\n";

$totalProcessos = \Illuminate\Support\Facades\DB::table('processos')
    ->where('user_id', $userId)->count();
echo "Total de processos do usuário $userId: $totalProcessos\n";

$totalTarefas = \Illuminate\Support\Facades\DB::table('tarefas')
    ->where('user_id', $userId)->count();
echo "Total de tarefas do usuário $userId: $totalTarefas\n";

$totalContratos = \Illuminate\Support\Facades\DB::table('contratos')
    ->where('user_id', $userId)->count();
echo "Total de contratos do usuário $userId: $totalContratos\n";

$totalAudiencias = \Illuminate\Support\Facades\DB::table('audiencias')
    ->where('user_id', $userId)->count();
echo "Total de audiências do usuário $userId: $totalAudiencias\n";

echo "\n✓ Todas as queries funcionaram sem erros!\n";

// Agora testar com um outro usuário
echo "\n--- Testando com user_id = 2 ---\n";
$userId2 = 2;

$clientes2 = \Illuminate\Support\Facades\DB::table('clientes')
    ->where('user_id', $userId2)->count();
echo "Clientes do usuário 2: $clientes2 (esperado: 0)\n";

$processos2 = \Illuminate\Support\Facades\DB::table('processos')
    ->where('user_id', $userId2)->count();
echo "Processos do usuário 2: $processos2 (esperado: 0)\n";
