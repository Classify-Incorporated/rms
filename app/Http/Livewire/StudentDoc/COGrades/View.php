<?php

namespace App\Http\Livewire\StudentDoc\COGrades;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class View extends Component
{
    public \App\Models\Students $student;
    public $first_semester_data, $second_semester_data;
    public $average = [];

    public function mount()
    {
        // $this->students = \App\Models\StudentReportCardGrades::select('student_id', 'syear')
        //             ->distinct('student_id')
        //             ->get();
        // dd($students);
        // $marking_period = intval(Request::query('marking_period'));
        // $start_year = intval(Request::query('selectedYear'));
        // dd($this->student, $marking_period, $start_year);

        // $student_data = \App\Models\Students::with(['student_report_card_grades' => function ($query) {
        //             $start_year =  intval(Request::query('selectedYear'));
        //             $query->where('syear', 'ilike', $start_year)->orderBy('marking_period_id');
        //         }])
        //         ->whereHas('student_report_card_grades')
        //         ->select('student_id', 'last_name', 'first_name', 'middle_name', 'custom_200000012')
        //         ->where([
        //             'last_name'     => $this->student->last_name,
        //             'first_name'    =>  $this->student->first_name,
        //         ])
        //         ->get();

        $marking_periods = \App\Models\Students::with(['student_report_card_grades' => function ($query) {
            $start_year =  intval(Request::query('selectedYear'));
            $query->where('syear', 'ilike', $start_year)->distinct('marking_period_id')->orderBy('marking_period_id');
        }])
        ->whereHas('student_report_card_grades')
        ->select('student_id', 'last_name', 'first_name')
        ->where([
            'last_name'     => $this->student->last_name,
            'first_name'    =>  $this->student->first_name,
        ])
        ->get();


        // $filtered_student_data = $student_data->filter(function ($item) {
        //                             return $item->student_report_card_grades->isNotEmpty();
        //                         });;
        $filtered_marking_periods = $marking_periods->filter(function ($item) {
                                    return $item->student_report_card_grades->isNotEmpty();
                                });;
        // dd($filtered_student_data, $filtered_marking_periods);


        $first_semester = '';
        $second_semester = '';

        $student_marking_period = $filtered_marking_periods->first()->student_report_card_grades;

        foreach ($student_marking_period as $key => $value) {
            if($key == 0) {
                $first_semester = $value->marking_period_id;
            } else if ($key == 1) {
                $second_semester = $value->marking_period_id;
            }
        }

        // dd($first_semester, $second_semester);

        $this->first_semester_data = \App\Models\StudentReportCardGrades::with('courseCode')
                                ->where('student_id', 'ilike', $this->student->student_id)
                                ->where('marking_period_id', 'ilike', $first_semester)
                                ->get();
        $this->second_semester_data = \App\Models\StudentReportCardGrades::with('courseCode')
                                ->where('student_id', 'ilike', $this->student->student_id)
                                ->where('marking_period_id', 'ilike', $second_semester)
                                ->get();
        // dd($this->first_semester_data, $this->second_semester_data);
    }

    public function render()
    {
        return view('livewire.student-doc.c-o-grades.view')->layout('layouts.tabler.guest');
    }
}
