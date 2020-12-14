<?php

namespace App\View\Components;

use App\Models\Producto;
use Illuminate\View\Component;

class Tabla extends Component
{
    public $tabla;
    public $encabezados;
    public $coleccion;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tabla, $encabezados, $coleccion)
    {
        $this->tabla = $tabla;
        $this->encabezados = $encabezados;
        $this->coleccion = $coleccion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tabla');
    }
}
