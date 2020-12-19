<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sheet extends Component
{
    public $headers;
    public $item;
    public $btntext;
    public $table;

    public function __construct($headers, $item, $btntext, $table)
    {
        $this->headers = $headers;
        $this->item = $item;
        $this->btntext = $btntext;
        $this->table = $table;
    }

    public function render()
    {
        return view('components.sheet');
    }
}
