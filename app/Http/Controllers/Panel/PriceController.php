<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Price;
use Illuminate\Support\Facades\Validator;

class PriceController extends Controller
{
    //
    public function price(Request $request)
    {
        $data['prices'] = Price::where('user_id', Auth::user()->id)->get();

        if ($request->method() == 'POST') {
            
            foreach ($request->input()['price'] as $price) {
                
                if ($price['name'] && $price['min'] && $price['max']) {

                    Price::create([
                        'user_id' => Auth::user()->id,
                        'name_service' => $price['name'],
                        'min_price' => $price['min'],
                        'max_price' => $price['max'],
                    ]);
                }
            }

            $request->session()->flash('message', 'Данные обновлены');
            return redirect('/panel');
        }

        return view('panel.price', $data);
    }
}
