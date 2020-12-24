<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconLabel extends Component
{
    public $label;
    public $icon;
    public $showText;
    public $pr;
    public $md;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $icon, $showText = true, $pr = 2, $md = 18)
    {
        $this->label = $label;
        $this->icon = $icon;
        $this->showText = $showText;
        $this->pr = $pr;
        $this->md = $md;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.icon-label');
    }
}
