<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function loginPage(Request $request)
    {

        $data = [
            'form_text' => 'Найдите сотрудников прямо сегодня!',
            'error' => $request->session()->get('error') ? $request->session()->get('error') : ''
        ];

        return view('site.login', $data);
    }


    public function login(Request $request, User $user)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->get('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->isAdmin) {
                return redirect('admin');
            } elseif ($user->isMaster) {
                return redirect('master');
            } else {
                return redirect('profile');
            }
            
        } else {
            session()->flash('error', 'Неверный логин или пароль.');
            return redirect('login');
        }
    }


    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::to('/');
    }

}
