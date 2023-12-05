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
        Schema::table('site_contatos', function(Blueprint $table){
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        DB::statement('update site_contatos set motivo_contatos_id = motivo_contatos');

        Schema::table('site_contatos', function(Blueprint $table){
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contatos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_contatos', function(Blueprint $table){
            $table->integer('motivo_contatos');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        DB::statement('update site_contatos set motivo_contatos = motivo_contatos_id');

        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropColumn('motivo_contatos_id');
        });
    }
};
