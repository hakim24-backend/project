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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('tittle1');
            $table->string('desc1');
            $table->string('tittle2');
            $table->string('desc2');
            $table->string('tittle3');
            $table->string('desc3');
            $table->string('tittle4');
            $table->string('desc4');
            $table->string('tittle5');
            $table->string('desc5');
            $table->string('filename')->nullable();
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
