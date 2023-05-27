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
            $table->id()->autoIncrement();
            $table->foreignId('category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->string('image')->nullable();
            $table->text('description');
            $table->enum('type', ['flower', 'plant']);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
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
