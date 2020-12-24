<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Index extends Component
{
    public $title;
    public $resource;
    public $model;
    public $collection;
    public $collectionName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $resource, $model, $collection, $collectionName)
    {
        $this->title = $title;
        $this->resource = $resource;
        $this->model = $model;
        $this->collection = $collection;
        $this->collectionName = $collectionName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card.index');
    }
}
