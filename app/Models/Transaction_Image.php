<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path'
    ];

    public function transactions(): BelongsTo {
        return $this->belongsTo(Transaction::class);
    }
}
