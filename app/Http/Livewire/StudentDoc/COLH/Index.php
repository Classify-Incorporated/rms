<?php

namespace App\Http\Livewire\StudentDoc\COLH;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-l-h.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.colhviewfile', ['student' => $id]);
    }
}
