<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path'
    ];

    public function soldProduct(): BelongsTo {
        return $this->belongsTo(SoldProduct::class);
    }
}
