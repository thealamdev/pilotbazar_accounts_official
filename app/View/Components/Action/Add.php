<?php

namespace App\View\Components\action;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class add extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $route, public ?string $name)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.add');
    }
}
