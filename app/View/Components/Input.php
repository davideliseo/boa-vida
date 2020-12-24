<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $isRequired;
    public $key;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isRequired, $key, $item = null)
    {
        $this->isRequired = $isRequired;
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
