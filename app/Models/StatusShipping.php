<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function shipping_details(): HasMany {
        return $this->hasMany(ShippingDetails::class);
    }
}
