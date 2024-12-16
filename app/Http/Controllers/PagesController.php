<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cities;

class PagesController extends Controller
{
    // Гланая страница
    public function index() 
    {
        $cities = new Cities();

        //$posts = Http::get('https://jsonplaceholder.org/posts');
        // echo '<pre>';
        // var_dump($posts->object());
        // echo '</pre>';

        $data = [
            'title' => 'О проекте',
            'cities' => $cities->all(),
            //'posts' => $posts->object()
        ];
        
        return view('site.index', $data);
    }
}
