<?php

namespace App\Http\Livewire\StudentDoc\COG;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class View extends Component
{
    public \App\Models\Students $student;
    public $syear;

    public function mount()
    {
        $this->syear = Request::query('syear');
    }

    public function render()
    {
        return view('livewire.student-doc.c-o-g.view')->layout('layouts.tabler.guest');
    }
}
