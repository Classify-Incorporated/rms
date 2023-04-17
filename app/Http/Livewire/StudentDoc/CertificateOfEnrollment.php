<?php

namespace App\Http\Livewire\StudentDoc;

use App\Models\SchoolMarkingPeriods;
use App\Models\Schools;
use App\Models\StudentEnrollment;
use App\Models\StudentReportCardGrades;
use App\Models\Students;
use Livewire\Component;

class CertificateOfEnrollment extends Component
{
    public $students = [];
    public $syear = [];
    public $selectedYear;

    public function mount()
    {
        // distinct method, only retrieve unique values from the 'syear'
        // $years = Schools::distinct('syear')
        //             ->pluck('syear');

        $this->syear = SchoolMarkingPeriods::select('syear', 'mp', 'title', 'marking_period_id')
                                    ->where('mp', 'ilike', 'QTR')
                                    ->orderBy('syear')
                                    ->orderBy('title')
                                    ->get();
    }

    public function render()
    {
        return view('livewire.student-doc.certificate-of-enrollment')->layout('layouts.tabler.guest');
    }


    public function updatedSelectedYear()
    {
        $obj = json_decode($this->selectedYear);
        if($this->selectedYear == "" || $this->selectedYear == null) {
            return $this->students = [];
        }
        // dd($obj);
        $this->students  = StudentReportCardGrades::with('student')
                ->select('student_id', 'marking_period_id')
                ->distinct()
                ->where('syear', 'ilike', $obj->syear)
                ->where('marking_period_id', 'ilike', $obj->marking_period_id)
                ->get();
    }

    public function viewFile($id, $marking_period_id)
    {
        to_route('sd.viewfile', [
            'student' => $id,
            'marking_period_id' => $marking_period_id
        ]);
    }
}
