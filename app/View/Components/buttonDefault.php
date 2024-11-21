<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class buttonDefault extends Component
{

    public $background;
    public $size;
    public $route;

    public function __construct($background = 'bg-blue-500', $size = '', $route = '')
    {
        $this->background = $background;
        $this->route = $route;
        $this->size = $size;
    }

    public function render(): View|Closure|string
    {
        return view('components.button-default');
    }
}
