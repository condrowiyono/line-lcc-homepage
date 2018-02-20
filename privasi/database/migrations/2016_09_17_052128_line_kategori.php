<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LineKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id');
            $table->string('kategori_nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('line_kategori');
    }
}
