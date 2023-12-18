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
        Schema::create('product__extras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_product')
                ->constrained(table: 'products', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_extra')
                ->constrained(table: 'extras', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product__extras');
    }
};
