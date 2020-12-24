<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Row extends Component
{
    public $type;
    public $label;
    public $icon;
    public $item;
    public $key;
    public $input;
    public $required;
    public $leading;

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
        $input,
        $required,
        $leading
    ) {
        $this->type     = $type;
        $this->label    = $label;
        $this->icon     = $icon;
        $this->item     = $item;
        $this->key      = $key;
        $this->input    = $input;
        $this->required = $required;
        $this->leading  = $leading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view("components.form.row");
    }
}
