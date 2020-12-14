<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cabecera extends Component
{
    public $titulo;
    public $btntipo;
    public $btntexto;
    public $btnruta;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $btntipo, $btntexto, $btnruta)
    {
        $this->titulo = $titulo;
        $this->btntipo = $btntipo;
        $this->btntexto = $btntexto;
        $this->btnruta = $btnruta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cabecera');
    }
}
