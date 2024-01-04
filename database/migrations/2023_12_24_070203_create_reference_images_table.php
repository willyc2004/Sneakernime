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
        Schema::create('reference_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_path');
            $table->foreignId('id_order')
                ->constrained('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index('fk_reference_images_orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reference_images');
    }
};
