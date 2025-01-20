<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastersController extends Controller
{
    //
    public function index() 
    {
        $data['title'] = 'Для мастеров своего дела!';
        return view('site.for-the-masters', $data);
    }
}
