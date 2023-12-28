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
<<<<<<<< Updated upstream:database/migrations/2023_12_23_151551_create_cities_table.php
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('city_id');
            $table->string('name');
========
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
>>>>>>>> Stashed changes:database/migrations/2023_12_25_141352_create_provinces_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< Updated upstream:database/migrations/2023_12_23_151551_create_cities_table.php
        Schema::dropIfExists('cities');
========
        Schema::dropIfExists('provinces');
>>>>>>>> Stashed changes:database/migrations/2023_12_25_141352_create_provinces_table.php
    }
};
