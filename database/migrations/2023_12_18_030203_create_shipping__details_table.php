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
        Schema::create('shipping__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('city');
            $table->string('post_code');
            $table->string('receipt');
            $table->bigInteger('price');
            $table->foreignId('id_status_shipping')
                ->constrained(table: 'status_shippings', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping__details');
    }
};
