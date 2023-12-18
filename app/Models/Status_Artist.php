<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status_Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function artists(): HasMany {
        return $this->hasMany(Artist::class);
    }
}
