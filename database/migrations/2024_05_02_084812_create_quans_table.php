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
        Schema::create('quans', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->string('color_code');
            $table->integer('s')->default(0);
            $table->integer('m')->default(0);
            $table->integer('l')->default(0);
            $table->integer('xl')->default(0);
            $table->integer('xxl')->default(0);
            $table->longText('images');
            $table->timestamps();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quans');
    }
};
