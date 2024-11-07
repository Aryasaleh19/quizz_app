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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('body');

            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'quiz_user_id'
            )->onDelete('cascade');
            $table->string('token')->unique();
            // $table->foreignId('room_id')->constrained('rooms');

            $table->time('start_time')->default('00:00:00');
            $table->time('end_time')->default('00:00:00');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
