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
        Schema::create('lessons', function (Blueprint $table) {
            $table->integer('id', true);
            $table->boolean('status')->nullable();
            $table->string('title')->nullable();
            $table->mediumText('htmlTitle')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('header')->nullable();
            $table->text('summary')->nullable();
            $table->text('body')->nullable();
            $table->string('vimeo_video')->nullable();
            $table->string('vimeo_duration')->nullable();
            $table->longText('links')->nullable();
            $table->boolean('bold')->default(false);
            $table->integer('author_id')->nullable();
            $table->integer('creator_id')->nullable();
            $table->string('published_at', 500)->nullable();
            $table->string('created_at', 500)->nullable();
            $table->string('updated_at', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
