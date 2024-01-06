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
        return $this->hasMany(ProductImage::class, 'id_product','id');
    }

    public function orders(): HasMany {
        return $this->hasMany(Order::class, 'id_product','id');
    }

    public function extras(): HasMany {
        return $this->hasMany(ProductExtra::class, 'id_product','id');
    }
}
