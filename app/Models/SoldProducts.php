<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Pivot;

class SoldProducts extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'id_transaction',
        'id_review'
    ];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'id_transaciton', 'id');
    }

    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class, 'id_review', 'id');
    }
}
