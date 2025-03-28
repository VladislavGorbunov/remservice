<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Region;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // Гланая страница
    public function index(Request $request) 
    {

        $data['regionName'] = null;
        $data['regionNameIn'] = null;
        $data['title'] = 'Частные мастера по ремонту бытовой техники в любом городе России';
        $data['header_text'] = 'Частные мастера по ремонту бытовой техники во всех городах России';
        $data['categories'] = Category::get();

        return view('site.index', $data);
    }


    public function regionsPage(Request $request, $region = '/') 
    {
       
        $region = Region::where('slug', $region)->first();
        
        if (!$region) abort(404);
        
        $users = User::where('region_id', $region->id)->where('isMaster', true)->get();

        $data['regionName'] = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['title'] = 'Частные мастера по ремонту бытовой техники ' . $region->name_in;
        $data['header_text'] = 'Частные мастера по ремонту бытовой техники ' . $region->name_in;
        $data['categories'] = Category::get();

        return view('site.index', $data);
    }


    public function subcategoryPage(Request $request, $region = '/', $subcategory) 
    {
        $region = Region::where('slug', $region)->first();
        if (!$region) abort(404);

        $subcategory = SubCategory::where('slug', $subcategory)->first();
        if (!$subcategory) abort(404);

        $masters = User::select('users.name as user_name', 'users.lastname as user_lastname', 'users.aboutme as user_aboutme', 'users.phone as user_phone', 'regions.name as region_name')
            ->join('regions', 'regions.id', '=', 'users.region_id')
            ->where('isMaster', true)
            ->where('region_id', $region->id)
            ->get();

        $data['masters'] = $masters;

        $data['title'] = 'Частные мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' ' . $region->name_in .', рейтинг, отзывы, цены';
        $data['header_text'] = 'Частные мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' ' . $region->name_in;
        $data['regionName'] = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['categories'] = Category::get();


        return view('site.subcategory', $data);
    }
}
