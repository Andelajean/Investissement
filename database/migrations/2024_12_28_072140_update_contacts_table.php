<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void {
        Schema::table('contacts', function (Blueprint $table) {
            $table->text('response')->nullable()->after('message');  
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('response');  // Ajoutez cette ligne pour supprimer la colonne 'response' en cas de rollback
        });
    }
};
