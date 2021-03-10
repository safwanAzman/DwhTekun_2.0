<?php

namespace App\View\Components\card;

use Illuminate\View\Component;

class FlipCard extends Component
{
   
    public function __construct()
    {
        
    }

    public function render()
    {
        return view('components.card.flip-card');
    }
}
