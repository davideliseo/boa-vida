<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Edit extends Component
{
    public $title;
    public $resource;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $resource, $item)
    {
        $this->title = $title;
        $this->resource = $resource;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card.edit');
    }
}
