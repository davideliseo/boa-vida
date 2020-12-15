<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Detalle extends Component
{
    public $encabezados;
    public $item;
    public $btntexto;
    public $tabla;

    public function __construct($encabezados, $item, $btntexto, $tabla)
    {
        $this->encabezados = $encabezados;
        $this->item = $item;
        $this->btntexto = $btntexto;
        $this->tabla = $tabla;
    }

    public function render()
    {
        return view('components.detalle');
    }
}
