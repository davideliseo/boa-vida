<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Create extends Component
{
    public $title;
    public $resource;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $resource)
    {
        $this->title = $title;
        $this->resource = $resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card.create');
    }
}
