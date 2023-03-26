<?php

namespace App\Http\Livewire\StudentDoc;

use App\Models\SchoolMarkingPeriods;
use App\Models\StudentEnrollment;
use App\Models\Students;
use Livewire\Component;

class CertificateOfEnrollment extends Component
{
    public $students = [];
    public $syear = [];
    public $selectedYear;

    public function mount()
    {
        $this->syear = $this->getYears();
        // $this->students = Students::select('student_id', 'last_name', 'first_name', 'middle_name')->get();

        // dd($students[0]->students);
    }

    public function render()
    {
        return view('livewire.student-doc.certificate-of-enrollment')->layout('layouts.tabler.guest');
    }


    public function getYears()
    {
        $years = SchoolMarkingPeriods::distinct('syear')
                    ->pluck('syear');
        $items = $years->toArray();
        // dd($years);
        $transformedItems = [];

        foreach ($items as $schoolYearStart) {
            $schoolYearEnd = $schoolYearStart + 1;
            $transformedItems[] = "{$schoolYearStart} - {$schoolYearEnd}";
        }
        return $transformedItems;
    }

    public function updatedSelectedYear()
    {
        // dd($this->selectedYear);
        $years = explode(" - ", $this->selectedYear);
        $yearStart = $years[0];
        $yearEnd = $years[1];
        // $this->students = StudentEnrollment::with('student')
        //                         ->select('student_id')
        //                         ->distinct()
        //                         ->where('syear', 'ilike', $this->selectedYear)
        //                         ->get();
        $this->students  = StudentEnrollment::with('student')
                ->select('student_id')
                ->distinct()
                ->whereBetween('syear', [$yearStart, $yearEnd])
                ->get();
        // dd($data);
    }

    public function viewFile($id)
    {
        // dd($id);
        to_route('sd.viewfile', ['student' => $id]);
    }
}
