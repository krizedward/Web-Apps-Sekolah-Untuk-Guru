<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    
    protected $fillable = [
        'class_id',
        'teacher_id',
        'nis',
        'nisn',
        'name',
        'place_of_birth',
        'date_of_birth',
        'religion',
        'address',
        'gender',
        'name_student_guardian',
        'status_student_guardian',
        'photo_student',
    ];
}
