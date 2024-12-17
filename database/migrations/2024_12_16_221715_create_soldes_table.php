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
        Schema::create('soldes', function (Blueprint $table) {
            $table->id();
           
            $table->decimal('montant', 15, 2);  
            $table->date('mise_jour')->default(DB::raw('CURRENT_DATE'));
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
        Schema::dropIfExists('soldes');
    }
};
