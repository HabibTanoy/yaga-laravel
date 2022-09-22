<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chooses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('tags_one')->nullable();
            $table->string('tags_two')->nullable();
            $table->string('tags_three')->nullable();
            $table->string('tags_four')->nullable();
            $table->string('tag_body_one')->nullable();
            $table->string('tag_body_two')->nullable();
            $table->string('tag_body_three')->nullable();
            $table->string('tag_body_four')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('chooses');
    }
}
