<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReportCardGrades extends Model
{
    use HasFactory;

    protected $table = 'student_report_card_grades';

    public function students()
    {
        return $this->belongsTo(Students::class, 'student_id', 'student_id');
    }
}
