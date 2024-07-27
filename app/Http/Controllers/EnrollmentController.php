<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('enrollment.form');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'enrollmentType' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:enrollments,email',
            'mobileNumber' => 'required|string|max:15',
            'gender' => 'required|string',
            'gradeApplyingFor' => 'required|string',
            'fathersName' => 'required|string|max:255',
            'mothersName' => 'required|string|max:255',
            'guardianName' => 'nullable|string|max:255',
            'guardianContact' => 'nullable|string|max:15',
            'guardianEmail' => 'nullable|email',
            'address' => 'required|string|max:255',
            'previousSchool' => 'required|string|max:255',
            'lastGradeCompleted' => 'required|string|max:255',
            'attachments.*' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'submissionMethod' => 'required|string',
        ]);

        // Handle file uploads
        $attachmentPaths = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $attachmentPaths[] = $file->store('attachments', 'public');
            }
        }

        // Store the data in the database
        Enrollment::create([
            'enrollmentType' => $request->input('enrollmentType'),
            'fullName' => $request->input('fullName'),
            'dob' => $request->input('dob'),
            'email' => $request->input('email'),
            'mobileNumber' => $request->input('mobileNumber'),
            'gender' => $request->input('gender'),
            'gradeApplyingFor' => $request->input('gradeApplyingFor'),
            'fathersName' => $request->input('fathersName'),
            'mothersName' => $request->input('mothersName'),
            'guardianName' => $request->input('guardianName'),
            'guardianContact' => $request->input('guardianContact'),
            'guardianEmail' => $request->input('guardianEmail'),
            'address' => $request->input('address'),
            'previousSchool' => $request->input('previousSchool'),
            'lastGradeCompleted' => $request->input('lastGradeCompleted'),
            'documents' => json_encode($attachmentPaths),
            'submissionMethod' => $request->input('submissionMethod'),
        ]);

        return redirect()->back()->with('success', 'Enrollment submitted successfully!');
    }
}
