<?php

namespace App\Http\Livewire\StudentDoc\COE4;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-e4.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.coe4viewfile', ['student' => $id]);
    }
}
