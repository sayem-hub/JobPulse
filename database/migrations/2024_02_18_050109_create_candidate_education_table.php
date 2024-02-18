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
        Schema::create('candidate_education', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candidate_id')->unsigned();
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->string('degree');
            $table->string('passing_year');
            $table->string('institute');
            $table->string('institute_location');
            $table->string('result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_education');
    }
};
