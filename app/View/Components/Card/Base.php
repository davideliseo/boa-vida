<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Base extends Component
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
        return view('components.card.base');
    }
}
