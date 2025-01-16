<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Region;

class ModalCitiesBlock extends Component
{
    public $cities = 13;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        // $cityModel = new Cities();
        $this->cities = Region::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-cities-block');
    }
}
