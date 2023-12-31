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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('total_price');
            $table->date('order_date');
            $table->string('anime');
            $table->string('character');
            $table->string('size');
            $table->text('note')->nullable();

            // Foreign keys

            $table->foreignId('id_shipping_detail')
                ->constrained('shipping_details')
                ->onDelete('cascade');

            $table->foreignId('id_payment_status')->constrained('payment_statuses')->onDelete('cascade');
            $table->foreignId('id_review')->constrained('reviews')->onDelete('cascade')->nullable();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_product')->constrained('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
