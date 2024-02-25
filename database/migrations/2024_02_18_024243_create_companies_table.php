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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('organization_type');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->bigInteger('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('division_id')->unsigned();
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('company_address');
            $table->string('company_country');
            $table->string('company_business');
            $table->date('establishment_date')->nullable();
            $table->string('company_size')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_active')->default(1);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->text('bio')->nullable();
            $table->text('vision')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
