<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';
    protected $fillable = ['name_service'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
}
