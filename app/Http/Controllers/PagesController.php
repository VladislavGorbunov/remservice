<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Region;
use App\Models\User;

class PagesController extends Controller
{
    // Гланая страница
    public function index(Request $request, $region = '/') 
    {
        $region = Region::where('slug', $region)->first();
        
        if (!$region) abort(404);

        $data['region'] = $region->name_in;
            
        return view('site.index', $data);
    }
}
