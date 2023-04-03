<?php

namespace App\Http\Livewire\StudentDoc\COG;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-g.view')->layout('layouts.tabler.guest');
    }
}
