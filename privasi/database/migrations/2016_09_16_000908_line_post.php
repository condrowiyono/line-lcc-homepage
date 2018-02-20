<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_pembuat');
            $table->string('post_poto');
            $table->datetime('post_tanggal');
            $table->string('post_judul');
            $table->string('post_slug');
            $table->longtext('post_isi');
            $table->string('kategori');
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
        Schema::drop('line_post');
    }
}
