<?php

namespace App\Http\Livewire\StudentDoc\EP;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.e-p.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.epviewfile', ['student' => $id]);
    }
}
