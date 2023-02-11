<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $disc;
    public $image;

    public function __construct($title , $disc , $image)
    {
        $this->title=$title;
        $this->disc=$disc;
        $this->image=$image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
