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
    protected $fillable = ['user_id', 'name_service', 'min_price', 'max_price', 'key'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
}
