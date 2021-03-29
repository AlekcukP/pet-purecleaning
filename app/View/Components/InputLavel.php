<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputLavel extends Component
{
    public $size;
    public $highest;
    public $lowest;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size, $highest, $lowest, $name)
    {
        $this->size = $size;
        $this->highest = $highest;
        $this->lowest = $lowest;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-lavel');
    }
}
