<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->nullable()->constrained('clientes')->onDelete('set null');

            $table->string('titulo');
            $table->string('tipo');
            $table->date('data_assinatura');
            $table->date('data_vencimento')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->text('descricao')->nullable();

            $table->string('documento')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
