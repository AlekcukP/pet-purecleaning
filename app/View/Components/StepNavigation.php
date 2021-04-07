<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class StepNavigation extends Component
{
    public $stepsStatus;
    public $stepsValue;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->stepsStatus['home'] = Session::get('home');
        $this->stepsStatus['personal'] = Session::get('personal');
        $this->stepsStatus['materials'] = Session::get('materials');
        $this->stepsStatus['extras'] = Session::get('extras');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.step-navigation');
    }
}
