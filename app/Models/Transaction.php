<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'order_date',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(TransactionImage::class);
    }

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function payment_status(): BelongsTo {
        return $this->belongsTo(PaymentStatus::class);
    }

    public function review(): BelongsTo {
        return $this->belongsTo(Review::class);
    }

    public function shipping_details(): BelongsTo {
        return $this->belongsTo(ShippingDetails::class);
    }
}
