<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index() 
    {
        $data = [
            'title' => 'О проекте',
        ];

        return view('site.about', $data);
    }
}
