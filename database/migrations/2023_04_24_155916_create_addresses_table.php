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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default(' ');
            $table->string('last_name')->default(' ');
            $table->text('street')->default(' ');
            $table->string('city')->default(' ');
            $table->string('state')->default(' ');
            $table->string('zip_code')->default(' ');
            $table->string('phone')->default(' ');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
