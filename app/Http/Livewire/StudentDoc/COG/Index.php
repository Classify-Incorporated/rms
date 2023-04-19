<?php

namespace App\Http\Livewire\StudentDoc\COG;

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
        return view('livewire.student-doc.c-o-g.index')->layout('layouts.tabler.guest');
    }

    public function updatedSelectedYear()
    {
        if ($this->selectedYear == "" || $this->selectedYear == null) {
            return $this->students = [];
        }
        $schoolYearStart = intval($this->selectedYear);
        $this->students  = \App\Models\StudentReportCardGrades::with('student_cert_of_grades')
                            ->select('student_id', 'marking_period_id')
                            ->distinct('student_id')
                            ->where('syear', 'ilike', $schoolYearStart)
                            ->get();
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.cogviewfile', [
            'student'   => $id,
            'syear'     =>  $this->selectedYear
        ]);
    }
}
