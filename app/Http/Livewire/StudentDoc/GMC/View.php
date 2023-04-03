<?php

namespace App\Http\Livewire\StudentDoc\GMC;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.g-m-c.view')->layout('layouts.tabler.guest');
    }
}
