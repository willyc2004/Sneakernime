<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function images(): HasMany {
        return $this->hasMany(Product_Image::class);
    }

    public function transactions(): HasMany {
        return $this->hasMany(Transaction::class);
    }

    public function artist(): BelongsTo {
        return $this->belongsTo(Artist::class);
    }

    public function extras(): BelongsToMany {
        return $this->belongsToMany(Extra::class)->using(Product_Extra::class);
    }
}
