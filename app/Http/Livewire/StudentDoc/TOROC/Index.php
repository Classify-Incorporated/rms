<?php

namespace App\Http\Livewire\StudentDoc\TOROC;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.t-o-r-o-c.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.torocviewfile', ['student' => $id]);
    }
}
