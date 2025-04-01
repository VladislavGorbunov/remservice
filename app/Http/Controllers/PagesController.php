<?php
namespace App\Http\Controllers;

use App\Http\Controllers\MastersController;
use App\Models\Category;
use App\Models\Region;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Гланая страница
    public function index(Request $request)
    {

        $data['regionName']   = null;
        $data['regionNameIn'] = null;
        $data['title']        = 'Частные мастера по ремонту бытовой техники в любом городе России';
        $data['header_text']  = 'Частные мастера по ремонту бытовой техники во всех городах России';
        $data['categories']   = Category::get();

        return view('site.index', $data);
    }

    public function regionsPage(Request $request, $region = '/')
    {
        $region = Region::where('slug', $region)->first();

        if (! $region) abort(404);

        $users = User::where('region_id', $region->id)->where('isMaster', true)->get();

        $masters_array = [];

        $masters = MastersController::getMastersRegion($region->id);

        foreach ($masters as $master) {

            $experience = self::declension($master->experience, ['год', 'года', 'лет']);

            $stars = MastersController::renderStars(round($master->master_avg_estimation, 1), 5);

            $masters_array[] = [
                'id'             => $master->id,
                'name'           => $master->name,
                'lastname'       => $master->lastname,
                'phone'          => $master->phone,
                'experience'     => $master->experience ? $master->experience . ' ' . $experience : ' Не указан ',
                'aboutme'        => $master->aboutme,
                'region'         => $master->region_name,
                'region_slug'    => $master->region_slug,
                'categories'     => User::find($master->id)->subcategory,     // Категории ремонт. техники
                'reviews_count'  => $master->count_reviews,                   // Кол-во отзывов
                'avg_estimation' => round($master->master_avg_estimation, 1), // Средняя оценка
                'stars'          => $stars,
            ];
        }

        $data['masters'] = $masters_array;

        $data['regionName']   = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['title']        = 'Частные мастера по ремонту бытовой техники ' . $region->name_in . ', отзывы о мастерах, цены на ремонт';
        $data['description']  = 'Все проверенные частные мастера по ремонту бытовой техники ' . $region->name_in . ' на одном сайте. Читайте отзывы, сравнивайте цены на услуги, выбирайте проверенных специалистов.';
        $data['header_text']  = 'Частные мастера по ремонту бытовой техники ' . $region->name_in;
        $data['categories']   = Category::get();

        return view('site.region_index', $data);
    }

    public function subcategoryPage(Request $request, $region = '/', $subcategory)
    {
        $region = Region::where('slug', $region)->first();

        if (! $region) abort(404);

        $subcategory = SubCategory::where('slug', $subcategory)->first();

        if (! $subcategory) abort(404);
        
        $masters_array = [];

        $data['breadcrumb'] = [
            'region_name'             => $region->name,
            'region_url'              => $region->slug,
            'subcategory_pretext'     => 'Ремонт',
            'subcategory_plural_name' => mb_strtolower($subcategory->plural_name),
            'subcategory_url'         => $subcategory->slug,
        ];

        $masters = MastersController::getMastersSubCat($region->id, $subcategory->id);

        foreach ($masters as $master) {

            $experience = self::declension($master->experience, ['год', 'года', 'лет']);

            $stars = MastersController::renderStars(round($master->master_avg_estimation, 1), 5);

            $masters_array[] = [
                'id'             => $master->id,
                'name'           => $master->name,
                'lastname'       => $master->lastname,
                'phone'          => $master->phone,
                'experience'     => $master->experience ? $master->experience . ' ' . $experience : ' Не указан ',
                'aboutme'        => $master->aboutme,
                'region'         => $master->region_name,
                'region_slug'    => $master->region_slug,
                'categories'     => User::find($master->id)->subcategory,     // Категории ремонт. техники
                'reviews_count'  => $master->count_reviews,                   // Кол-во отзывов
                'avg_estimation' => round($master->master_avg_estimation, 1), // Средняя оценка
                'stars'          => $stars,
            ];
        }

        $data['masters'] = $masters_array;
        $data['links']   = $masters->links(); // Ссылки пагинации

        $data['title']        = 'Частные мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' ' . $region->name_in . ', рейтинг, отзывы, цены';
        $data['description']  = 'Вызвать частного мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' на дом ' . $region->name_in . '. Отзывы о мастерах, цены на ремонт ' . mb_strtolower($subcategory->plural_name);
        $data['header_text']  = 'Частные мастера по ремонту ' . mb_strtolower($subcategory->plural_name) . ' ' . $region->name_in;
        $data['regionName']   = $region->name;
        $data['regionNameIn'] = $region->name_in;
        $data['categories']   = Category::get();

        return view('site.subcategory', $data);
    }

    public static function declension($n, $titles)
    {
        $cases = [2, 0, 1, 1, 1, 2];
        return $titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
    }
}
