<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('style')->nullable();
            $table->string('text_style')->nullable();
            $table->string('button_style')->nullable();
            $table->string('image');            
            $table->text('description_n')->nullable();
            $table->string('image_only1')->nullable();
            $table->string('image_only2')->nullable();
            $table->string('image_only3')->nullable();
            $table->string('image_only4')->nullable();
            $table->string('image_only5')->nullable();
            $table->string('image_only6')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
