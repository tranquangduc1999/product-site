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

            $table->string('order_code')->unique();

            // Thông tin khách hàng
            $table->string('customer_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->text('note')->nullable();

            // Tổng tiền
            $table->decimal('total_amount', 15, 2)->default(0);

            // Trạng thái
            $table->enum('status', [
                'new',
                'processing',
                'completed',
                'cancelled'
            ])->default('new');
            $table->enum('payment_method', [
                'cod',
                'bank_transfer'
            ])->default('cod');

            $table->enum('payment_status', [
                'unpaid',
                'paid'
            ])->default('unpaid');

            $table->timestamps();
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
