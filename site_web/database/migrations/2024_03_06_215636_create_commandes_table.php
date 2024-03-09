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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->string('qty');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('email');
            $table->string('telephone');
            $table->string('ville');
            $table->text('adresse');
            $table->text('ref_commande');
            $table->text('status');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};