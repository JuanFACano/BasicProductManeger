<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headingDefult extends Component
{

    public $text;

    public function __construct($text = 'Default Heading')
    {
        $this->text = $text;
    }


    public function render(): View|Closure|string
    {
        return view('components.heading-defult');
    }
}
