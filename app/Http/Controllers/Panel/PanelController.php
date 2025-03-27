<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PanelController extends Controller
{
    public function index(): View
    {
        $data['user'] = Auth::user();
        return view('panel.index', $data);
    }

    public function addTechnic()
    {
        echo 'Страница добавления ремонт. техники';
    }

}