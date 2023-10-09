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
        Schema::create('coder_feedbacks', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->text('text');
            $table->bigInteger('person_id');
            $table->bigInteger('user_id');
            $table->date('date')->nullable();
            $table->text('observations');
            $table->text('improve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coder_feedbacks');
    }
};
