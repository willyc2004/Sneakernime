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
            $table->foreignId('id_user')
                ->constrained(table: 'users', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_product')
                ->constrained(table: 'products', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_shipping_detail')
                ->constrained(table: 'shipping_details', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_payment_status')
                ->constrained(table: 'payment_statuses', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
