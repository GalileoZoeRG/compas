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
        Schema::create('usser', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last');
            $table->string('email');
            $table->string('password');
            $table->dateTime('photo')->nullable();
            $table->unsignedBigInteger('tasks_id');
            $table->foreign('tasks_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usser');
    }
};