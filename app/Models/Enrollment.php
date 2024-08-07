<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'education_level',
        'new_existing',
        'grade',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'age',
        'citizenship',
        'suffix_name',
        'birthplace',
        'religion',
        'date_of_birth',
        'street_number',
        'street',
        'subdivision',
        'city',
        'province',
        'barangay',
        'father_name',
        'mother_name',
        'guardian_name',
        'parent_email',
        'parent_phone',
        'parent_mobile',
        'father_occupation',
        'mother_occupation',
        'payment_method',
        'payment_mode',
    ];
}
