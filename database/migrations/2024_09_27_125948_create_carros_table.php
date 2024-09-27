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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10)->nullable(false);
            $table->string('ano', 20)->nullable(false);
            $table->string('tipo', 30)->nullable(false);
            $table->string('marca', 40)->nullable(false);
            $table->string('modelo', 50)->nullable(false);
            $table->string('valor', 60)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
