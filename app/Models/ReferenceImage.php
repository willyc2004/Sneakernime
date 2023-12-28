<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> Stashed changes

class ReferenceImage extends Model
{
    use HasFactory;
<<<<<<< Updated upstream

    protected $fillable = ['image_path'];

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
=======
>>>>>>> Stashed changes
}
