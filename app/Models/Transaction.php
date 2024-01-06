<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'order_date',
    ];

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }

    public function payment_status(): BelongsTo {
        return $this->belongsTo(PaymentStatus::class);
    }

    public function reviews(): BelongsToMany {
        return $this->belongsToMany(Review::class)->using(SoldProducts::class);
    }

    public function shipping_details(): BelongsTo {
        return $this->belongsTo(ShippingDetails::class);
    }
}
