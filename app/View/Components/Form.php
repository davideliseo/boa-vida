<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Formulario extends Component
{
    public $ruta;
    public $encabezados;
    public $item;
    public $btntexto;

    public function __construct($ruta, $encabezados, $item, $btntexto)
    {
        $this->ruta = $ruta;
        $this->encabezados = $encabezados;
        $this->item = $item;
        $this->btntexto = $btntexto;
    }

    public function render()
    {
        return view('components.formulario');
    }
}
