<?php

namespace App\View\Components;

use App\Models\Producto;
use Illuminate\View\Component;

class Tabla extends Component
{
    public $tabla;
    public $encabezados;
    public $coleccion;

    public function __construct($tabla, $encabezados, $coleccion)
    {
        $this->tabla = $tabla;
        $this->encabezados = $encabezados;
        $this->coleccion = $coleccion;
    }

    public function render()
    {
        return view('components.tabla');
    }
}
