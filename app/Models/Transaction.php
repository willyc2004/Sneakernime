<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'order_date',
        'anime',
        'character',
        'size',
        'note',
        'id_shipping_detail',
        'id_payment_status',
        'id_review',
        'id_user',
        'id_product',
    ];

    public function paymentStatus(): BelongsTo
    {
        return $this->belongsTo(PaymentStatus::class, 'id_payment_status');
    }

    public function transactionImage(): HasMany
    {
        return $this->hasMany(TransactionImage::class, 'id_transaction', 'id');
    }

    public function extras(): BelongsToMany
    {
        return $this->belongsToMany(Extra::class, 'transaction_extras', 'id_transaction', 'id_extra');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class, 'id_review');
    }

    public function shippingDetail()
    {
        return $this->belongsTo(ShippingDetail::class, 'id_shipping_detail', 'id');
    }
}
