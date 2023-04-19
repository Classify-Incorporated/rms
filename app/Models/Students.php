<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'student_id';

    public function getFullNameAttribute()
    {
        return "{$this->last_name}, {$this->first_name}, {$this->middle_name}";
    }

    public function student_report_card_grades()
    {
        return $this->hasMany(StudentReportCardGrades::class, 'student_id', 'student_id');
    }
}
