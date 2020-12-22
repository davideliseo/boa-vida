<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonUpdate extends Component
{
    public $resource;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($resource, $item)
    {
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
        return view('components.button-update');
    }
}
