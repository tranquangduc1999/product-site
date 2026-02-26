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
        Schema::dropIfExists('settings');

        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // Thông tin cơ bản
            $table->string('site_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            // Liên hệ
            $table->string('hotline')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();

            // Mạng xã hội
            $table->string('facebook')->nullable();
            $table->string('zalo')->nullable();

            // SEO mặc định
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Analytics
            $table->text('google_analytics')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
