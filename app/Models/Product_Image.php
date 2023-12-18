<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path'
    ];

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
