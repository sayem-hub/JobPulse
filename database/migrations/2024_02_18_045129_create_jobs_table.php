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
            $table->bigInteger('degree_id')->unsigned()->nullable();
            $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_title');
            $table->string('experience_level')->nullable();
            $table->string('requirements');
            $table->json('responsibilities')->nullable();
            $table->string('vacancy');
            $table->enum('work_place', ['office', 'remote', 'hybrid'])->default('office');
            $table->bigInteger('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('division_id')->unsigned();
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('salary_range')->default('Negotiable');
            $table->string('salary_review')->nullable();
            $table->tinyInteger('festival_bonus')->nullable();
            $table->string('age_range');
            $table->string('gender');
            $table->date('deadline');
            $table->enum('priority', ['urgent', 'normal'])->default('normal');
            $table->tinyInteger('is_featured')->default(0);
            $table->integer('number_of_applications')->default(0);
            $table->enum('status', ['pending', 'published', 'declined', 'expired'])->default('pending');
            $table->dateTime('published_at')->nullable();
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->bigInteger('updated_by')->unsigned();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
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
