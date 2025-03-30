<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MastersController extends Controller
{
    //
    public function index() 
    {
        $data['title'] = 'Для мастеров своего дела!';
        return view('site.for-the-masters', $data);
    }


    public function getPhoneMaster(Request $request)
    {
        $master_id = $request->input('id');
        $master = User::find($master_id);

        $phoneNumber = trim($master->phone);

        $pattern = '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/';
        $phone = preg_replace($pattern, '+7 ($2) $3-$4-$5', $phoneNumber);

        return response()->json([
            'phone' => $phone,
        ]);
    }
}
