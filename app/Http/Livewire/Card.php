<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\posting;

class Card extends Component
{
    public function render(posting $post)
    {
        return view('livewire.card', [
            'post' => $post::all()
        ]);
    }
}
