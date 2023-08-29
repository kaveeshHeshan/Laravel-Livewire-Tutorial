<?php

namespace App\Livewire\Child;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Shop extends Component
{
    #[Layout('components.layouts.child')]
    public function render()
    {
        return view('livewire.child.shop');
    }
}
