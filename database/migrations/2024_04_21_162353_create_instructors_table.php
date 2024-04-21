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
        Schema::create('instructors', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('priority')->nullable();
            $table->boolean('status')->nullable();
            $table->bigInteger('comment_status')->nullable();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('header')->nullable();
            $table->string('company')->nullable();
            $table->text('summary')->nullable();
            $table->text('body')->nullable();
            $table->string('ext_url')->nullable();
            $table->longText('social_media')->nullable();
            $table->integer('author_id')->nullable();
            $table->integer('creator_id')->nullable();
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
        Schema::dropIfExists('instructors');
    }
};
