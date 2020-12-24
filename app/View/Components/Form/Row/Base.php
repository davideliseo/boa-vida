<?php

namespace App\View\Components\Form\Row;

use Illuminate\View\Component;

class Base extends Component
{
    public $type;
    public $label;
    public $icon;
    public $item;
    public $key;
    public $inputType;
    public $isRequired;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type,
        $label,
        $icon,
        $item,
        $key,
        $inputType,
        $isRequired
    ) {
        $this->type       = $type;
        $this->label      = $label;
        $this->icon       = $icon;
        $this->item       = $item;
        $this->key        = $key;
        $this->inputType  = $inputType;
        $this->isRequired = $isRequired;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view("components.form.row.base");
    }
}
