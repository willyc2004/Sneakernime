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
        Schema::create('transaction_extras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_transaction')
                ->constrained('transactions')
                ->onDelete('cascade')
                ->index('fk_transaction_extras_transactions');
            $table->foreignId('id_extra')
                ->constrained('extras')
                ->onDelete('cascade')
                ->index('fk_transaction_extras_extras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_extras');
    }
};
