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
        Schema::create('ingradients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('ingradient_recipe', function(Blueprint $table){
            $table->foreignId('ingradient_id')->references('id')->on('ingradients')->constrained();
            $table->foreignId('recipe_id')->references('id')->on('recipes')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingradient_recipe');
        Schema::dropIfExists('ingradients');
    }
};
