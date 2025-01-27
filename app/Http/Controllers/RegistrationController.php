<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class RegistrationController extends Controller
{
    //
    public function registrationMaster()
    {
        $data['regionName'] = null;
        $data['regionNameIn'] = null;
        $data['title'] = 'Сайт';
        $data['headerTitle'] = 'Регистрация мастера';

        $data['categories'] = Category::get();

        return view('site.master-registration', $data);
    }

    public function registrationClient()
    {
        
    }

    public function insertMaster(Request $request) 
    {
        $post = $request->post();
        $avatar = $request->file();
    }
}
