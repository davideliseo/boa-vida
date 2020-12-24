<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $resource;
    public $item;
    public $showText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $resource, $item = null, $showText = true)
    {
        $this->type = $type;
        $this->resource = $resource;
        $this->item = $item;
        $this->showText = $showText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view("components.button.{$this->type}");
    }
}
