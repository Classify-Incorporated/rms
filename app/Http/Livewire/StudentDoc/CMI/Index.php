<?php

namespace App\Http\Livewire\StudentDoc\CMI;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-m-i.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.cmiviewfile', ['student' => $id]);
    }
}
