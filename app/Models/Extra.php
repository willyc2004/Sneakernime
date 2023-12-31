<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Extra extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'transaction_extras', 'id_extra', 'id_transaction');
    }


    public function images()
    {
        return $this->hasMany(ExtraImage::class, 'id_extra', 'id');
    }
}
