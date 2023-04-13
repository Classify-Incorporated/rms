<?php

namespace App\Http\Livewire\StudentDoc\COG;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-g.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.cogviewfile', ['student' => $id]);
    }
}
