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
        Schema::create('dataset_answers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions');

            $table->unsignedBigInteger('dataset_id');
            $table->foreign('dataset_id')->references('id')->on('datasets');

            $table->boolean('value');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dataset_answers', function (Blueprint $table) {
            $table->dropForeign(['question_id']);
            $table->dropForeign(['dataset_id']);
        });

        Schema::dropIfExists('dataset_answers');
    }
};
