@extends('layouts.admin')

@section('content')


<div class="container mt-6">
    
<div class="container mt-5">
    <h2 class="mb-4 text-primary">Masterlist Management</h2>
    <p class="mb-4">Manage the masterlists of students and teachers within your institution. View, edit, and stay informed about the status and details of all entries.</p>
    <ul class="nav nav-tabs mb-4" id="masterlistTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="view-tab" data-bs-toggle="tab" href="#viewMasterlist" role="tab" aria-controls="viewMasterlist" aria-selected="true">View Masterlist</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="edit-tab" data-bs-toggle="tab" href="#editMasterlist" role="tab" aria-controls="editMasterlist" aria-selected="false">Edit Masterlist</a>
        </li>
    </ul>

    <div class="tab-content" id="masterlistTabsContent">
        <!-- View Masterlist -->
        <div class="tab-pane fade show active" id="viewMasterlist" role="tabpanel" aria-labelledby="view-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">Student Masterlist</h3>
                <div class="d-flex justify-content-between mb-4">
                    <input type="text" class="form-control me-2" id="searchInput" placeholder="Search by name or ID">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                        <i class="bi bi-plus-circle"></i> Add Student
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-light">
<div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Photo</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Grade</th>
                                <th>Section</th>
                                <th>Status</th>
                                <th>Enrollment Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="studentTableBody">
                            <!-- Dynamic content to be filled by JS -->
                            <!-- Example row -->
                            <tr>
                                <td><img src="profile-placeholder.jpg" alt="Profile Photo" class="img-fluid rounded-circle" style="width: 50px; height: 50px;"></td>
                                <td>12345</td>
                                <td>John Doe</td>
                                <td>10</td>
                                <td>A</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2024-08-01</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewStudentModal" data-id="12345" data-name="John Doe" data-grade="10" data-section="A" data-status="Active" data-enrollment-date="2024-08-01">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editStudentModal" data-id="12345" data-name="John Doe" data-grade="10" data-section="A" data-status="Active" data-enrollment-date="2024-08-01">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Student">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- More rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  

        <!-- Edit Masterlist -->
        <div class="tab-pane fade" id="editMasterlist" role="tabpanel" aria-labelledby="edit-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">Edit Student Records</h3>
                <form id="editMasterlistForm">
                    <div class="mb-4">
                        <label for="studentName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="studentName" required>
                    </div>
                    <div class="mb-4">
                        <label for="studentGrade" class="form-label">Grade</label>
                        <input type="number" class="form-control" id="studentGrade" required>
                    </div>
                    <div class="mb-4">
                        <label for="studentSection" class="form-label">Section</label>
                        <input type="text" class="form-control" id="studentSection" required>
                    </div>
                    <div class="mb-4">
                        <label for="studentStatus" class="form-label">Status</label>
                        <select class="form-select" id="studentStatus" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="studentEnrollmentDate" class="form-label">Enrollment Date</label>
                        <input type="date" class="form-control" id="studentEnrollmentDate" required>
                    </div>
                    <!-- Additional fields as needed -->
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
</main>

<!-- Modals -->
<!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addStudentModalLabel">Add New Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="addStudentForm">
                <div class="mb-4">
                    <label for="addStudentName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="addStudentName" required>
                </div>
                <div class="mb-4">
                    <label for="addStudentGrade" class="form-label">Grade</label>
                    <input type="number" class="form-control" id="addStudentGrade" required>
                </div>
                <div class="mb-4">
                    <label for="addStudentSection" class="form-label">Section</label>
                    <input type="text" class="form-control" id="addStudentSection" required>
                </div>
                <div class="mb-4">
                    <label for="addStudentStatus" class="form-label">Status</label>
                    <select class="form-select" id="addStudentStatus" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="addStudentEnrollmentDate" class="form-label">Enrollment Date</label>
                    <input type="date" class="form-control" id="addStudentEnrollmentDate" required>
                </div>
                <!-- Additional fields as needed -->
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="addStudentForm">Add Student</button>
        </div>
    </div>
</div>
</div>

<!-- Student Details Modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="viewStudentModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="viewStudentModalLabel">Student Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h5 class="mb-3">Personal Details</h5>
            <dl class="row">
                <dt class="col-sm-3">Name:</dt>
                <dd class="col-sm-9" id="viewName">John Doe</dd>
                <dt class="col-sm-3">Grade:</dt>
                <dd class="col-sm-9" id="viewGrade">10</dd>
                <dt class="col-sm-3">Section:</dt>
                <dd class="col-sm-9" id="viewSection">A</dd>
                <dt class="col-sm-3">Status:</dt>
                <dd class="col-sm-9" id="viewStatus">Active</dd>
                <dt class="col-sm-3">Enrollment Date:</dt>
                <dd class="col-sm-9" id="viewEnrollmentDate">2024-08-01</dd>
                <!-- Add more details as needed -->
            </dl>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

<!-- Edit Student Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="editStudentModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editStudentModalLabel">Edit Student Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="editStudentForm">
                <div class="mb-4">
                    <label for="editStudentName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="editStudentName" required>
                </div>
                <div class="mb-4">
                    <label for="editStudentGrade" class="form-label">Grade</label>
                    <input type="number" class="form-control" id="editStudentGrade" required>
                </div>
                <div class="mb-4">
                    <label for="editStudentSection" class="form-label">Section</label>
                    <input type="text" class="form-control" id="editStudentSection" required>
                </div>
                <div class="mb-4">
                    <label for="editStudentStatus" class="form-label">Status</label>
                    <select class="form-select" id="editStudentStatus" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="editStudentEnrollmentDate" class="form-label">Enrollment Date</label>
                    <input type="date" class="form-control" id="editStudentEnrollmentDate" required>
                </div>
                <!-- Additional fields as needed -->
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="editStudentForm">Save changes</button>
        </div>
    </div>
</div>
</div>
</div>

@endsection
