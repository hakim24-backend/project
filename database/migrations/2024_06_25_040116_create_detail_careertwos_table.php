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
        Schema::create('detail_careertwos', function (Blueprint $table) {
            $table->id();
            $table->string('job');
            $table->integer('salary');
            $table->string('schedule');
            $table->string('day_of');
            $table->string('location');
            $table->longText('requirment');
            $table->longText('desc_location');
            $table->string('name_contact');
            $table->string('phone_contact');
            $table->string('email_contact');
            $table->string('website_contact');
            $table->unsignedBigInteger('id_careertwo');
            $table->foreign('id_careertwo')->references('id')->on('careertwos')->onDelete('cascade')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_careertwos');
    }
};
