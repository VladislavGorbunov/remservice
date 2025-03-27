<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\UserCategory;

class CategoryController extends Controller
{
    //
    public function addCategory(Request $request)
    {
        $data['user'] = Auth::user();
        $data['categories'] = Category::get();

        // Категории которые уже были выбраны мастером
        $data['user_categories_db'] = UserCategory::where('user_id', Auth::user()->id)->get();

        // Создание массива с id выбранных категорий
        foreach ($data['user_categories_db'] as $user_category) {
            $user_cat[] = $user_category->subcategory_id;
        }
        
        if (!empty($user_cat)) {
            $data['user_categories'] = $user_cat;
        } else {
            $data['user_categories'] = [];
        }
        

        if ($request->method() == 'POST') {
            foreach ($request->categories as $category) {
                UserCategory::create([
                    'subcategory_id' => $category,
                    'user_id' => Auth::user()->id,
                ]);
            }

            $request->session()->flash('message', 'Данные обновлены');
            return redirect('/panel');
        }

        return view('panel.category', $data);
    }
}
