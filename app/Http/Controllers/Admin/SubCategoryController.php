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
                'slug' => $this->translit($request->name),
            ]);

            session()->flash('message', 'Подкатегория "' .$request->name. '" создана.');
            return redirect()->action([SubCategoryController::class, 'allSubCategory']);
        }

        $data['category'] = Category::get();

        return view('admin.create-subcategory', $data);
    }

    public function editSubCategory(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        

        if ($request->method() == 'POST') {
            $subcategory->name = $request->name;
            $subcategory->slug = $this->translit($request->name);
            $subcategory->category_id = $request->category_id;
            $subcategory->description = $request->description;
            $subcategory->save();
            session()->flash('message', 'Подкатегория "' .$request->name. '" изменена.');
            return redirect('/admin/subcategories');
        }

        $data['subcategory'] = $subcategory;
        $data['category'] = Category::get();
        
        return view('admin.update-subcategory', $data);
    }

    public function deleteSubCategory(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);

        if ($subcategory) {
            $subcategory->delete();
            session()->flash('message', 'Подкатегория "'. $subcategory['name'] .'" удалена.');
        } else {
            session()->flash('message', 'Подкатегории с таким id не найдено.');
        }
        
        return redirect('/admin/subcategories');
    }
}
