<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function allCategory(): View
    {
        return view('admin.all-category');
    }

    public function createCategory(Request $request): View
    {
        if ($request->method() == 'POST') {
            Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);
        }

        return view('admin.create-category');
    }

    public function editCategory(): View
    {
        
    }

    public function deleteCategory(): View
    {
        
    }
}
