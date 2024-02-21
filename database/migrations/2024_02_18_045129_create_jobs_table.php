<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('job_category_id')->unsigned();
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('job_type_id')->unsigned();
            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_title');
            $table->longText('job_description');
            $table->string('vacancy');
            $table->string('job_location');
            $table->double('min_salary');
            $table->double('max_salary');
            $table->date('deadline');
            $table->tinyInteger('is_featured')->default(0);
            $table->enum('status', ['pending', 'active', 'expired'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
