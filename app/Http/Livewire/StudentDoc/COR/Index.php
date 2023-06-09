<?php

namespace App\Http\Livewire\StudentDoc\COR;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-r.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.corviewfile', ['student' => $id]);
    }
}
