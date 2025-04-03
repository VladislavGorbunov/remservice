<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Price;

class PriceController extends Controller
{
    //
    public function price(Request $request)
    {
        $prices = Price::where('user_id', Auth::user()->id)->get();

        var_dump($prices);

        if ($request->method() == 'POST') {
            
            foreach ($request->input()['price'] as $price) {
                
                Price::create([
                    'user_id' => Auth::user()->id,
                    'name_service' => $price['name'],
                    'min_price' => $price['min'],
                    'max_price' => $price['max'],
                ]);
            }

            $request->session()->flash('message', 'Данные обновлены');
            return redirect('/panel');
        }

        return view('panel.price');
    }
}
