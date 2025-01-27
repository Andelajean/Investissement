<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investissements', function (Blueprint $table) {
            $table->id();
            
            $table->string('nom_investissement');
            $table->decimal('montant', 15, 2); 
            $table->string('duree');
            $table->string('activation');
            $table->string('devise');
            $table->string('statut')->default('non');
            $table->decimal('gain', 15, 2);  
            $table->date('date_investissement')->now();
            $table->string('email');
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
        Schema::dropIfExists('investissements');
    }
};
