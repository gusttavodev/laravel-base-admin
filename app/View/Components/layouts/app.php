<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class app extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.layouts.app');
    }
}
