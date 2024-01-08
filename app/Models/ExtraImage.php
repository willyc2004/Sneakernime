<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExtraImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path'
    ];

    public function extra(): BelongsTo {
        return $this->belongsTo(Extra::class);
    }
}
