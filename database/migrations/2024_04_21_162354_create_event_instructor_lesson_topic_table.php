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
        Schema::create('event_instructor_lesson_topic', function (Blueprint $table) {
            $table->id();

            $table->foreignId('event_id')->constrained();
            $table->foreignId('instructor_id')->constrained();
            $table->foreignId('lesson_id')->constrained();
            $table->foreignId('topic_id')->constrained();

            $table->string('date', 500)->nullable();
            $table->string('time_starts', 500)->nullable();
            $table->string('time_ends', 500)->nullable();
            $table->string('duration')->nullable();
            $table->string('room')->nullable();
            $table->string('location_url')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('automate_mail')->nullable()->default(false);
            $table->boolean('send_automate_mail')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_instructor_lesson_topic');
    }
};
