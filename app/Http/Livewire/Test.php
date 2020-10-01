<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $page = 1;

    public function toggle()
    {
        $this->page = $this->page === 1 ? 2 : 1;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
