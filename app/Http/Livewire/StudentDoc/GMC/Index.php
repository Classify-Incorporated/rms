<?php

namespace App\Http\Livewire\StudentDoc\GMC;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.g-m-c.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.gmcviewfile', ['student' => $id]);
    }
}
