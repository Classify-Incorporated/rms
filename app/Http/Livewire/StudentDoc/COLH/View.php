<?php

namespace App\Http\Livewire\StudentDoc\COLH;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-l-h.view')->layout('layouts.tabler.guest');
    }
}
