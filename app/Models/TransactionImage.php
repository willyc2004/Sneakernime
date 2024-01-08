<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'id_transaction'
    ];

    public function transaction(): BelongsTo {
        return $this->belongsTo(Transaction::class);
    }
}
