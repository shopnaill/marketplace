<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $name;
    public $label;
    public $options;
       
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label = '',$options = []) 
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->options      = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-select');
    }
}