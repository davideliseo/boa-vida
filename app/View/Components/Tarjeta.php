<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tarjeta extends Component
{
    public $ancho;

    public function __construct($ancho)
    {
        $this->ancho = $ancho;
    }

    public function render()
    {
        return view('components.tarjeta');
    }
}
