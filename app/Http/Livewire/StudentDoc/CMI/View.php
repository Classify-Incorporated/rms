<?php

namespace App\Http\Livewire\StudentDoc\CMI;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-m-i.view')->layout('layouts.tabler.guest');
    }
}
