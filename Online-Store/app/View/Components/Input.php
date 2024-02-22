<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public string $name,
        public string $placeholder = "",
        public string $type = "text",
        public bool $disabled = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.input');
    }
}