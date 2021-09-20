<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormCheckbox extends Component
{
    public $name;
    public $label;
    public $value;
    public $checked = false;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(  $name, $label = '', $value = 1, $checked)
    {
        $this->name       = $name;
        $this->label      = $label;
        $this->value      = $value;
        $this->checked    = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-checkbox');
    }
}
