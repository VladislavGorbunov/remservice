<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
    public function allRegions(): View
    {
        $data['regions'] = [
            'Москва'
        ];

        return view('admin.all-regions', $data);
    }
}
