<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    //
    public function allRegions(): View
    {
        $data['regions'] = Region::get();

        return view('admin.all-regions', $data);
    }

    public function createRegion(Request $request)
    {
        if ($request->method() == 'POST') {
            Region::create([
                'name' => $request->name,
                'name_in' => $request->name_in,
                'slug' => $request->slug,
            ]);

            return redirect()->action([RegionController::class, 'allRegions']);
        }

        return view('admin.create-region');
    }
}
