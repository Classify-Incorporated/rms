<?php

namespace App\Http\Livewire\StudentDoc\COGrades;

use Livewire\Component;

class Index extends Component
{
    public $students = [];
    public $syear = [];
    public $selectedYear;

    public function mount()
    {
        $this->syear = \App\Models\SchoolMarkingPeriods::select('syear', 'mp', 'title', 'marking_period_id')
                                    // ->where('mp', 'ilike', 'QTR')
                                    ->distinct('syear')
                                    ->orderBy('syear')
                                    ->orderBy('title')
                                    ->get();
        // dd($this->syear);
    }

    public function render()
    {
        return view('livewire.student-doc.c-o-grades.index')->layout('layouts.tabler.guest');
    }

    public function updatedSelectedYear()
    {
        // dd(intval($this->selectedYear));
        if ($this->selectedYear == "" || $this->selectedYear == null) {
            return $this->students = [];
        }

        $schoolYearStart = intval($this->selectedYear);
        // dd($schoolYearEnd, 'schoolYearEnd');

        $this->students  = \App\Models\StudentReportCardGrades::with('student_cert_of_grades')
                            ->select('student_id', 'marking_period_id')
                            ->distinct('student_id')
                            ->where('syear', 'ilike', $schoolYearStart)
                            ->get();
        // dd($this->students);
    }

    public function viewFile($id, $marking_period)
    {
        // dd($id, $marking_period, $this->selectedYear);
        to_route('sd.cogradesviewfile', [
            'student'           =>  $id,
            'marking_period'    =>  $marking_period,
            'selectedYear'      =>  $this->selectedYear,
        ]);
    }
}
