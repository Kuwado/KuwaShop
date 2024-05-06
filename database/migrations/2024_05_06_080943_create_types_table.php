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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default("type");
            $table->timestamps();
        });

        Schema::create('subTypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default("sub");
            $table->timestamps();
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
        });

        Schema::create('miniTypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default("mini");
            $table->timestamps();
            $table->foreignId('subtype_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miniTypes');
        Schema::dropIfExists('subTypes');
        Schema::dropIfExists('types');
    }
};
