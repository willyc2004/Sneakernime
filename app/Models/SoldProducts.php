<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SoldProducts extends Model
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

    public function images()
    {
        return $this->hasMany(SoldProductImage::class,'id_sold_product','id');
    }
}
