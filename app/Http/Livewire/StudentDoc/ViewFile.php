<?php

namespace App\Http\Livewire\StudentDoc;

use Livewire\Component;

class ViewFile extends Component
{
    public function render()
    {
        return view('livewire.student-doc.view-file')->layout('layouts.tabler.guest');
    }
}
