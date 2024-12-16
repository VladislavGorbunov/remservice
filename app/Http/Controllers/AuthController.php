<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    //
    public function loginEmployer(): View
    {
        $data = [
            'form_text' => 'Найдите сотрудников прямо сегодня!',
        ];

        return view('site.login', $data);
    }

    //
    public function loginApplicant(): View
    {
        $data = [
            'form_text' => 'Найдите работу прямо сегодня!',
        ];

        return view('site.login', $data);
    }

    public function auth(Request $request) 
    {
        var_dump($request->post());
    }
}
