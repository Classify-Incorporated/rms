<?php

namespace App\Http\Livewire\StudentDoc\EP;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.e-p.view')->layout('layouts.tabler.guest');
    }
}
