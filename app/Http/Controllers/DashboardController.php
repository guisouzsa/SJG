<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Processo;
use App\Models\Audiencia;
use App\Models\Tarefa;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Contadores principais
        $totalClientes = Cliente::count();
        $totalProcessos = Processo::count();
        $totalAudiencias = Audiencia::count();
        $totalTarefas = Tarefa::count();

        // Atualizações Recentes (últimas 5 atividades)
        $atualizacoesRecentes = $this->getAtualizacoesRecentes();

        // Tipos de Processos com porcentagem
        $tiposProcessos = $this->getTiposProcessos();

        // Tarefas Concluídas vs Pendentes
        $estatisticasTarefas = $this->getEstatisticasTarefas();

        return view('dashboard', compact(
            'totalClientes',
            'totalProcessos',
            'totalAudiencias',
            'totalTarefas',
            'atualizacoesRecentes',
            'tiposProcessos',
            'estatisticasTarefas'
        ));
    }

    /**
     * Busca as últimas atualizações do sistema
     */
    private function getAtualizacoesRecentes()
    {
        $atualizacoes = collect();

        // Últimos clientes cadastrados
        $ultimosClientes = Cliente::latest()
            ->take(2)
            ->get()
            ->map(function ($cliente) {
                return [
                    'tipo' => 'cliente',
                    'icone' => 'user',
                    'titulo' => 'Novo cliente cadastrado',
                    'descricao' => $cliente->nome . ' - ' . $this->tempoDecorrido($cliente->created_at),
                    'cor' => '2072AF',
                    'data' => $cliente->created_at
                ];
            });

        // Últimas audiências marcadas
        $ultimasAudiencias = Audiencia::latest()
        ->take(1)
        ->get()
        ->map(function ($audiencia) {
            return [
                'tipo' => 'audiencia',
                'icone' => 'calendar',
                'titulo' => $audiencia->data_horario
                    ? 'Audiência marcada para ' . $audiencia->data_horario->format('d/m/Y H:i')
                    : 'Audiência sem data e hora definida',
                'descricao' => 'Processo ' . $audiencia->processo->numero . ' - ' . $this->tempoDecorrido($audiencia->created_at),
                'cor' => '6699CC',
                'data' => $audiencia->created_at
            ];
        });


        // Últimos processos cadastrados
        $ultimosProcessos = Processo::latest()
            ->take(1)
            ->get()
            ->map(function ($processo) {
                return [
                    'tipo' => 'processo',
                    'icone' => 'document',
                    'titulo' => 'Novo processo cadastrado',
                    'descricao' => ucfirst($processo->tipo) . ' - Processo ' . $processo->numero . ' - ' . $this->tempoDecorrido($processo->created_at),
                    'cor' => '2072AF',
                    'data' => $processo->created_at
                ];
            });

        // Últimas tarefas concluídas
        $ultimasTarefas = Tarefa::where('status', 'concluida')
            ->latest('updated_at')
            ->take(1)
            ->get()
            ->map(function ($tarefa) {
                return [
                    'tipo' => 'tarefa',
                    'icone' => 'check',
                    'titulo' => 'Tarefa concluída',
                    'descricao' => $tarefa->titulo . ' - ' . $this->tempoDecorrido($tarefa->updated_at),
                    'cor' => '9EB9D4',
                    'data' => $tarefa->updated_at
                ];
            });

        // Juntar todas as atualizações e ordenar por data
        $atualizacoes = $ultimosClientes
            ->concat($ultimasAudiencias)
            ->concat($ultimosProcessos)
            ->concat($ultimasTarefas)
            ->sortByDesc('data')
            ->take(5)
            ->values();

        return $atualizacoes;
    }

    /**
     * Calcula porcentagem de tipos de processos
     */
    private function getTiposProcessos()
    {
        $total = Processo::count();
        
        if ($total == 0) {
            return [
                ['tipo' => 'Civil', 'quantidade' => 0, 'porcentagem' => 0, 'cor_inicio' => '2072AF', 'cor_fim' => '6699CC'],
                ['tipo' => 'Trabalhista', 'quantidade' => 0, 'porcentagem' => 0, 'cor_inicio' => '6699CC', 'cor_fim' => '7BAFD4'],
                ['tipo' => 'Penal', 'quantidade' => 0, 'porcentagem' => 0, 'cor_inicio' => '7BAFD4', 'cor_fim' => '9EB9D4'],
                ['tipo' => 'Administrativo', 'quantidade' => 0, 'porcentagem' => 0, 'cor_inicio' => '9EB9D4', 'cor_fim' => '2072AF'],
                ['tipo' => 'Eleitoral', 'quantidade' => 0, 'porcentagem' => 0, 'cor_inicio' => '2072AF', 'cor_fim' => '6699CC'],
                ['tipo' => 'Constitucional', 'quantidade' => 0, 'porcentagem' => 0, 'cor_inicio' => '6699CC', 'cor_fim' => '7BAFD4'],
            ];
        }

        $tipos = Processo::select('tipo', DB::raw('count(*) as total'))
            ->groupBy('tipo')
            ->get()
            ->mapWithKeys(function ($item) use ($total) {
                return [
                    strtolower($item->tipo) => [
                        'quantidade' => $item->total,
                        'porcentagem' => round(($item->total / $total) * 100)
                    ]
                ];
            });

        // Configuração de cores para cada tipo
        $tiposConfig = [
            'civil' => ['nome' => 'Civil', 'cor_inicio' => '2072AF', 'cor_fim' => '6699CC'],
            'trabalhista' => ['nome' => 'Trabalhista', 'cor_inicio' => '6699CC', 'cor_fim' => '7BAFD4'],
            'penal' => ['nome' => 'Penal', 'cor_inicio' => '7BAFD4', 'cor_fim' => '9EB9D4'],
            'administrativo' => ['nome' => 'Administrativo', 'cor_inicio' => '9EB9D4', 'cor_fim' => '2072AF'],
            'eleitoral' => ['nome' => 'Eleitoral', 'cor_inicio' => '2072AF', 'cor_fim' => '6699CC'],
            'constitucional' => ['nome' => 'Constitucional', 'cor_inicio' => '6699CC', 'cor_fim' => '7BAFD4'],
        ];

        $resultado = [];
        foreach ($tiposConfig as $key => $config) {
            $resultado[] = [
                'tipo' => $config['nome'],
                'quantidade' => $tipos[$key]['quantidade'] ?? 0,
                'porcentagem' => $tipos[$key]['porcentagem'] ?? 0,
                'cor_inicio' => $config['cor_inicio'],
                'cor_fim' => $config['cor_fim'],
            ];
        }

        // Filtrar apenas os tipos que têm processos
        return collect($resultado)->filter(function ($item) {
            return $item['quantidade'] > 0;
        })->values()->toArray();
    }

    /**
     * Estatísticas de tarefas concluídas vs pendentes
     */
    private function getEstatisticasTarefas()
    {
        $total = Tarefa::count();
        $concluidas = Tarefa::where('status', 'concluida')->count();
        $pendentes = Tarefa::where('status', 'pendente')->count();

        $porcentagemConcluidas = $total > 0 ? round(($concluidas / $total) * 100) : 0;
        $porcentagemPendentes = $total > 0 ? round(($pendentes / $total) * 100) : 0;

        return [
            'concluidas' => $concluidas,
            'pendentes' => $pendentes,
            'porcentagem_concluidas' => $porcentagemConcluidas,
            'porcentagem_pendentes' => $porcentagemPendentes,
            'taxa_conclusao' => $porcentagemConcluidas
        ];
    }

    /**
     * Calcula tempo decorrido desde uma data
     */
    private function tempoDecorrido($data)
    {
        $agora = now();
        $diferenca = $data->diffInMinutes($agora);

        if ($diferenca < 60) {
            return "há " . $diferenca . " minutos";
        } elseif ($diferenca < 1440) { // menos de 24 horas
            $horas = floor($diferenca / 60);
            return "há " . $horas . " " . ($horas == 1 ? "hora" : "horas");
        } else {
            $dias = floor($diferenca / 1440);
            return "há " . $dias . " " . ($dias == 1 ? "dia" : "dias");
        }
    }
}