<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $required;
    public $key;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($required, $key, $item = null)
    {
        $this->required = $required;
        $this->key = $key;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
