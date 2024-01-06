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
            $table->timestamps();
            $table->string('anime');
            $table->string('character');
            $table->string('size');
            $table->string('note');
            $table->foreignId('id_user')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index('fk_orders_users');
            $table->foreignId('id_product')
                ->constrained('products')
                ->onDelete('cascade')
                ->index('fk_orders_products');
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
