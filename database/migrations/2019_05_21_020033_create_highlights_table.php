<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highlights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('style')->nullable();
            $table->string('text_style')->nullable();
            $table->string('button_style')->nullable();
            $table->string('image');
            $table->integer('news_id')->unsigned();
            $table->boolean('status');
            $table->foreign('news_id')->references('id')->on('news_artikels')->onDelete('CASCADE');
            $table->string('link')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('highlights');
    }
}
