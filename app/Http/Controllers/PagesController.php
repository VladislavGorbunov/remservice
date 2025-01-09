<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cities;
use App\Models\User;

class PagesController extends Controller
{
    // Гланая страница
    public function index(Request $request) 
    {
        $cities = new Cities();

        $data = [
            'title' => 'О проекте',
            'cities' => $cities->all(),
            //'posts' => $posts->object()
        ];
        
        return view('site.index', $data);
    }
}
