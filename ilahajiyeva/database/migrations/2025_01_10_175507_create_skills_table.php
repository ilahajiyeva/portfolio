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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('html')->nullable();
            $table->string('css')->nullable();
            $table->string('javascript')->nullable();
            $table->string('php')->nullable();
            $table->string('laravel')->nullable();
            $table->string('c')->nullable();
            $table->string('net')->nullable();
            $table->string('mysql')->nullable();
            $table->string('bootstrap')->nullable();
            $table->enum('status', ['0','1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
