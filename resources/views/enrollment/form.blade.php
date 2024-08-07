@extends('layouts.app')

@section('content')
@vite(['resources/css/enrollment/form.css', 'resources/js/enrollment/form.js'])

<div class="d-flex align-items-center vh-100">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="header-section mb-4">
                            <h2 class="text-left mb-2 font-weight-bold">Online Enrollment for New or Existing Students</h2>
                            <h6 class="text-left text-muted">Complete this form to enroll your child at Mona Lisa Academy.</h6>
                            
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> Please fix the errors below.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                        </div>
                        <form id="formWizard" method="POST" action="{{ route('enrollment.store') }}" class="w-100" novalidate>
                            @csrf
                            <div class="d-flex">
                                <div class="nav flex-column nav-pills" id="pills-tab" role="tablist">
                                    @foreach([
                                        ['id' => 'basic', 'icon' => 'bi-person', 'label' => 'Basic Info'],
                                        ['id' => 'student', 'icon' => 'bi-person-lines-fill', 'label' => 'Student Info'],
                                        ['id' => 'address', 'icon' => 'bi-house-door', 'label' => 'Address'],
                                        ['id' => 'parent', 'icon' => 'bi-person-check', 'label' => 'Parent Info'],
                                        ['id' => 'payment', 'icon' => 'bi-credit-card', 'label' => 'Mode of Payment']
                                    ] as $tab)
                                    <a class="nav-link d-flex align-items-center{{ $loop->first ? ' active' : '' }}"
                                       id="pills-{{ $tab['id'] }}-tab"
                                       data-bs-toggle="pill"
                                       href="#pills-{{ $tab['id'] }}"
                                       role="tab"
                                       aria-controls="pills-{{ $tab['id'] }}"
                                       aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        <i class="bi {{ $tab['icon'] }} d-none d-md-inline"></i>
                                        <span class="d-none d-md-inline">{{ $tab['label'] }}</span>
                                        <i class="bi {{ $tab['icon'] }} d-md-none"></i>
                                    </a>
                                    @endforeach
                                </div>
                                
                                <div class="tab-content flex-grow-1 p-3">
                                    @foreach([
                                        ['id' => 'basic', 'title' => 'Basic Information', 'fields' => [
                                            ['label' => 'Education Level', 'type' => 'select', 'id' => 'educationLevel', 'name' => 'education_level', 'options' => [
                                                '' => 'Select education level',
                                                'preschool' => 'Pre-School',
                                                'primary' => 'Primary',
                                                'secondary' => 'Secondary'
                                            ]],
                                            ['label' => 'New or Existing', 'type' => 'select', 'id' => 'newExisting', 'name' => 'new_existing', 'options' => [
                                                '' => 'Select if new or existing',
                                                'new' => 'New',
                                                'existing' => 'Existing'
                                            ]],
                                            ['label' => 'Grade', 'type' => 'select', 'id' => 'grade', 'name' => 'grade', 'options' => [
                                                '' => 'Select grade'
                                            ]]
                                        ]],
                                        ['id' => 'student', 'title' => 'Student Information', 'fields' => [
                                            ['label' => 'First Name', 'type' => 'text', 'id' => 'firstName', 'name' => 'first_name'],
                                            ['label' => 'Middle Name', 'type' => 'text', 'id' => 'middleName', 'name' => 'middle_name'],
                                            ['label' => 'Last Name', 'type' => 'text', 'id' => 'lastName', 'name' => 'last_name'],
                                            ['label' => 'Gender', 'type' => 'select', 'id' => 'gender', 'name' => 'gender', 'options' => [
                                                '' => 'Select gender',
                                                'male' => 'Male',
                                                'female' => 'Female',
                                                'other' => 'Other'
                                            ]],
                                            ['label' => 'Age', 'type' => 'number', 'id' => 'age', 'name' => 'age'],
                                            ['label' => 'Citizenship', 'type' => 'text', 'id' => 'citizenship', 'name' => 'citizenship'],
                                            ['label' => 'Suffix Name', 'type' => 'text', 'id' => 'suffixName', 'name' => 'suffix_name'],
                                            ['label' => 'Birthplace', 'type' => 'text', 'id' => 'birthplace', 'name' => 'birthplace'],
                                            ['label' => 'Religion', 'type' => 'text', 'id' => 'religion', 'name' => 'religion'],
                                            ['label' => 'Date of Birth', 'type' => 'date', 'id' => 'dateOfBirth', 'name' => 'date_of_birth']
                                        ]],
                                        ['id' => 'address', 'title' => 'Address Information', 'fields' => [
                                            ['label' => 'Street # / Unit #', 'type' => 'text', 'id' => 'streetNumber', 'name' => 'street_number'],
                                            ['label' => 'Street', 'type' => 'text', 'id' => 'street', 'name' => 'street'],
                                            ['label' => 'Subdivision / Village / Bldg.', 'type' => 'text', 'id' => 'subdivision', 'name' => 'subdivision'],
                                            ['label' => 'City / Municipality', 'type' => 'text', 'id' => 'city', 'name' => 'city'],
                                            ['label' => 'Province', 'type' => 'text', 'id' => 'province', 'name' => 'province'],
                                            ['label' => 'Barangay', 'type' => 'text', 'id' => 'barangay', 'name' => 'barangay']
                                        ]],
                                        ['id' => 'parent', 'title' => 'Parent Information', 'fields' => [
                                            ['label' => "Father's Name", 'type' => 'text', 'id' => 'fatherName', 'name' => 'father_name'],
                                            ['label' => "Mother's Name", 'type' => 'text', 'id' => 'motherName', 'name' => 'mother_name'],
                                            ['label' => "Guardian's Name (if applicable)", 'type' => 'text', 'id' => 'guardianName', 'name' => 'guardian_name'],
                                            ['label' => 'Parent Email', 'type' => 'email', 'id' => 'parentEmail', 'name' => 'parent_email'],
                                            ['label' => 'Parent Phone', 'type' => 'tel', 'id' => 'parentPhone', 'name' => 'parent_phone'],
                                            ['label' => 'Parent Mobile Number', 'type' => 'tel', 'id' => 'parentMobile', 'name' => 'parent_mobile'],
                                            ['label' => "Father's Occupation", 'type' => 'text', 'id' => 'fatherOccupation', 'name' => 'father_occupation'],
                                            ['label' => "Mother's Occupation", 'type' => 'text', 'id' => 'motherOccupation', 'name' => 'mother_occupation']
                                        ]],
                                        ['id' => 'payment', 'title' => 'Payment Information', 'fields' => [
                                            ['label' => 'Payment Method', 'type' => 'select', 'id' => 'paymentMethod', 'name' => 'payment_method', 'options' => [
                                                '' => 'Select payment method',
                                                'inPerson' => 'In-Person',
                                                'bankTransfer' => 'Bank Transfer'
                                            ]],
                                            ['label' => 'Mode of Payment', 'type' => 'select', 'id' => 'paymentMode', 'name' => 'payment_mode', 'options' => [
                                                '' => 'Select mode of payment',
                                                'downPayment' => 'Down Payment',
                                                'monthly' => 'Monthly',
                                                'cash' => 'Cash'
                                            ]]
                                        ]]
                                    ] as $tab)
                                    <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}" id="pills-{{ $tab['id'] }}" role="tabpanel" aria-labelledby="pills-{{ $tab['id'] }}-tab">
                                        <h4 class="mb-4">{{ $tab['title'] }}</h4>
                                        <div class="row">
                                            @foreach($tab['fields'] as $field)
                                            <div class="col-md-6 mb-3">
                                                <label for="{{ $field['id'] }}" class="form-label">{{ $field['label'] }}</label>
                                                @if($field['type'] === 'select')
                                                <select class="form-select @error($field['name']) is-invalid @enderror" id="{{ $field['id'] }}" name="{{ $field['name'] }}" required>
                                                    @foreach($field['options'] as $value => $option)
                                                    <option value="{{ $value }}"{{ old($field['name']) == $value ? ' selected' : '' }}>{{ $option }}</option>
                                                    @endforeach
                                                </select>
                                                @error($field['name'])
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                @else
                                                <input type="{{ $field['type'] }}" class="form-control @error($field['name']) is-invalid @enderror" id="{{ $field['id'] }}" name="{{ $field['name'] }}" value="{{ old($field['name']) }}"{{ isset($field['required']) && $field['required'] ? ' required' : '' }}>
                                                @error($field['name'])
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            @if($loop->first)
                                            <button type="button" class="btn btn-primary btn-sm" id="nextButton-{{ $tab['id'] }}">Next</button>
                                            @elseif($loop->last)
                                            <button type="submit" class="btn btn-primary btn-sm" id="submitButton">Submit</button>
                                            @else
                                            <button type="button" class="btn btn-secondary btn-sm" id="backButton-{{ $tab['id'] }}">Back</button>
                                            <button type="button" class="btn btn-primary btn-sm" id="nextButton-{{ $tab['id'] }}">Next</button>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
