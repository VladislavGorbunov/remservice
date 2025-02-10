<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
       
        if ($request->file('avatar')) {
            // Загрузка файла в папку storage/app/avatars
            $upload_file_path = $request->file('avatar')->store('avatars');
        } else {
            $upload_file_path = 'avatars/no-avatar.jpg';
        }

        $credentials = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'name' => ['required'],
            'lastname' => ['required'],
        ]);
        
        User::create([
            "avatar" => $upload_file_path,
            "name" => $post['name'],
            "lastname" => $post['lastname'],
            "email" => $post['email'],
            "password" => $post['password'],
            "role" => '0',
            "isMaster" => 1,    
        ]);

        // $storage_path = str_replace('\\', '/', storage_path('app'));
        // $avatar_full_path = $storage_path .'/'. $upload_file_path;

        
        
        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->intended('profile');
        } else {
            session()->flash('error', 'Неверный логин или пароль.');
            return redirect('login');
        }
    }

    public function uploadAvatar()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }
}
