<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\UserCategory;

class PanelController extends Controller
{
    public function index(Request $request): View
    {
        $data['message'] = $request->session()->get('message');
        $data['user'] = Auth::user();
        
        $categories_select = UserCategory::where('user_id', Auth::user()->id)->get();
        $data['categories_select_count'] = count($categories_select);
        
        return view('panel.index', $data);
    }



}