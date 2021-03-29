<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputIcon extends Component
{
    public $id;
    public $customClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $customClass)
    {
        $this->id = $id;
        $this->customClass = $customClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-icon');
    }
}
