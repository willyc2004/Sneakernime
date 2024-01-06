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
        Schema::create('product_extras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_product')
                ->constrained('products')
                ->onDelete('cascade')
                ->index('fk_product_extras_products');
            $table->foreignId('id_extra')
                ->constrained('extras')
                ->onDelete('cascade')
                ->index('fk_product_extras_extras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_extras');
    }
};
