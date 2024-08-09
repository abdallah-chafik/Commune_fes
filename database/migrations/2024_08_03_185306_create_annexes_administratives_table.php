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
        Schema::create('annexes_administratives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('arrondissement_id')->constrained()->onDelete('cascade');
            $table->string('nom', 100);
            $table->text('description')->nullable();
            $table->string('responsable', 100)->nullable();
            $table->string('localisation', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annexes_administratives');
    }
};
