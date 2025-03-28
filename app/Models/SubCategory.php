<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubCategory extends Model
{
    use HasFactory;
    
    protected $table = 'subcategories';
    
    protected $fillable = ['name', 'plural_name', 'category_id', 'description', 'slug'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_subcategories', 'subcategory_id', 'user_id');
    }

}
