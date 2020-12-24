<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Base extends Component
{
    public $action;
    public $label;
    public $icon;
    public $color;
    public $item;
    public $resource;
    public $showText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $action,
        $label,
        $icon,
        $color,
        $item,
        $resource,
        $showText
    ) {
        $this->action   = $action;
        $this->label    = $label;
        $this->icon     = $icon;
        $this->color    = $color;
        $this->item     = $item;
        $this->resource = $resource;
        $this->showText = $showText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button.base');
    }
}
