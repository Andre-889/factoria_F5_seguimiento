<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('evaluation_stack', function (Blueprint $table) {
        
            $table->id()->autoIncrement();

            $table->unsignedBigInteger('stack_id');
            $table->foreign('stack_id')->references('id')->on('stacks');
            $table->unsignedBigInteger('evaluation_id');
            $table->foreign('evaluation_id')->references('id')->on('evaluations');
            
            $table->integer('level');

            $table->timestamps();           
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluation_stack');
    }
};