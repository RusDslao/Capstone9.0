<?php
// app/Http/Controllers/EnrollmentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function new()
    {
        $newEnrollments = Enrollment::where('status', 'new')->count();
        return view('new', compact('newEnrollments'));
    }

    public function showForm()
    {
        return view('enrollment.form'); // Adjust the view path as needed
    }

    public function store(Request $request)
    {
        $request->validate([
            'education_level' => 'required|string',
            'new_existing' => 'required|string',
            'grade' => 'nullable|string',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'citizenship' => 'required|string',
            'suffix_name' => 'nullable|string',
            'birthplace' => 'required|string',
            'religion' => 'required|string',
            'date_of_birth' => 'required|date',
            'street_number' => 'required|string',
            'street' => 'required|string',
            'subdivision' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'barangay' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'guardian_name' => 'nullable|string',
            'parent_email' => 'required|email',
            'parent_phone' => 'required|string',
            'parent_mobile' => 'required|string',
            'father_occupation' => 'required|string',
            'mother_occupation' => 'required|string',
            'payment_method' => 'required|string',
            'payment_mode' => 'required|string',
        ]);

        Enrollment::create($request->all());

        return redirect()->route('enrollment.form')->with('success', 'Form submitted successfully!');
    }
}
