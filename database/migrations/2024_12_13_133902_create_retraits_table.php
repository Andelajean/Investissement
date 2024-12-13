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
    Schema::create('retraits', function (Blueprint $table) {
        $table->id();
        $table->string('id_demande')->unique();
        $table->decimal('montant', 15, 2); 
        $table->string('statut')->default('traitement_en_cours'); 
        $table->string('devise', 3); 
        $table->date('date_retrait');
        $table->unsignedBigInteger('id_user'); 
        $table->timestamps();
        $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retraits');
    }
};
