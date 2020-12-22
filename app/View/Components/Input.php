<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $key;
    public $value;
    public $isRequired;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key, $value, $isRequired)
    {
        $this->key = $key;
        $this->value = $value;
        $this->isRequired = $isRequired;
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
