<?php

namespace App\Http\Livewire\StudentDoc\COGrades;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-grades.index')->layout('layouts.tabler.guest');
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.cogradesviewfile', ['student' => $id]);
    }
}
