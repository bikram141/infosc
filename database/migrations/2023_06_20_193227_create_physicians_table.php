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
        Schema::create('physicians', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->string('First Name')->nullable();
            $table->string('Last Name')->nullable();
            $table->string('Full Name')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Specialty')->nullable();
            $table->string('Practice')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Email')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Country')->nullable();
            $table->string('State')->nullable();
            $table->string('Zip')->nullable();
            $table->string('Latitude')->nullable();
            $table->string('Longitude')->nullable();
            $table->string('SIC Code')->nullable();
            $table->string('Website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physicians');
    }
};
