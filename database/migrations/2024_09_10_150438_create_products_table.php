<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->foreignId('category_id')->constrained('categories')->nullOnDelete();
            // $table->string('image', 255);
            $table->text('description');
            $table->integer('quantity')->default(0);
            $table->decimal('price', 8, 2)->default(0);
            $table->integer('discount')->default(0);
            $table->decimal('total_price', 8, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
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
