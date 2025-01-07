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
        
        //$posts = Http::get('https://jsonplaceholder.org/posts');
        // echo '<pre>';
        // var_dump($posts->object());
        // echo '</pre>';


        if (!empty(Auth::user()->name)) {
            echo Auth::user()->name;
        } else {
            echo 'Не авторизован';
        }

        $data = [
            'title' => 'О проекте',
            'cities' => $cities->all(),
            //'posts' => $posts->object()
        ];
        
        return view('site.index', $data);
    }
}
