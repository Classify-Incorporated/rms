<?php

namespace App\Http\Livewire\StudentDoc\HDTC;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.h-d-t-c.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.hdtcviewfile', ['student' => $id]);
    }
}
