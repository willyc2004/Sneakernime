<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionExtra extends Model
{
    use HasFactory;

    // public function transaction(): BelongsTo
    // {
    //     return $this->belongsTo(Transaction::class, 'id_transaction', 'id');
    // }

    // public function extra(): BelongsTo
    // {
    //     return $this->belongsTo(Extra::class, 'id_extra', 'id');
    // }
}
