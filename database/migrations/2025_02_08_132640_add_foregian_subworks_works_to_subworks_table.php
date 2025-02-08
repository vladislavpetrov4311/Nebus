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
        Schema::table('subworks', function (Blueprint $table) {
            $table->unsignedBigInteger('name_id');
            $table->foreign('name_id' , 'name_id_name_fk')->on('works')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subworks', function (Blueprint $table) {
            $table->dropForeign('name_id_name_fk'); 
            $table->dropColumn('name_id');
        });
    }
};
