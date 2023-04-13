<?php

namespace App\Http\Livewire\StudentDoc\SG;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.s-g.view')->layout('layouts.tabler.guest');
    }
}
