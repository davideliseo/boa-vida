<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function render()
    {
        return view('components.card');
    }
}
