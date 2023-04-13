<?php

namespace App\Http\Livewire\StudentDoc\COR;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-r.view')->layout('layouts.tabler.guest');
    }
}
