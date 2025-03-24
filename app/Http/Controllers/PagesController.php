<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Region;
use App\Models\User;
use App\Models\Category;

class PagesController extends Controller
{
    // Гланая страница
    public function index(Request $request) 
    {

        $data['regionName'] = null;
        $data['regionNameIn'] = null;
        $data['title'] = 'Частные мастера по ремонту бытовой техники в любом городе России';

        $data['categories'] = Category::get();

        return view('site.index', $data);
    }


    public function regionsPage(Request $request, $region = '/') 
    {
       
        $region = Region::where('slug', $region)->first();
        
        if (!$region) abort(404);

        $data['regionName'] = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['title'] = 'Частные мастера по ремонту бытовой техники ' . $region->name_in;

        $data['categories'] = Category::get();

        return view('site.index', $data);
    }
}
