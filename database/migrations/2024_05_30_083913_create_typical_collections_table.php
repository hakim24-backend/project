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
        Schema::create('typical_collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('filename')->nullable();
            $table->unsignedBigInteger('id_collection');
            $table->foreign('id_collection')->references('id')->on('collections')->onDelete('cascade')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('typical_collections');
    }
};
