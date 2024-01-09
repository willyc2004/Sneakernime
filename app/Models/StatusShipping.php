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

    public function shippingDetails(): HasMany {
        return $this->hasMany(ShippingDetail::class, 'id_status_shipping', 'id');
    }
}
