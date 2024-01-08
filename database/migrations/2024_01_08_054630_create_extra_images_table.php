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
        Schema::create('extra_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_path');
            $table->foreignId('id_extra')
                ->constrained(table: 'extras', indexName: 'id_extra_images')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_images');
    }
};
