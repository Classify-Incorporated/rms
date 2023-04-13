<?php

namespace App\Http\Livewire\StudentDoc\TOROC;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.t-o-r-o-c.view')->layout('layouts.tabler.guest');
    }
}
