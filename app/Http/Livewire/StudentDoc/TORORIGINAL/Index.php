<?php

namespace App\Http\Livewire\StudentDoc\TORORIGINAL;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.t-o-r-o-r-i-g-i-n-a-l.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.tororiginalviewfile', ['student' => $id]);
    }
}
