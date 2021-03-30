<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseBlock extends Component
{
    public $blockName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blockName = NULL)
    {
        $this->blockName = $blockName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.base-block');
    }
}
