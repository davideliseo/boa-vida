<?php

namespace App\View\Components\Table\Row;

use Illuminate\View\Component;

class Actions extends Component
{
    public $resource;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($resource, $item)
    {
        $this->resource = $resource;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.table.row.actions');
    }
}
