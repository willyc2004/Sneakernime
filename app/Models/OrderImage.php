<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderImage extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function orders(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
