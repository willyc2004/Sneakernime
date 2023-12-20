<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comment',
        'review_date'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function transaction(): BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
}
