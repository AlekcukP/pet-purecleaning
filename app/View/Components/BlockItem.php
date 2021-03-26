<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlockItem extends Component
{
    public $question;
    public $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question = NULL, $description = NULL)
    {
        $this->question = $question;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.block-item');
    }
}
