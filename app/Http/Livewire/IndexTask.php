<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;

class IndexTask extends Component
{
    protected $listeners = [
        'indexTask'
    ];

    public function render()
    {
        return view('livewire.index-task');
    }
}
