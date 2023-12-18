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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rating');
            $table->string('comment');
            $table->date('review_date');
            $table->foreignId('id_user')
                ->constrained(table: 'users', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_transaction')
                ->constrained(table: 'transactions', indexName: 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
