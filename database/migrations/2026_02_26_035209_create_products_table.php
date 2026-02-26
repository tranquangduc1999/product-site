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
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('content')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();
            $table->foreignId('product_category_id')->constrained()->cascadeOnDelete();
            $table->boolean('status')->default(true);
            $table->dateTime('published_at')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();

            $table->index(['status', 'published_at']);
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
