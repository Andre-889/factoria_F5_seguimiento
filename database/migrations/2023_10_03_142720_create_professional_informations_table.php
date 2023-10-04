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
        Schema::create('professional_informations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('cv')->nullable();
            $table->bigInteger('person_id')->unique();
            $table->boolean('is_working');
            $table->string('linkedin')->nullable();
            $table->boolean('is_studying');
            $table->boolean('next_bootcamp');
            $table->string('github')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_informations');
    }
};
