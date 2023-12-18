<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'address',
        'photo'
    ];

    public function status__artist(): BelongsTo {
        return $this->belongsTo(Status_Artist::class);
    }

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }
}
