<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductInfo extends Component
{
    public $title;
    public $price;
    public $photo;
    public $info;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$price,$photo,$id,$info)
    {
        $this->title = $title;
        $this->price = $price;
        $this->photo = $photo;
        $this->id    = $id;
        $this->info  = $info;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-info');
    }
}
