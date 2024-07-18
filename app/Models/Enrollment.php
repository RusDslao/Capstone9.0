<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_level',
        'student_name',
        'address',
        'parent_name',
        'previous_school',
        'term_payment',
    ];

    // Define any relationships here if needed
}
