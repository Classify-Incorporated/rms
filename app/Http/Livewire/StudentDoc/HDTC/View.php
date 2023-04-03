<?php

namespace App\Http\Livewire\StudentDoc\HDTC;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.h-d-t-c.view')->layout('layouts.tabler.guest');
    }
}
