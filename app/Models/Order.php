<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> Stashed changes

class Order extends Model
{
    use HasFactory;
<<<<<<< Updated upstream

    protected $fillable = [
        'size',
        'anime',
        'character',
        'note'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class);
    }

    public function images(): HasMany {
        return $this->hasMany(OrderImage::class);
    }
=======
>>>>>>> Stashed changes
}
