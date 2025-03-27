<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class PanelController extends Controller
{
    public function index(): View
    {
        $data['user'] = Auth::user();
        return view('panel.index', $data);
    }

    public function addTechnic(Request $request)
    {
        $data['user'] = Auth::user();
        $data['categories'] = Category::get();


        if ($request->method() == 'POST') {
            var_dump($request->categories);
            session()->flash('message', 'Данные обновлены');
        }

        return view('panel.addTechnic', $data);
    }

}