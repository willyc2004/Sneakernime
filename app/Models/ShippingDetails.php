<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShippingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'address',
        'city',
        'post_code',
        'receipt',
        'price'
    ];

    public function status_shipping(): BelongsTo {
        return $this->belongsTo(StatusShipping::class);
    }
}
