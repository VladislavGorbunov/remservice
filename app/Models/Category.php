<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;
    
    protected $limit = 6;

    // protected $primaryKey = 'category_id';
    protected $fillable = ['name', 'description', 'slug'];
    
    public function subcategories(): HasMany
    {
        return $this->hasMany(SubCategory::class)->take($this->limit);
    }
}
