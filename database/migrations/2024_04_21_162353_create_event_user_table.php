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
        Schema::create('event_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->comment('unsigned');
            $table->integer('user_id')->nullable()->comment('unsigned');
            $table->boolean('paid')->nullable();
            $table->string('expiration')->nullable();
            $table->integer('payment_method')->default(0);
            $table->text('comment')->nullable();

            $table->foreignId('event_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_user');
    }
};
