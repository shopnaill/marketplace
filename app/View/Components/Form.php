<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
     /**
     * Request method.
     */
    public $method;
 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $method = 'POST')
    {
        $this->method = strtoupper($method);
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
