<?php

namespace App\Http\Livewire\StudentDoc\TORP;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.t-o-r-p.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.torpviewfile', ['student' => $id]);
    }
}
