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


    public function editRegion(Request $request, $id)
    {
        $region = Region::find($id);

        if ($request->method() == 'POST') {
            $region->name = $request->name;
            $region->name_in = $request->name_in;
            $region->slug = $request->slug;
            
            $region->save();
            session()->flash('message', 'Регион "' .$request->name. '" изменён.');
            return redirect('/admin/regions');
        }

        $data['region'] = $region;

        return view('admin.update-region', $data);
    }
}
