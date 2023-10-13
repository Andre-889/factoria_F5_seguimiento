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
        Schema::create('projects_workshops', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('person_id');
            $table->string('project_name');
            $table->string('observations');
            $table->date('submission_date');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_workshops');
    }
};
