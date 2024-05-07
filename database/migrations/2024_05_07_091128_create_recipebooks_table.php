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
        Schema::create('recipebooks', function (Blueprint $table) {
            $table->id('recipe_id');
            $table->string('recipe_name');
            $table->text('description');
            $table->text('ingredients');
            $table->text('instructions');
            $table->enum('difficulty_level', ['Easy', 'Medium','Hard']);
            $table->integer('cooking_time');
            $table->integer('servings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipebooks');
    }
};
