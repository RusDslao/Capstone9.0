@extends('layouts.admin')

@section('content')
    
        <div class="container mt-6">
            <div class="container mt-5">
            <h2 class="mb-4 text-primary">Schedule Management</h2>
            <p class="mb-4">Manage the scheduling for various classes or events within your institution.</p>
            
            <!-- Tabs for switching between forms -->
            <ul class="nav nav-tabs mb-4" id="scheduleTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="add-tab" data-bs-toggle="tab" href="#addSchedule" role="tab" aria-controls="addSchedule" aria-selected="true">Add Schedule</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="edit-tab" data-bs-toggle="tab" href="#editSchedule" role="tab" aria-controls="editSchedule" aria-selected="false">Edit Schedule</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="view-tab" data-bs-toggle="tab" href="#viewSchedule" role="tab" aria-controls="viewSchedule" aria-selected="false">View Schedule</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="assign-tab" data-bs-toggle="tab" href="#assignSchedule" role="tab" aria-controls="assignSchedule" aria-selected="false">Assign Schedule</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#aboutSchedule" role="tab" aria-controls="aboutSchedule" aria-selected="false">About Schedule</a>
                </li>
            </ul>
            
            <!-- Tabs Content -->
            <div class="tab-content" id="scheduleTabsContent">
                <!-- Add Schedule Form -->
<!-- Add Schedule Form -->
<div class="tab-pane fade show active" id="addSchedule" role="tabpanel" aria-labelledby="add-tab">
    <div class="bg-white shadow-sm p-4 rounded border border-light">
        <h3 class="h5 mb-4 text-secondary">Create New Schedule</h3>
        <form id="addScheduleForm">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="scheduleTitle" class="form-label">Title</label>
                    <input type="text" class="form-control form-control-sm" id="scheduleTitle" placeholder="Title" required>
                </div>
                <div class="col-md-6">
                    <label for="scheduleDate" class="form-label">Date</label>
                    <input type="date" class="form-control form-control-sm" id="scheduleDate" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="scheduleTime" class="form-label">Time</label>
                    <input type="time" class="form-control form-control-sm" id="scheduleTime" required>
                </div>
                <div class="col-md-6">
                    <label for="scheduleLocation" class="form-label">Section</label>
                    <select class="form-select form-select-sm" id="scheduleGrade" required>
                        <option selected disabled>Section</option>
                        <option value="A">Section 1</option>
                        <option value="B">Section 2</option>
                    </select>                
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="scheduleRoom" class="form-label">Room</label>
                    <input type="text" class="form-control form-control-sm" id="scheduleRoom" placeholder="Room" required>
                </div>
                <div class="col-md-6">
                    <label for="scheduleGrade" class="form-label">Grade</label>
                    <select class="form-select form-select-sm" id="scheduleGrade" required>
                        <option selected disabled>Grade</option>
                        <option value="A">Grade A</option>
                        <option value="B">Grade B</option>
                        <option value="C">Grade C</option>
                        <!-- More grades as needed -->
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="scheduleDescription" class="form-label">Description</label>
                <textarea class="form-control form-control-sm" id="scheduleDescription" rows="3" placeholder="Description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Add Schedule</button>
        </form>
    </div>
</div>


                
                <!-- Edit Schedule Form -->
<div class="tab-pane fade" id="editSchedule" role="tabpanel" aria-labelledby="edit-tab">
    <div class="bg-white shadow-sm p-4 rounded border border-light">
        <h3 class="h5 mb-4 text-secondary">Edit Existing Schedule</h3>
        <form id="editScheduleForm">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="editScheduleId" class="form-label">Schedule ID</label>
                    <input type="text" class="form-control form-control-sm" id="editScheduleId" placeholder="Schedule ID" required>
                </div>
                <div class="col-md-6">
                    <label for="editScheduleTitle" class="form-label">Title</label>
                    <input type="text" class="form-control form-control-sm" id="editScheduleTitle" placeholder="New title">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="editScheduleDate" class="form-label">Date</label>
                    <input type="date" class="form-control form-control-sm" id="editScheduleDate">
                </div>
                <div class="col-md-6">
                    <label for="editScheduleTime" class="form-label">Time</label>
                    <input type="time" class="form-control form-control-sm" id="editScheduleTime">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="scheduleLocation" class="form-label">Section</label>
                    <select class="form-select form-select-sm" id="scheduleGrade" required>
                        <option selected disabled>Section</option>
                        <option value="A">Section 1</option>
                        <option value="B">Section 2</option>
                    </select>      
                </div>
                <div class="col-md-6">
                    <label for="editScheduleRoom" class="form-label">Room</label>
                    <input type="text" class="form-control form-control-sm" id="editScheduleRoom" placeholder="Room">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="editScheduleGrade" class="form-label">Grade</label>
                    <select class="form-select form-select-sm" id="editScheduleGrade">
                        <option selected disabled>Grade</option>
                        <option value="A">Grade A</option>
                        <option value="B">Grade B</option>
                        <option value="C">Grade C</option>
                        <!-- More grades as needed -->
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="editScheduleDescription" class="form-label">Description</label>
                <textarea class="form-control form-control-sm" id="editScheduleDescription" rows="3" placeholder="Update description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Update Schedule</button>
            <button type="button" class="btn btn-danger btn-sm ms-2">Remove Schedule</button>
        </form>
    </div>
</div>

<!-- View Schedule Table -->
<div class="tab-pane fade" id="viewSchedule" role="tabpanel" aria-labelledby="view-tab">
    <div class="bg-white shadow-sm p-4 rounded border border-light">
        <h3 class="h5 mb-4 text-secondary">View Schedules</h3>

        <!-- Search and Filter Section -->
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <input type="text" class="form-control form-control-sm me-2" id="searchSchedule" placeholder="Search schedules..." aria-label="Search schedules">
                <button class="btn btn-primary btn-sm" onclick="searchSchedules()">Search</button>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="filterDate">Filter by Date</label>
                        <select class="form-select form-select-sm" id="filterDate">
                            <option value="">Select Date</option>
                            <option value="2024-08-01">August 1, 2024</option>
                            <option value="2024-08-02">August 2, 2024</option>
                            <!-- More dates as needed -->
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="filterTeacher">Filter by Teacher</label>
                        <select class="form-select form-select-sm" id="filterTeacher">
                            <option value="">Select Teacher</option>
                            <option value="1">Teacher 1</option>
                            <option value="2">Teacher 2</option>
                            <!-- More teachers as needed -->
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="filterSection">Filter by Section</label>
                        <select class="form-select form-select-sm" id="filterSection">
                            <option value="">Select Section</option>
                            <option value="1">Section 1</option>
                            <option value="2">Section 2</option>
                            <!-- More sections as needed -->
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="filterGrade">Filter by Grade</label>
                        <select class="form-select form-select-sm" id="filterGrade">
                            <option value="">Select Grade</option>
                            <option value="A">Grade A</option>
                            <option value="B">Grade B</option>
                            <option value="C">Grade C</option>
                            <!-- More grades as needed -->
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="table-responsive">
            <table class="table table-striped" id="scheduleTable">
                <thead class="table-dark">
                    <tr>
                        <th>Schedule Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Teacher</th>
                        <th>Section</th>
                        <th>Grade</th>
                        <th>Room</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody id="scheduleTableBody">
                    <tr>
                        <td>Sample Schedule 1</td>
                        <td>2024-08-01</td>
                        <td>10:00 AM</td>
                        <td>Teacher 1</td>
                        <td>Section 1</td>
                        <td>Grade A</td>
                        <td>Room 101</td>
                        <td><a href="#" class="btn btn-info btn-sm">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Sample Schedule 2</td>
                        <td>2024-08-02</td>
                        <td>02:00 PM</td>
                        <td>Teacher 2</td>
                        <td>Section 2</td>
                        <td>Grade B</td>
                        <td>Room 102</td>
                        <td><a href="#" class="btn btn-info btn-sm">View Details</a></td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Assign Schedule Form -->
<div class="tab-pane fade" id="assignSchedule" role="tabpanel" aria-labelledby="assign-tab">
    <div class="bg-white shadow-sm p-4 rounded border border-light">
        <h3 class="h5 mb-4 text-secondary">Assign Schedule to Teacher</h3>
        <form id="assignScheduleForm">
            <div class="row mb-4">
                <div class="col-md-4">
                    <label for="teacherSelect" class="form-label">Select Teacher</label>
                    <select class="form-select form-select-sm" id="teacherSelect" required>
                        <option selected disabled>Choose a teacher...</option>
                        <option value="1">Teacher 1</option>
                        <option value="2">Teacher 2</option>
                        <!-- More options as needed -->
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="scheduleSelect" class="form-label">Select Schedule</label>
                    <select class="form-select form-select-sm" id="scheduleSelect" required>
                        <option selected disabled>Choose a schedule...</option>
                        <option value="1">Schedule 1</option>
                        <option value="2">Schedule 2</option>
                        <!-- More options as needed -->
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="sectionSelect" class="form-label">Select Section</label>
                    <select class="form-select form-select-sm" id="sectionSelect" required>
                        <option selected disabled>Choose a section...</option>
                        <option value="1">Section 1</option>
                        <option value="2">Section 2</option>
                        <!-- More options as needed -->
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <label for="dateSelect" class="form-label">Select Date</label>
                    <input type="date" class="form-control form-control-sm" id="dateSelect" required>
                </div>
                <div class="col-md-4">
                    <label for="timeSelect" class="form-label">Select Time</label>
                    <input type="time" class="form-control form-control-sm" id="timeSelect" required>
                </div>
                <div class="col-md-4">
                    <label for="roomSelect" class="form-label">Select Room</label>
                    <select class="form-select form-select-sm" id="roomSelect" required>
                        <option selected disabled>Choose a room...</option>
                        <option value="101">Room 101</option>
                        <option value="102">Room 102</option>
                        <!-- More options as needed -->
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <label for="notes" class="form-label">Notes (optional)</label>
                    <textarea class="form-control form-control-sm" id="notes" rows="3" placeholder="Additional notes..."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Assign Schedule</button>
        </form>
    </div>
</div>

                <!-- About Schedule Management -->
                <div class="tab-pane fade" id="aboutSchedule" role="tabpanel" aria-labelledby="about-tab">
                    <div class="bg-white shadow-sm p-4 rounded border border-light">
                        <h3 class="h5 mb-4 text-secondary">About Schedule Management</h3>
                        <p class="mb-4">The schedule management system allows you to create, update, and view various schedules for classes or events. Effective scheduling helps in organizing academic or training activities efficiently.</p>
                        <p class="mb-4">In this system, you can add new schedules, update existing schedules with new details, and view a list of all schedules. Each schedule includes a title, date, time, and description, helping in planning and organizing events or classes.</p>
                        <p class="mb-4">For assistance with schedule management, please contact the support team or refer to the documentation provided in the help section.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
