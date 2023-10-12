<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $color;
    public string $message;
    public string $type;


    public function __construct($color = null, $message = null, $type = null)
    {
        $this->color = $color ?? 'primary';
        $this->message = $message ?? 'Click me';
        $this->type = $type ?? 'button';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
