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
        Schema::create('subject_quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('correct_answer');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('id')->on('subject_quiz_questions');
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
        Schema::dropIfExists('subject_quiz_answers');
    }
};
