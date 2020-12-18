<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $ancho;

    public function __construct($ancho)
    {
        $this->ancho = $ancho;
    }

    public function render()
    {
        return view('components.card');
    }
}
