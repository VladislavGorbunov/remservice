<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    //
    public function allSubCategory(Request $request): View
    {
        $data['subcategories'] = SubCategory::paginate(10);
        $data['message'] = $request->session()->get('message') ? $request->session()->get('message') : '';
        return view('admin.all-subcategory', $data);
    }

    public function createSubCategory(Request $request)
    {
        if ($request->method() == 'POST') {
            SubCategory::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'slug' => $request->slug,
            ]);

            session()->flash('message', 'Категория "' .$request->name. '" создана.');
            return redirect()->action([SubCategoryController::class, 'allSubCategory']);
        }

        $data['category'] = Category::get();

        return view('admin.create-subcategory', $data);
    }

    public function editSubCategory(Request $request, $id)
    {
        $category = SubCategory::find($id);

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
        $category = SubCategory::find($id);

        if ($category) {
            $category->delete();
            session()->flash('message', 'Категория "'. $category['name'] .'" удалена.');
        } else {
            session()->flash('message', 'Категории с таким id не найдено.');
        }
        
        return redirect('/admin/categories');
    }
}
