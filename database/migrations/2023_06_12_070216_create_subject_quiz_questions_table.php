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
        Schema::create('subject_quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_name');
            $table->string('status');
            $table->string('level');
            $table->string("question_type");
            $table->unsignedInteger('time_limit')->default(60);
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
        Schema::dropIfExists('subject_quiz_questions');
    }
};
