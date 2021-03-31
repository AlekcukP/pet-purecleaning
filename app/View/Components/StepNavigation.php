<?php

namespace App\View\Components;

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
    public function __construct($stepsStatus = array(
        'one'=>'done',
        'two'=>'done',
        'three'=>'done',
        'four'=>'done'
        )
    )
    {
        $this->stepsStatus = $stepsStatus;
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
