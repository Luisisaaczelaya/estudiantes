<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subjets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('grades');
            $table->string('durations');
            $table->string('units');
            $table->integer('carrers_id')->unsigned();
            $table->foreign('carrers_id')->references('id')-> on ('carrers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjets');
    }
};
