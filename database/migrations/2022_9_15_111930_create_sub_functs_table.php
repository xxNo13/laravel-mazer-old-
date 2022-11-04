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
        Schema::create('sub_functs', function (Blueprint $table) {
            $table->id();
            $table->string('sub_funct');
            $table->string('type');
            $table->string('user_type');
            $table->foreignId('funct_id')->onDelete('cascade')->nullable();
            $table->foreignId('user_id')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('sub_functs');
    }
};