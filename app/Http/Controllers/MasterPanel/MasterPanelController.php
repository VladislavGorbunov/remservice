<?php

namespace App\Http\Controllers\MasterPanel;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MasterPanelController extends Controller
{
    public function index(): View
    {
        $data['users'] = User::all();
        return view('panel.index', $data);
    }

}