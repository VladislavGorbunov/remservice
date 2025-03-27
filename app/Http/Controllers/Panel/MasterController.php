<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Panel\PhoneController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Region;

class MasterController extends Controller
{
    public function profileInfo(Request $request)
    {
        $data['regions'] = Region::get();
        $data['user'] = Auth::user();

        $user = User::find(Auth::user()->id);

        $phone_verify_status = PhoneController::checkVerifyPhone(Auth::user(), $request->phone);

        if ($request->method() == 'POST') {
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->phone_verify = $phone_verify_status;
            $user->experience = $request->experience;
            $user->region_id = $request->region_id;
            $user->aboutme = $request->aboutme;
            $user->save();
            session()->flash('message', 'Данные обновлены');
            return redirect('/panel');
        }

        
        return view('panel.info', $data);
    }

}