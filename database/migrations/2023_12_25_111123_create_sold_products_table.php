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
<<<<<<<< Updated upstream:database/migrations/2023_12_23_123827_create_order_images_table.php
        Schema::create('order_images', function (Blueprint $table) {
========
        Schema::create('sold_products', function (Blueprint $table) {
>>>>>>>> Stashed changes:database/migrations/2023_12_25_111123_create_sold_products_table.php
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< Updated upstream:database/migrations/2023_12_23_123827_create_order_images_table.php
        Schema::dropIfExists('order_images');
========
        Schema::dropIfExists('sold_products');
>>>>>>>> Stashed changes:database/migrations/2023_12_25_111123_create_sold_products_table.php
    }
};
