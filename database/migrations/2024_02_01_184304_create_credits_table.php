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
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->index()->nullable();
            $table->string('credits');
            $table->string('project_architects');
            $table->string('cost_consultant');
            $table->date('date');
            $table->string('collaborating_architects');
            $table->string('project_manager');
            $table->string('client');
            $table->string('executing_architect');
            $table->string('acoustics');
            $table->string('area');
            $table->string('structural_engineer');
            $table->string('main_contraactor');
            $table->string('smith_jones_architecture');
            $table->string('services_engineer'); 
            $table->string('awards'); 
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
