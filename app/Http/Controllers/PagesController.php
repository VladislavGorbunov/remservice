<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Region;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MastersController;

class PagesController extends Controller
{
    // Гланая страница
    public function index(Request $request) 
    {

        $data['regionName'] = null;
        $data['regionNameIn'] = null;
        $data['title'] = 'Частные мастера по ремонту бытовой техники в любом городе России';
        $data['header_text'] = 'Частные мастера по ремонту бытовой техники во всех городах России';
        $data['categories'] = Category::get();

        return view('site.index', $data);
    }


    public function regionsPage(Request $request, $region = '/') 
    {
       
        $region = Region::where('slug', $region)->first();
        
        if (!$region) abort(404);
        
        $users = User::where('region_id', $region->id)->where('isMaster', true)->get();

        $data['regionName'] = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['title'] = 'Частные мастера по ремонту бытовой техники ' . $region->name_in;
        $data['header_text'] = 'Частные мастера по ремонту бытовой техники ' . $region->name_in;
        $data['categories'] = Category::get();

        return view('site.index', $data);
    }


    public function subcategoryPage(Request $request, $region = '/', $subcategory) 
    {
        $region = Region::where('slug', $region)->first();
        if (!$region) abort(404);

        $subcategory = SubCategory::where('slug', $subcategory)->first();
        if (!$subcategory) abort(404);

        $masters_array = [];

        $data['breadcrumb'] = [
            'region_name' => $region->name,
            'region_url' => $region->slug,
            'subcategory_pretext' => 'Ремонт',
            'subcategory_plural_name' => mb_strtolower($subcategory->plural_name),
            'subcategory_url' => $subcategory->slug,
        ];

        


        $masters = User::select('users.*', 'regions.name as region_name', DB::raw('count(reviews.id) as count_reviews'), DB::raw('avg(reviews.estimation) as master_avg_estimation'))
            ->join('regions', 'regions.id', '=', 'users.region_id')
            ->join('users_subcategories', 'users_subcategories.user_id', '=', 'users.id')
            ->join('subcategories', 'subcategories.id', '=', 'users_subcategories.subcategory_id')
            ->leftJoin('reviews', 'reviews.user_id', '=', 'users.id')
            ->where('isMaster', true)
            ->where('users_subcategories.subcategory_id', $subcategory->id)
            ->where('region_id', $region->id)
            // ->orderBy('avg_estimation', 'desc') // По средней оценке
            ->orderBy('count_reviews', 'desc') // По количеству отзывов
            ->orderBy('experience', 'desc') // По опыту ремонта
            ->groupBy('users.id')
            ->paginate(10);
            

        foreach ($masters as $master) {
            
            $experience = self::declension($master->experience, ['год', 'года', 'лет']);

            $maxRating = 5;

            $rating = explode('.', round($master->master_avg_estimation, 1));

            $stars = MastersController::renderStars($rating, $maxRating);

            $masters_array[] = [
                'id' => $master->id,
                'name' => $master->name,
                'lastname' => $master->lastname,
                'phone' => $master->phone,
                'experience' => $master->experience ? $master->experience . ' ' .$experience : ' Не указан ',
                'aboutme' => $master->aboutme,
                'region' => $master->region_name,
                'categories' => User::find($master->id)->subcategory, // Категории ремонт. техники
                //'review_count' => User::find($master->id)->reviews->count(), // Количество отзывов
                'reviews_count' => $master->count_reviews, // Кол-во отзывов
                'avg_estimation' => round($master->master_avg_estimation, 1), // Средняя оценка
                'stars' => $stars
            ];
        }

        $data['masters'] = $masters_array;
        $data['links'] = $masters->links(); // Ссылки пагинации

        $data['title'] = 'Частные мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' ' . $region->name_in .', рейтинг, отзывы, цены';
        $data['header_text'] = 'Частные мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' ' . $region->name_in;
        $data['regionName'] = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['categories'] = Category::get();

        return view('site.subcategory', $data);
    }
    

    public static function declension($n, $titles)
    {
        $cases = array(2, 0, 1, 1, 1, 2);
        return $titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
    }
}
