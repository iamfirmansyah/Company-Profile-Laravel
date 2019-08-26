<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_artikels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category_news')->onDelete('CASCADE');
            $table->integer('releaser_id')->unsigned();
            $table->foreign('releaser_id')->references('id')->on('releasers')->onDelete('CASCADE');
            $table->string('title');
            $table->string('foto');
            $table->text('news_detail');
            $table->string('writer');
            $table->string('slug');
            $table->integer('year');
            $table->integer('month');
            $table->integer('visit_count');
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
        Schema::dropIfExists('news_artikels');
    }
}
