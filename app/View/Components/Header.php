<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $titulo;
    public $btntipo;
    public $btntexto;
    public $btnruta;

    public function __construct($titulo, $btntipo, $btntexto, $btnruta)
    {
        $this->titulo = $titulo;
        $this->btntipo = $btntipo;
        $this->btntexto = $btntexto;
        $this->btnruta = $btnruta;
    }

    public function render()
    {
        return view('components.header');
    }
}
