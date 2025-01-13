<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function allCategory(Request $request): View
    {
        
        $data['categories'] = Category::paginate(10);
        $data['message'] = $request->session()->get('message') ? $request->session()->get('message') : '';
        return view('admin.all-category', $data);
    }

    public function createCategory(Request $request)
    {
        if ($request->method() == 'POST') {
            Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);

            return redirect()->action([CategoryController::class, 'allCategory']);
        }

        return view('admin.create-category');
    }

    public function editCategory(): View
    {
        
    }

    public function deleteCategory(Request $request, $id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            session()->flash('message', 'Категория удалена.');
        } else {
            session()->flash('message', 'Категории с таким id не найдено.');
        }
        
        return redirect('/admin/categories');
    }
}
