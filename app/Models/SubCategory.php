<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    
    protected $table = 'subcategories';
    
    protected $fillable = ['name', 'category_id', 'description', 'slug'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
