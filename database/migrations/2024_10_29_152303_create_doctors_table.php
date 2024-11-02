<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('name');
            $table->string('degree_section')->nullable();
            $table->string('speciality')->nullable();
            $table->string('experience')->nullable();
            $table->string('degree_year')->nullable();
            $table->string('review')->nullable();
            $table->string('appointment_number')->nullable();
            $table->string('map_direction')->nullable();
            $table->string('photo_path')->nullable();
            $table->text('bio_info')->nullable();
            $table->string('slug')->unique(); 
            $table->string('address')->nullable(); 
            $table->string('hospital_name')->nullable();
            $table->float('rating')->default(0); 
            $table->string('landmark')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('service_heading')->nullable(); 
            $table->json('services')->nullable();
            $table->json('education')->nullable();
            $table->json('doctor_experience')->nullable();
            $table->json('achievements')->nullable();
            $table->json('specialisations')->nullable();
            $table->json('conditions')->nullable(); 
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
