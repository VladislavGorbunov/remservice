<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Region;


class ModalCity extends Component
{
    public $cities = 13;
    public $region = 4234;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cities = Region::get();
        $this->region = 31231;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-city');
    }
}
