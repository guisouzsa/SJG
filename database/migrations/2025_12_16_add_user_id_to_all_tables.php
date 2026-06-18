<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Schema::table('clientes', function (Blueprint $table) {
            if (!Schema::hasColumn('clientes', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        Schema::table('processos', function (Blueprint $table) {
            if (!Schema::hasColumn('processos', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        Schema::table('tarefas', function (Blueprint $table) {
            if (!Schema::hasColumn('tarefas', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        Schema::table('contratos', function (Blueprint $table) {
            if (!Schema::hasColumn('contratos', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        Schema::table('audiencias', function (Blueprint $table) {
            if (!Schema::hasColumn('audiencias', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        $firstUser = DB::table('users')->first();
        if ($firstUser) {
            DB::table('clientes')->whereNull('user_id')->update(['user_id' => $firstUser->id]);
            DB::table('processos')->whereNull('user_id')->update(['user_id' => $firstUser->id]);
            DB::table('tarefas')->whereNull('user_id')->update(['user_id' => $firstUser->id]);
            DB::table('contratos')->whereNull('user_id')->update(['user_id' => $firstUser->id]);
            DB::table('audiencias')->whereNull('user_id')->update(['user_id' => $firstUser->id]);
        }

        Schema::table('clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('processos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('tarefas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('contratos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('audiencias', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Schema::table('clientes', function (Blueprint $table) {
            if (Schema::hasColumn('clientes', 'user_id')) {
                $table->dropForeignIdFor('users', 'user_id');
                $table->dropColumn('user_id');
            }
        });

        Schema::table('processos', function (Blueprint $table) {
            if (Schema::hasColumn('processos', 'user_id')) {
                $table->dropForeignIdFor('users', 'user_id');
                $table->dropColumn('user_id');
            }
        });

        Schema::table('tarefas', function (Blueprint $table) {
            if (Schema::hasColumn('tarefas', 'user_id')) {
                $table->dropForeignIdFor('users', 'user_id');
                $table->dropColumn('user_id');
            }
        });

        Schema::table('contratos', function (Blueprint $table) {
            if (Schema::hasColumn('contratos', 'user_id')) {
                $table->dropForeignIdFor('users', 'user_id');
                $table->dropColumn('user_id');
            }
        });

        Schema::table('audiencias', function (Blueprint $table) {
            if (Schema::hasColumn('audiencias', 'user_id')) {
                $table->dropForeignIdFor('users', 'user_id');
                $table->dropColumn('user_id');
            }
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
};
