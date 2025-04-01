<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MastersController extends Controller
{
    //
    public function index() 
    {
        $data['title'] = 'Для мастеров своего дела!';
        return view('site.for-the-masters', $data);
    }


    public function getPhoneMaster(Request $request)
    {
        $master_id = $request->input('id');
        $master = User::find($master_id);
        $phoneNumber = trim($master->phone);

        $pattern = '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/';
        $phone = preg_replace($pattern, '+7 ($2) $3-$4-$5', $phoneNumber);

        return response()->json([
            'phone' => $phone,
        ]);
    }


    public static function renderStars($ratingMaster, int $maxRating)
    {
        $stars = '';

        $rating = explode('.', round($ratingMaster, 1));

        $int = $rating[0];

        if (!empty($rating[1])) {
            $float = $rating[1];
        } else {
            $float = 0;
        }

        for ($i = 0; $i < $int; $i++) {
            $stars .= '<i class="bi bi-star-fill"></i>';
        }

        if ($float >= 5) {
            $stars .= '<i class="bi bi-star-half"></i>';
        } else {
            $stars .= '<i class="bi bi-star"></i>';
        }

        for ($e = 0; $e < $maxRating - $int - 1; $e++) {
            $stars .= '<i class="bi bi-star"></i>';
        }

        return $stars;
    }
}
