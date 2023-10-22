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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->string('tittle');
            $table->string('description');
            $table->string('photo')->nullable();
            $table->dateTime('deadline');
            $table->enum('status',['Pendiente','En Progreso','Completada'])->nullable();
            $table->enum('priority',['No Urgente','Urgente','Muy Urgente'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
