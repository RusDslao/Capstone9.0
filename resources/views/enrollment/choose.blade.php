<!-- choose_enrollment_type.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2 class="text-center">Choose Enrollment Type</h2></div>

                <div class="card-body text-center">
                    <a href="{{ route('enrollment.new') }}" class="btn btn-primary btn-lg mb-3">New Enrollment</a><br>
                    <a href="{{ route('enrollment.existing') }}" class="btn btn-secondary btn-lg">Existing Enrollment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
