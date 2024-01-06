<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'anime',
        'character',
        'size',
        'note',
        'id_user',
        'id_product'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_product', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ReferenceImage::class);
    }
}
