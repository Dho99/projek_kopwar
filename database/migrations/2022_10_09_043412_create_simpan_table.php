<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('metode_id');
            $table->foreignId('simpanan_id');
            $table->char('jumlah_simpanan', 20);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simpan');
    }
};
