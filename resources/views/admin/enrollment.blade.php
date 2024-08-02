@extends('layouts.admin')

@section('content')


        <div class="container mt-6">
            <div class="container mt-5">
                <h2 class="mb-4 text-primary">Enrollment Management</h2>
                <p class="mb-4">Manage the enrollment process by selecting start dates, cancelling existing enrollments, or taking actions on existing enrollments.</p>
                
                <!-- Tabs for switching between forms -->
                <ul class="nav nav-tabs mb-4" id="enrollmentTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="start-tab" data-bs-toggle="tab" href="#startEnrollment" role="tab" aria-controls="startEnrollment" aria-selected="true">Start Enrollment</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="stop-tab" data-bs-toggle="tab" href="#stopEnrollment" role="tab" aria-controls="stopEnrollment" aria-selected="false">Stop Enrollment</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="manage-tab" data-bs-toggle="tab" href="#manageEnrollment" role="tab" aria-controls="manageEnrollment" aria-selected="false">Action Enrollment</a>
                    </li>
                </ul>
                
                <!-- Tabs Content -->
                <div class="tab-content" id="enrollmentTabsContent">
                    <!-- Start Enrollment Form -->
                    <div class="tab-pane fade show active" id="startEnrollment" role="tabpanel" aria-labelledby="start-tab">
                        <div class="bg-white shadow-sm p-4 rounded border border-light">
                            <h3 class="h5 mb-4 text-secondary">Select Enrollment Dates</h3>
                            <form id="startEnrollmentForm">
                                <div class="mb-4">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date" class="form-control form-control-lg" id="startDate" required>
                                </div>
                                <div class="mb-4">
                                    <label for="endDate" class="form-label">Expiration Date</label>
                                    <input type="date" class="form-control form-control-lg" id="endDate" required>
                                </div>
                                <div id="startConfirmationSection" class="d-none">
                                    <div class="alert alert-success mb-4" role="alert">
                                        <p class="mb-0">You have selected <strong id="selectedStartDate"></strong> as the start date and <strong id="selectedEndDate"></strong> as the expiration date for enrollment.</p>
                                    </div>
                                    <a href="/enrollments/new" class="btn btn-primary btn-lg">Start New Enrollment</a>
                                </div>
                                <div id="startFormSection">
                                    <button type="submit" class="btn btn-primary btn-lg">Confirm Enrollment Dates</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Stop Enrollment Form -->
                    <div class="tab-pane fade" id="stopEnrollment" role="tabpanel" aria-labelledby="stop-tab">
                        <div class="bg-white shadow-sm p-4 rounded border border-light">
                            <h3 class="h5 mb-4 text-secondary">Cancel Enrollment</h3>
                            <form id="stopEnrollmentForm">
                                <div class="mb-4">
                                    <label for="enrollmentId" class="form-label">Enrollment ID</label>
                                    <input type="text" class="form-control form-control-lg" id="enrollmentId" placeholder="Enter Enrollment ID" required>
                                </div>
                                <div class="mb-4">
                                    <label for="reason" class="form-label">Reason for Cancellation</label>
                                    <textarea class="form-control form-control-lg" id="reason" rows="4" placeholder="Provide a reason for stopping the enrollment" required></textarea>
                                </div>
                                <div id="stopConfirmationSection" class="d-none">
                                    <div class="alert alert-warning mb-4" role="alert">
                                        <p class="mb-0">The enrollment with ID <strong id="cancelledEnrollmentId"></strong> has been marked for cancellation.</p>
                                    </div>
                                    <a href="/enrollments/overview" class="btn btn-primary btn-lg">Back to Enrollment Overview</a>
                                </div>
                                <div id="stopFormSection">
                                    <button type="submit" class="btn btn-danger btn-lg">Confirm Cancellation</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Action Enrollment Table -->
                    <div class="tab-pane fade" id="manageEnrollment" role="tabpanel" aria-labelledby="manage-tab">
                        <div class="bg-white shadow-sm p-4 rounded border border-light">
                            <h3 class="h5 mb-4 text-secondary">Manage Existing Enrollment</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Grade</th>
                                            <th>Status</th>
                                            <th>Enrollment Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example rows, add more rows dynamically as needed -->
                                        <tr>
                                            <td>12345</td>
                                            <td>John Doe</td>
                                            <td>10</td>
                                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            <td>2024-08-01</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Enrollment">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive Enrollment">
                                                    <i class="bi bi-archive"></i>
                                                </a>
                                                <a href="#" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Reminder">
                                                    <i class="bi bi-envelope"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve Enrollment">
                                                    <i class="bi bi-check-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>67890</td>
                                            <td>Jane Smith</td>
                                            <td>11</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td>2024-07-15</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Enrollment">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive Enrollment">
                                                    <i class="bi bi-archive"></i>
                                                </a>
                                                <a href="#" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Reminder">
                                                    <i class="bi bi-envelope"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve Enrollment">
                                                    <i class="bi bi-check-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Add more rows here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

@endsection
