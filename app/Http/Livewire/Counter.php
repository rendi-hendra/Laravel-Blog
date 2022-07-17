<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\posting;
use App\Models\Category;

class Counter extends Component
{
    public function render(Category $category)
    {
        return view('livewire.counter', [
            'category' => $category::all()
        ]);
    }
}
