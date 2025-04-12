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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->integer('no_meja');

            $table->integer('bakso_tenes')->default(0)->nullable();
            $table->integer('bakso_urat')->default(0)->nullable();
            $table->integer('bakso_biasa')->default(0)->nullable();
            $table->integer('bakso')->default(0)->nullable();

            $table->integer('indomie_bakso_tenes')->default(0)->nullable();
            $table->integer('indomie_bakso_urat')->default(0)->nullable();
            $table->integer('indomie_bakso_biasa')->default(0)->nullable();

            $table->integer('pangsit_bakso_tenes')->default(0)->nullable();
            $table->integer('pangsit_bakso_urat')->default(0)->nullable();
            $table->integer('pangsit_bakso_biasa')->default(0)->nullable();
            $table->integer('pangsit_biasa')->default(0)->nullable();

            $table->integer('es_teh')->default(0)->nullable();
            $table->integer('es_jeruk')->default(0)->nullable();
            $table->integer('le_minerale')->default(0)->nullable();
            $table->integer('teh_pucuk')->default(0)->nullable();
            $table->integer('kerubak')->default(0)->nullable();
            $table->integer('buras')->default(0)->nullable();
            $table->integer('kacang')->default(0)->nullable();
            $table->integer('rempeyek')->default(0)->nullable();
            $table->integer('jumlah')->default(0)->nullable();

            $table->boolean('diantar')->default(false);
            $table->boolean('dibayar')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
