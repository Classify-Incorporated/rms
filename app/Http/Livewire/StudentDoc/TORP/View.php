<?php

namespace App\Http\Livewire\StudentDoc\TORP;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.t-o-r-p.view')->layout('layouts.tabler.guest');
    }
}
