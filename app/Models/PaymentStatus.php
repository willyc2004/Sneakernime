<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function transactions(): HasMany {
        return $this->hasMany(Transaction::class, 'id_payment_status', 'id');
    }
}
