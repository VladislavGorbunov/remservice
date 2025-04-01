<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PriceController extends Controller
{
    //
    public function price(Request $request) : View
    {

        if ($request->method() == 'POST') {
            echo '<pre>';
            var_dump($request->input());
            echo '</pre>';
        }

        return view('panel.price');
    }
}
