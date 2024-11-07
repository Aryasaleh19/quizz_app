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
        Schema::create('studens_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'studens_answer_user_id'
            )->onDelete('cascade');
            $table->foreignId('question_id')->constrained(
                table: 'questions',
                indexName: 'studens_answer_question_id'
            )->onDelete('cascade');
            $table->foreignId('choice_id')->constrained(
                table: 'choices',
                indexName: 'studens_answer_choice_id'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studens_answers');
    }
};
