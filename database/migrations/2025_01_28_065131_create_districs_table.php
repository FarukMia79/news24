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
        Schema::create('districs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('division_id');
            $table->string('distric_en');
            $table->string('distric_bn');
            $table->timestamps();
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districs');
    }
};
