<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductExtra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'id_extra'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function extra(): BelongsTo
    {
        return $this->belongsTo(Extra::class, 'id_extra', 'id');
    }
}
