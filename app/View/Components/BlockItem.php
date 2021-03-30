<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlockItem extends Component
{
    public $question;
    public $description;
    public $fieldsetClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question = NULL, $description = NULL, $fieldsetClass = NULL)
    {
        $this->question = $question;
        $this->description = $description;
        $this->fieldsetClass = $fieldsetClass;
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
