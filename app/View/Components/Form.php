<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $route;
    public $headers;
    public $item;
    public $btntext;

    public function __construct($route, $headers, $item, $btntext)
    {
        $this->route = $route;
        $this->headers = $headers;
        $this->item = $item;
        $this->btntext = $btntext;
    }

    public function render()
    {
        return view('components.form');
    }
}
