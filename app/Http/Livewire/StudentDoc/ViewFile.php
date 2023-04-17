<?php

namespace App\Http\Livewire\StudentDoc;

use App\Models\SchoolMarkingPeriods;
use App\Models\StudentReportCardGrades;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ViewFile extends Component
{

    public \App\Models\Students $student;
    public $student_grades;
    public $schoolMarking;
    public $total = 0;

    public function mount()
    {
        $markingPeriodId = Request::query('marking_period_id');
        $this->student_grades = StudentReportCardGrades::with('courseCode')
                                                    ->where('student_id', 'ilike', $this->student->student_id)
                                                    ->where('marking_period_id', 'ilike', $markingPeriodId)
                                                    ->get();

        $this->schoolMarking = SchoolMarkingPeriods::select('syear', 'short_name')
                                                    ->where('marking_period_id', 'ilike', $markingPeriodId)
                                                    ->first();
        // dd($this->student_grades, $this->schoolMarking);
    }

    public function render()
    {
        return view('livewire.student-doc.view-file')->layout('layouts.tabler.guest');
    }
}
