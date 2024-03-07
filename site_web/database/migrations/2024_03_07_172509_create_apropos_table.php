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
        Schema::create('apropos', function (Blueprint $table) {
            $table->id();
            $table->string('anne_creation');
            $table->string('logo');
            $table->text('presenation_massanh');
            $table->text('prestation');
            $table->text('notre_forces');
            $table->text('notre_vision');
            $table->text('adresse_ci');
            $table->text('adresse_bf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apropos');
    }
};
