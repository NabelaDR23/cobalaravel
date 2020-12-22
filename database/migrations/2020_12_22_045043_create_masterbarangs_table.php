<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbarangs', function (Blueprint $table) {
            $table->id();
            $table->string('kodebarang');
            $table->string('namabarang');
            $table->integer('hargajual');
            $table->integer('hargabeli');
            $table->integer('stok');
            $table->set('kategori',['komputer','laptop','periperal']);
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
        Schema::dropIfExists('masterbarangs');
    }
}
