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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên khách
            $table->string('position')->nullable(); // Chức vụ / công ty
            $table->text('content'); // Nội dung đánh giá
            $table->string('avatar')->nullable(); // Ảnh đại diện
            $table->integer('rating')->default(5); // Số sao
            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
