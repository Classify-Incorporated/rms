<?php

namespace App\Http\Livewire\StudentDoc\FORM137Req;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.f-o-r-m137-req.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.form137reqviewfile', ['student' => $id]);
    }
}
