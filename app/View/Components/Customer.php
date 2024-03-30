<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Customer extends Component
{
    public $name;
    public $type;
    public $label;

    public function __construct($type, $name, $label)
    {
        $this-> type=$type;
        $this-> name=$name;
        $this-> label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customer');
    }
}
