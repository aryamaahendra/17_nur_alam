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
        Schema::create('hisotry_answers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('history_id');
            $table->foreign('history_id')->references('id')->on('histories');

            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('questions');

            $table->boolean('value');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hisotry_answers', function (Blueprint $table) {
            $table->dropForeign(['history_id']);
            $table->dropForeign(['question_id']);
        });

        Schema::dropIfExists('hisotry_answers');
    }
};
