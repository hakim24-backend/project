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
        Schema::create('career_details', function (Blueprint $table) {
            $table->id();
            $table->longText('desc_job');
            $table->longText('desc_location');
            $table->string('name_contact');
            $table->string('phone_contact');
            $table->string('email_contact');
            $table->string('website_contact');
            $table->unsignedBigInteger('id_career');
            $table->foreign('id_career')->references('id')->on('careers')->onDelete('cascade')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_details');
    }
};
