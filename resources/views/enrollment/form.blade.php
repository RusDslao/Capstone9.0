<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Enrollment Form</title>
    <link href="{{ mix('css/icon.css') }}" rel="stylesheet">
    <link href="{{ mix('css/enrollment/form.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="navbar-brand fw-bold" style="text-decoration: none; margin-bottom: 20px;">
            <a href="{{ url('/') }}" style="text-decoration: none; color: inherit;">School Enrollment</a>
        </header>
        <form action="{{ url('/submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <ul class="nav nav-pills steps" id="pills-tab" role="tablist">
                <!-- Nav tabs go here -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link step active" id="pills-home-tab" data-bs-toggle="pill" role="tab" data-bs-target="#pills-home" aria-controls="pills-home" aria-selected="true">
                        <i class="bi bi-info-circle" onclick="event.preventDefault(); event.stopPropagation();"></i>
                        <span class="step-text" onclick="event.preventDefault(); event.stopPropagation();">Enrollment Type</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link step" id="pills-profile-tab" data-bs-toggle="pill" role="tab" data-bs-target="#pills-profile" aria-controls="pills-profile" aria-selected="false">
                        <i class="bi bi-person" onclick="event.preventDefault(); event.stopPropagation();"></i>
                        <span class="step-text" onclick="event.preventDefault(); event.stopPropagation();">Student Information</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link step" id="pills-contact-tab" data-bs-toggle="pill" role="tab" data-bs-target="#pills-contact" aria-controls="pills-contact" aria-selected="false">
                        <i class="bi bi-book" onclick="event.preventDefault(); event.stopPropagation();"></i>
                        <span class="step-text" onclick="event.preventDefault(); event.stopPropagation();">Previous Education</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link step" id="pills-attachments-tab" data-bs-toggle="pill" role="tab" data-bs-target="#pills-attachments" aria-controls="pills-attachments" aria-selected="false">
                        <i class="bi bi-paperclip" onclick="event.preventDefault(); event.stopPropagation();"></i>
                        <span class="step-text" onclick="event.preventDefault(); event.stopPropagation();">Attachments</span>
                    </a>
                </li>
            </ul>
            
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab panes go here -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="form-details text-center">
                                <h5 class="title">Enrollment Type</h5>
                                <div class="fields mt-3">
                                    <div class="input-field">
                                        <label for="enrollmentType" class="form-label">Select Enrollment Type</label>
                                        <select id="enrollmentType" name="enrollmentType" class="form-select" required>
                                            <option disabled selected>Select type</option>
                                            <option value="new">New Enrollment</option>
                                            <option value="existing">Existing Enrollment</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary nextBtn mt-4">
                                    <span class="btnText">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Information -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form-details">
                        <h5 class="title">Student Information</h5>
                        <div class="fields">
                            <div class="input-field mb-3">
                                <label for="full-name">Full Name</label>
                                <input type="text" id="full-name" name="fullName" placeholder="Enter your name" class="form-control" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="input-field mb-3">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" name="dob" class="form-control" required>
                                <div class="invalid-feedback">Please enter your date of birth.</div>
                            </div>
                            <div class="input-field mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="input-field mb-3">
                                <label for="mobile">Mobile Number</label>
                                <input type="tel" id="mobile" name="mobileNumber" placeholder="Enter mobile number" class="form-control" required>
                                <div class="invalid-feedback">Please enter your mobile number.</div>
                            </div>
                            <div class="input-field mb-3">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-select" required>
                                    <option disabled selected>Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Others</option>
                                </select>
                                <div class="invalid-feedback">Please select your gender.</div>
                            </div>
                            <div class="input-field mb-3">
                                <label for="grade">Grade Applying For</label>
                                <input type="tel" id="grade" name="gradeApplyingFor" placeholder="Enter grade (Ex. 7)" class="form-control" required>
                                <div class="invalid-feedback">Please enter a valid grade.(Ex. 7)</div>
                            </div>
                        </div>
                
                        <h5 class="title mt-4">Parent/Guardian Information</h5>
                        <div class="fields">
                            <div class="input-field mb-3">
                                <label for="father-name">Father's Name</label>
                                <input type="text" id="father-name" name="fathersName" placeholder="Enter father's name" class="form-control" required>
                            </div>
                            <div class="input-field mb-3">
                                <label for="mother-name">Mother's Name</label>
                                <input type="text" id="mother-name" name="mothersName" placeholder="Enter mother's name" class="form-control" required>
                            </div>
                            <div class="input-field mb-3">
                                <label for="guardian-name">Guardian's Name (if applicable)</label>
                                <input type="text" id="guardian-name" name="guardianName" placeholder="Enter guardian's name" class="form-control">
                            </div>
                            <div class="input-field mb-3">
                                <label for="guardian-contact">Guardian's Contact Number</label>
                                <input type="tel" id="guardian-contact" name="guardianContact" placeholder="Enter guardian's contact number" class="form-control">
                            </div>
                            <div class="input-field mb-3">
                                <label for="guardian-email">Guardian's Email Address</label>
                                <input type="email" id="guardian-email" name="guardianEmail" placeholder="Enter guardian's email" class="form-control">
                            </div>
                            <div class="input-field mb-3">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" placeholder="Enter address" class="form-control" required>
                            </div>
                        </div>
                
                        <div class="buttons d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-secondary d-flex align-items-center backBtn">
                                <span class="btnText">Back</span>
                            </button>
                            <button type="button" class="btn btn-primary d-flex align-items-center nextBtn">
                                <span class="btnText">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Previous Education -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="form-details">
                        <h5 class="title">Previous Education</h5>
                        <div class="fields">
                            <div class="input-field">
                                <label for="previousSchool">Previous School</label>
                                <input type="text" id="previousSchool" name="previousSchool" placeholder="Enter previous school name" class="form-control" required>
                            </div>
                            <div class="input-field">
                                <label for="lastGradeCompleted">Last Grade Completed</label>
                                <input type="tel" id="lastGradeCompleted" name="lastGradeCompleted" placeholder="Enter last grade completed" class="form-control" required>
                            </div>
                        </div>
                        <div class="buttons">
                            <button type="button" class="backBtn btn btn-secondary mt-4">
                                <span class="btnText">Back</span>
                            </button>
                            <button type="button" class="nextBtn btn btn-primary mt-4">
                                <span class="btnText">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Attachments -->
                <div class="tab-pane fade" id="pills-attachments" role="tabpanel" aria-labelledby="pills-attachments-tab">
                    <div class="form-details">
                        <h5 class="title">Attachments</h5>
                        <p class="requirements">
                            Upload required PDF documents below and choose the submission method.
                        </p>
            
                        <!-- Requirements Section -->
                        <div class="requirements-info mb-4">
                            <h5 class="subtitle mb-3">Requirements by Education Level</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card border-primary mb-3">
                                        <div class="card-header bg-primary text-white">Preschool</div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-check-circle text-success"></i> Birth Certificate</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Health Certificate</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Recent 2x2 Photo</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-primary mb-3">
                                        <div class="card-header bg-primary text-white">Secondary</div>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-check-circle text-success"></i> Form 137/Transcript of Records</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Birth Certificate</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Good Moral Character</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Recent 2x2 Photo</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Form Fields -->
                        <div class="fields mb-3">
                            <div class="mb-3">
                                <label class="form-label">Upload Documents (Optional)</label>
                                <input type="file" name="documents[]" multiple class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Submission Method</label>
                                <select name="submissionMethod" class="form-select">
                                    <option disabled selected>Select method</option>
                                    <option value="online">Online</option>
                                    <option value="in_person">In-Person</option>
                                </select>
                            </div>
                        </div>
            
                        <!-- Navigation Buttons -->
                        <div class="buttons d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-secondary backBtn">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Display success and error messages -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <script src="{{ mix('js/enrollment/form.js') }}" defer></script>
</body>
</html>
