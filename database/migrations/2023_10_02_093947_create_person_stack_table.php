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
        Schema::create('person_stack', function (Blueprint $table) {
           
            $table->id()->autoIncrement();
            $table->bigInteger('person_id');

            $table->unsignedBigInteger('stack_id');
            $table->foreign('stack_id')->references('id')->on('stacks');

            $table->string('level');

            $table->timestamps();           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_stack');
    }
};
