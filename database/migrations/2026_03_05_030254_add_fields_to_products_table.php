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
        Schema::table('products', function (Blueprint $table) {

            $table->string('sku')->nullable();
            // mã sản phẩm

            $table->string('origin')->nullable();
            // xuất xứ

            $table->boolean('show_price')->default(true);
            // hiển thị giá hay không

        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropColumn([
                'sku',
                'origin',
                'show_price'
            ]);

        });
    }
};
