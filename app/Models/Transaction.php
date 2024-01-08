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
        'anime',
        'character',
        'size',
        'note'
    ];

    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class)->using(SoldProducts::class);
    }

    public function shipping_details()
    {
        return $this->belongsTo(ShippingDetails::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function extras() {
        return $this->belongsToMany(Extra::class)->using(TransactionExtra::class);
    }
}
