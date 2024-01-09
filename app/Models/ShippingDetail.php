<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ShippingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'address',
        'post_code',
        'resi',
        'shipping_cost',
        'id_status_shipping',
    ];

    public function statusShipping(): BelongsTo
    {
        return $this->belongsTo(StatusShipping::class);
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'id_transaction', 'id');
    }
}
