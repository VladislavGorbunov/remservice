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
        $subcategories = Category::find(1)->subcategories; // Отношение один ко многим. Получение подкатегорий категории
        $data['subcategories'] = $subcategories; 
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

    public function editCategory(Request $request, $id)
    {
        $category = Category::find($id);

        if ($request->method() == 'POST') {
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->save();
            session()->flash('message', 'Категория "' .$request->name. '" изменена.');
            return redirect('/admin/categories');
        }

        $data['category'] = $category;

        return view('admin.update-category', $data);
    }

    public function deleteCategory(Request $request, $id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            session()->flash('message', 'Категория "'. $category['name'] .'" удалена.');
        } else {
            session()->flash('message', 'Категории с таким id не найдено.');
        }
        
        return redirect('/admin/categories');
    }
}
