<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MastersController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'Для мастеров своего дела!';
        return view('site.for-the-masters', $data);
    }

    public static function getMastersRegion(int $region_id)
    {
        return User::select('users.*', 'regions.name as region_name', 'regions.slug as region_slug', DB::raw('count(reviews.id) as count_reviews'), DB::raw('avg(reviews.estimation) as master_avg_estimation'))
            ->join('regions', 'regions.id', '=', 'users.region_id')
            ->join('users_subcategories', 'users_subcategories.user_id', '=', 'users.id')
            ->join('subcategories', 'subcategories.id', '=', 'users_subcategories.subcategory_id')
            ->leftJoin('reviews', 'reviews.user_id', '=', 'users.id')
            ->where('isMaster', true)
            ->where('region_id', $region_id)
            ->orderBy('master_avg_estimation', 'desc') // По средней оценке
            ->orderBy('count_reviews', 'desc')         // По количеству отзывов
            ->orderBy('experience', 'desc')            // По опыту ремонта
            ->groupBy('users.id')
            ->limit(10)
            ->get();
    }

    public static function getMastersSubCat(int $region_id, $subcategory_id)
    {
        return User::select('users.*', 'regions.name as region_name', 'regions.slug as region_slug', DB::raw('count(reviews.id) as count_reviews'), DB::raw('avg(reviews.estimation) as master_avg_estimation'))
            ->join('regions', 'regions.id', '=', 'users.region_id')
            ->join('users_subcategories', 'users_subcategories.user_id', '=', 'users.id')
            ->join('subcategories', 'subcategories.id', '=', 'users_subcategories.subcategory_id')
            ->leftJoin('reviews', 'reviews.user_id', '=', 'users.id')
            ->where('isMaster', true)
            ->where('users_subcategories.subcategory_id', $subcategory_id)
            ->where('region_id', $region_id)
            ->orderBy('master_avg_estimation', 'desc') // По средней оценке
            ->orderBy('count_reviews', 'desc')         // По количеству отзывов
            ->orderBy('experience', 'desc')            // По опыту ремонта
            ->groupBy('users.id')
            ->paginate(10);
    }

    public function getPhoneMaster(Request $request)
    {
        $master_id   = $request->input('id');
        $master      = User::find($master_id);
        $phoneNumber = trim($master->phone);

        $pattern = '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/';
        $phone   = preg_replace($pattern, '+7 ($2) $3-$4-$5', $phoneNumber);

        return response()->json([
            'phone' => $phone,
        ]);
    }

    public static function renderStars($ratingMaster, int $maxRating)
    {
        $stars = '';

        $rating = explode('.', round($ratingMaster, 1));

        $int = $rating[0];

        if (! empty($rating[1])) {
            $float = $rating[1];
        } else {
            $float = 0;
        }

        for ($i = 0; $i < $int; $i++) {
            $stars .= '<i class="bi bi-star-fill"></i>';
        }
        
        if ($float >= 5) {
            $stars .= '<i class="bi bi-star-half"></i>';
        } elseif ($float < 5 && $int != 5) {
            $stars .= '<i class="bi bi-star"></i>f';
        }

        for ($e = 0; $e < $maxRating - $int - 1; $e++) {
            $stars .= '<i class="bi bi-star"></i>';
        }

        return $stars;
    }
}
