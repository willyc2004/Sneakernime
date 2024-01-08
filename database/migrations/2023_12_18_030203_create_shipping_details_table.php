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
        Schema::create('shipping_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('city');
            $table->string('post_code');
            $table->string('receipt');
            $table->foreignId('id_status_shipping')
                ->constrained('status_shippings')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->index('fk_shipping_details_status_shippings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_details');
    }
};
