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
        $data['user_prices'] = Price::where('user_id', Auth::user()->id)->where('key', '')->get();
        $data['diagnostic_price'] = Price::where('user_id', Auth::user()->id)->where('key', 'diagnostic')->first();
        $data['departure_price'] = Price::where('user_id', Auth::user()->id)->where('key', 'departure')->first();

        if (! $data['diagnostic_price']) {
            $data['diagnostic_price']['min_price'] = 0;
            $data['diagnostic_price']['max_price'] = 0;
        }

        if (! $data['departure_price']) {
            $data['departure_price']['min_price'] = 0;
            $data['departure_price']['max_price'] = 0;
        }

        if ($request->method() == 'POST') {
            
            $diagnostic  = $request->input('diagnostic');
            $departure   = $request->input('departure');
            $user_prices = $request->input('user_price');

            Price::create([
                'user_id' => Auth::user()->id,
                'name_service' => $diagnostic['name'],
                'min_price' => $diagnostic['min'],
                'max_price' => $diagnostic['max'],
                'key' => 'diagnostic',
            ]);

            Price::create([
                'user_id' => Auth::user()->id,
                'name_service' => $departure['name'],
                'min_price' => $departure['min'],
                'max_price' => $departure['max'],
                'key' => 'departure',
            ]);

            foreach ($request->input('user_price') as $price) {
                
                if ($price['name'] && $price['min'] && $price['max']) {
                    Price::create([
                        'user_id'       => Auth::user()->id,
                        'name_service'  => $price['name'],
                        'min_price'     => $price['min'],
                        'max_price'     => $price['max'],
                        'key'           => ''
                    ]);
                }
            }

            $request->session()->flash('message', 'Данные обновлены');
            return redirect('/panel');
        }

        return view('panel.price', $data);
    }
}
