<!-- enrollment/new.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Enrollment Form</h2>

    <form action="{{ route('enrollment.store') }}" method="POST">
        @csrf

        <!-- I. Grades School -->
        <h3>I. Grades School</h3>
        <div class="mb-3">
            <label for="grade_level" class="form-label">Grade Level:</label>
            <select class="form-select" id="grade_level" name="grade_level" required>
                <option value="preschool">Preschool</option>
                <option value="primary">Primary</option>
                <option value="secondary">Secondary</option>
            </select>
        </div>

        <!-- II. Student Information -->
        <h3>II. Student Information</h3>
        <div class="mb-3">
            <label for="student_name" class="form-label">Student's Name:</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>
        <!-- Add more student information fields as needed -->

        <!-- III. Permanent Address -->
        <h3>III. Permanent Address</h3>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <!-- IV. Parent/Guardian Information -->
        <h3>IV. Parent/Guardian Information</h3>
        <div class="mb-3">
            <label for="parent_name" class="form-label">Parent/Guardian's Name:</label>
            <input type="text" class="form-control" id="parent_name" name="parent_name" required>
        </div>
        <!-- Add more parent/guardian information fields as needed -->

        <!-- V. Previous Information -->
        <h3>V. Previous Information</h3>
        <div class="mb-3">
            <label for="previous_school" class="form-label">Previous School:</label>
            <input type="text" class="form-control" id="previous_school" name="previous_school">
        </div>
        <!-- Add more previous information fields as needed -->

        <!-- VI. Term of Payments -->
        <h3>VI. Term of Payments</h3>
        <div class="mb-3">
            <label class="form-label">Term of Payment:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="term_payment" id="term_cash" value="cash" required>
                <label class="form-check-label" for="term_cash">
                    Cash
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="term_payment" id="term_monthly" value="monthly" required>
                <label class="form-check-label" for="term_monthly">
                    Monthly
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
