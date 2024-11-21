<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputDefault extends Component
{

    public $identify;
    /*   public $label; */
    public $type;
    public $placeholder;


    public function __construct($identify, $placeholder,/*  $label */ $type)
    {
        $this->identify = $identify;
        /*         $this->label = $label; */
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-default');
    }
}
