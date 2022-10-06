<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TablerGuestLayout extends Component
{
    public $bg_white;

    public function __construct($bgwhite = null)
    {
        $this->bg_white = $bgwhite;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
