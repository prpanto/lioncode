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
        Schema::create('event_topic_lesson_instructor', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->comment('unsigned');
            $table->integer('topic_id')->nullable()->comment('unsigned');
            $table->integer('lesson_id')->nullable()->comment('unsigned');
            $table->integer('instructor_id')->nullable()->comment('unsigned');
            $table->string('date', 500)->nullable();
            $table->string('time_starts', 500)->nullable();
            $table->string('time_ends', 500)->nullable();
            $table->string('duration')->nullable();
            $table->string('room')->nullable();
            $table->string('location_url')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('automate_mail')->nullable()->default(false);
            $table->boolean('send_automate_mail')->nullable()->default(false);

            $table->foreignId('event_id')->constrained();
            $table->foreignId('topic_id')->constrained();
            $table->foreignId('lesson_id')->constrained();
            $table->foreignId('instructor_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_topic_lesson_instructor');
    }
};
