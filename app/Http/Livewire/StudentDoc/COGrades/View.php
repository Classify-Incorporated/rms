<?php

namespace App\Http\Livewire\StudentDoc\COGrades;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.student-doc.c-o-grades.view')->layout('layouts.tabler.guest');
    }
}
