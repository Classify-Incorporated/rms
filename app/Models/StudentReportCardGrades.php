<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReportCardGrades extends Model
{
    use HasFactory;

    protected $table = 'student_report_card_grades';

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id')->select('student_id', 'last_name', 'first_name', 'middle_name');
    }

    public function courseCode()
    {
        return $this->belongsTo(CoursePeriods::class, 'course_period_id', 'course_period_id')->select('course_period_id', 'short_name');
    }
}
