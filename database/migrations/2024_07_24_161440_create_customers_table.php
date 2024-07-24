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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fist_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('birth_day');
            $table->string('gender');
            $table->string('ward');
            $table->string('district');
            $table->string('province');
            $table->string('adress');
            $table->string('coin')->default('0');
            $table->timestamps();
        });

        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('ward');
            $table->string('district');
            $table->string('province');
            $table->string('adress');
            $table->timestamps();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
