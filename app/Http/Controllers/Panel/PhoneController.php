<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class PhoneController extends Controller
{
   
    public static function checkVerifyPhone($user, $request_phone): bool
    {
        if ($user->phone != $request_phone) {
            $phone_verify = false;
        } else {
            if ($user->phone_verify == true) {
                $phone_verify = true;
            } else {
                $phone_verify = false;
            }
        }

        return $phone_verify;
    }

}