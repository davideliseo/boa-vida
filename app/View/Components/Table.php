<?php

namespace App\View\Components;

use App\Models\Producto;
use Illuminate\View\Component;

class Table extends Component
{
    public $table;
    public $headers;
    public $collection;

    public function __construct($table, $headers, $collection)
    {
        $this->table = $table;
        $this->headers = $headers;
        $this->collection = $collection;
    }

    public function render()
    {
        return view('components.table');
    }
}
