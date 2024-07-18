<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function chooseEnrollmentType()
    {
        return view('enrollment.choose');
    }
    
    public function newEnrollment()
    {
        return view('enrollment.new');
    }
    
    public function existingEnrollment()
    {
        return view('enrollment.existing');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'grade_level' => 'required|string',
            'student_name' => 'required|string|max:255',
            'address' => 'required|string',
            'parent_name' => 'required|string|max:255',
            'previous_school' => 'nullable|string|max:255',
            'term_payment' => 'required|string|in:cash,monthly',
        ]);

        Enrollment::create($validated);

        return redirect()->route('enrollment.choose')->with('success', 'Enrollment submitted successfully!');
    }
    
}
