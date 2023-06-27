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
        Schema::create('subject_quiz_descriptives', function (Blueprint $table) {
            $table->id();
            $table->string('user_ans')->default('null');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('subject_quiz_questions');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('subject_quiz_id');
            $table->foreign('subject_quiz_id')->references('id')->on('subject_quizzes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_quiz_descriptives');
    }
};
