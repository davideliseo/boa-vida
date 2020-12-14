<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Formulario extends Component
{
    public $ruta;
    public $encabezados;
    public $item;
    public $btntexto;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ruta, $encabezados, $item, $btntexto)
    {
        $this->ruta = $ruta;
        $this->encabezados = $encabezados;
        $this->item = $item;
        $this->btntexto = $btntexto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.formulario');
    }

    public function patches()
    {
        // Si el item existe,  el formulario edita ese item.
        return $this->item != null;
    }
}
