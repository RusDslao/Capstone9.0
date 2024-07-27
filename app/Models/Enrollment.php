<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'enrollments'; 

    // Specify the fillable fields
    protected $fillable = [
        'enrollmentType',
        'fullName',
        'dob',
        'email',
        'mobileNumber',
        'gender',
        'gradeApplyingFor',
        'fathersName',
        'mothersName',
        'guardianName',
        'guardianContact',
        'guardianEmail',
        'address',
        'previousSchool',
        'lastGradeCompleted',
        'documents',
        'submissionMethod',
    ];

    // If timestamps are not used, set to false
    public $timestamps = false; 
}
