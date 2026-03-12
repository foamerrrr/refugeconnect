<?php

namespace App\View\Components;

use App\Models\Animal;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnimalCard extends Component
{
    public Animal $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function render(): View|Closure|string
    {
        return view('components.animal-card');
    }
}

