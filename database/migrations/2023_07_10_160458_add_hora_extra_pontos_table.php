<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pontos', function (Blueprint $table) {
            $table->time('horas_extras')->nullable()->after('comprovante4');
            $table->time('horas_negativas')->nullable()->after('horas_extras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pontos', function (Blueprint $table) {
            $table->dropColumn('horas_extras');
            $table->dropColumn('oras_negativas');
        });
    }
};
