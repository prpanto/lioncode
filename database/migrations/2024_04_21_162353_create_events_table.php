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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained();
            
            $table->bigInteger('priority')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('published');
            $table->dateTime('release_date_files')->nullable();
            $table->string('expiration')->nullable();
            $table->string('title')->nullable();
            $table->text('htmlTitle')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('header')->nullable();
            $table->text('summary')->nullable();
            $table->text('body')->nullable();
            $table->string('hours')->nullable();
            $table->integer('absences_limit')->default(0);
            $table->boolean('enroll')->default(false);
            $table->boolean('index')->default(false);
            $table->boolean('feed')->default(false);
            $table->text('certificate_title')->nullable();
            $table->text('fb_group')->nullable();
            $table->text('evaluate_topics')->nullable();
            $table->text('evaluate_instructors')->nullable();
            $table->text('fb_testimonial')->nullable();
            $table->string('view_tpl')->nullable();
            $table->integer('view_counter')->nullable();
            $table->string('published_at')->nullable();
            $table->string('launch_date')->nullable();
            $table->text('xml_title')->nullable();
            $table->text('xml_description')->nullable();
            $table->text('xml_short_description')->nullable();
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
        Schema::dropIfExists('events');
    }
};
