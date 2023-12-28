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
<<<<<<<< Updated upstream:database/migrations/2023_12_23_151545_create_provinces_table.php
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
========
        Schema::create('reference_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
>>>>>>>> Stashed changes:database/migrations/2023_12_25_112705_create_reference_images_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< Updated upstream:database/migrations/2023_12_23_151545_create_provinces_table.php
        Schema::dropIfExists('provinces');
========
        Schema::dropIfExists('reference_images');
>>>>>>>> Stashed changes:database/migrations/2023_12_25_112705_create_reference_images_table.php
    }
};
