<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnrollment extends Model
{
    use HasFactory;

    protected $table = 'student_enrollment';

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id', 'student_id')->select('student_id', 'last_name', 'first_name', 'middle_name');
    }
}
