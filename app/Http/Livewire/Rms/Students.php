<?php

namespace App\Http\Livewire\Rms;

use App\Models\StudentEnrollment;
use App\Models\StudentReportCardGrades;
use App\Models\Students as ModelsStudents;
use Livewire\Component;

class Students extends Component
{
    public $students = [];
    public function mount()
    {
        $this->students = ModelsStudents::select('student_id', 'last_name', 'first_name', 'middle_name')->get();

        // dd($this->students);
    }

    public function render()
    {
        return view('livewire.rms.students')->layout('layouts.tabler.guest');
    }
}
