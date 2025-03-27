<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class PanelController extends Controller
{
    public function index(Request $request): View
    {
        $data['message'] = $request->session()->get('message');
        $data['user'] = Auth::user();
        return view('panel.index', $data);
    }



}