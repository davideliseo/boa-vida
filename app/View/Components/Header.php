<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $title;
    public $btntype;
    public $btntext;
    public $btnroute;

    public function __construct($title, $btntype, $btntext, $btnroute)
    {
        $this->title = $title;
        $this->btntype = $btntype;
        $this->btntext = $btntext;
        $this->btnroute = $btnroute;
    }

    public function render()
    {
        return view('components.header');
    }
}
