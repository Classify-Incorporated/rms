<?php

namespace App\Http\Livewire\StudentDoc;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.index')->layout('layouts.tabler.guest');
    }
}
