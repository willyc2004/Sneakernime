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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('total_price');
            $table->date('order_date');
            $table->string('anime');
            $table->string('character');
            $table->string('size');
            $table->foreignId('id_shipping_detail')
                ->constrained('shipping_details')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index('fk_transactions_shipping_details');
            $table->foreignId('id_payment_status')
                ->constrained('payment_statuses')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index('fk_transactions_payment_status');
            $table->foreignId('id_order')
                ->constrained('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index('fk_transactions_order');
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
