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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('shipping_type');
            $table->string('status')->default('processing');
            $table->decimal('total', $precision = 8, $scale = 2);
            $table->string('note');
            $table->timestamps();
            $table->foreignId('user_id');
            $table->foreignId('addresse_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
