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
        Schema::create('fit_shows', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->unsignedBigInteger('fit_id')->nullable();
            $table->foreign('fit_id')->references('id')->on('fits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fit_shows');
    }
};
