<?php

namespace App\Http\Livewire\StudentDoc\SG;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.s-g.index')->layout('layouts.tabler.guest');
    }
    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.sgviewfile', ['student' => $id]);
    }
}

