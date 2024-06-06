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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->nullable()->unique();
            $table->string('name')->unique();
            $table->string('image');
            $table->string('type')->nullable();
            $table->string('original_price');
            $table->string('discount_price')->nullable();
            $table->longText('intro');
            $table->longText('detail');
            $table->longText('preserve');
            $table->integer('sold_quantity')->default(0);
            $table->boolean('hot')->default(false);
            $table->boolean('new')->default(true);
            $table->string('sale')->default("none");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
