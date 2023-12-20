<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status_Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function shipping_details(): HasMany {
        return $this->hasMany(Shipping_Details::class);
    }
}
