<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $title;
    public $price;
    public $promo;
    public $photo;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$price,$photo,$id,$promo=null)
    {
        $this->title = $title;
        $this->price = $price;
        $this->promo = $promo;
        $this->photo = $photo;
        $this->id    = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
