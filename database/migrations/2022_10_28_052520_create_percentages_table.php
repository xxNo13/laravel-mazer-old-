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
        Schema::create('percentages', function (Blueprint $table) {
            $table->id();
            $table->integer('core');
            $table->integer('strategic');
            $table->integer('support');
            $table->string('type');
            $table->string('userType');
            $table->foreignId('user_id')->onDelete('cascade');
            $table->foreignId('duration_id')->onDelete('cascade');
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
        Schema::dropIfExists('percentages');
    }
};
