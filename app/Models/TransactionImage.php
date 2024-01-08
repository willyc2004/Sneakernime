<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path'
    ];

    public function transaction(): BelongsTo {
        return $this->belongsTo(Transaction::class);
    }
}
