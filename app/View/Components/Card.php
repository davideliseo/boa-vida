<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $type;
    public $title;

    public function __construct($type, $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.card');
    }
}
