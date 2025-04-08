<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bibliotecarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_persona')->references('id')->on('personas')->onDelete('restrict');
            $table->foreignId('fk_biblioteca')->references('id')->on('bibliotecas')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliotecarios');
    }
};
