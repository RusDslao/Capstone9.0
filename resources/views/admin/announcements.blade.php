@extends('layouts.admin')

@section('content')


<div class="container mt-6">
    
<div class="container mt-5">
    <!-- Announcement Management Header and Description -->
    <h2 class="mb-4 text-primary">Announcement Management</h2>
    <p class="mb-4">Manage and display announcements to students and staff. Create new announcements, modify or delete existing ones, and view a comprehensive list of current announcements.</p>

    <!-- Announcement Management Tabs -->
    <ul class="nav nav-tabs mb-4" id="announcementTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="addAnnouncement-tab" data-bs-toggle="tab" href="#addAnnouncement" role="tab" aria-controls="addAnnouncement" aria-selected="true">Add Announcement</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="editAnnouncement-tab" data-bs-toggle="tab" href="#editAnnouncement" role="tab" aria-controls="editAnnouncement" aria-selected="false">Edit Announcement</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="viewAnnouncements-tab" data-bs-toggle="tab" href="#viewAnnouncements" role="tab" aria-controls="viewAnnouncements" aria-selected="false">View Announcements</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="announcementTabContent">
    <!-- Add Announcement Form -->
    <div class="tab-pane fade show active" id="addAnnouncement" role="tabpanel" aria-labelledby="addAnnouncement-tab">
        <div class="bg-white shadow-sm p-4 rounded border border-light">
            <h3 class="h5 mb-4 text-secondary">Add Announcement</h3>
            <form id="addAnnouncementForm">
                <div class="mb-3">
                    <label for="announcementType" class="form-label">Announcement Type</label>
                    <select class="form-select" id="announcementType" required>
                        <option selected disabled>Choose announcement type...</option>
                        <option value="general">General</option>
                        <option value="event">Event</option>
                        <option value="reminder">Reminder</option>
                        <option value="update">Update</option>
                        <!-- Add more types as needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="announcementTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="announcementTitle" required>
                </div>
                <div class="mb-3">
                    <label for="announcementContent" class="form-label">Content</label>
                    <textarea class="form-control" id="announcementContent" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="announcementDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="announcementDate" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Announcement</button>
            </form>
        </div>
    </div>


        <!-- Edit Announcement Section -->
        <div class="tab-pane fade" id="editAnnouncement" role="tabpanel" aria-labelledby="editAnnouncement-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">Edit Announcement</h3>
                <!-- Search Announcement -->
                <div class="mb-4">
                    <label for="searchEditAnnouncement" class="form-label">Search Announcement</label>
                    <input type="text" class="form-control" id="searchEditAnnouncement" placeholder="Enter announcement title">
                </div>
                
                <!-- Announcement Details -->
                <div id="editAnnouncementDetails" class="d-none">
                    <form id="editAnnouncementForm">
                        <div class="mb-3">
                            <label for="editAnnouncementTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="editAnnouncementTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAnnouncementContent" class="form-label">Content</label>
                            <textarea class="form-control" id="editAnnouncementContent" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editAnnouncementDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="editAnnouncementDate" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>

                <!-- No Announcement Found Message -->
                <div id="noAnnouncementFound" class="alert alert-warning d-none" role="alert">
                    No announcement found with the given details.
                </div>
            </div>
        </div>

        <!-- View Announcements Section -->
        <div class="tab-pane fade" id="viewAnnouncements" role="tabpanel" aria-labelledby="viewAnnouncements-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">View Announcements</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="announcementTableBody">
                            <!-- Placeholder for announcement list -->
                            <tr>
                                <td>1</td>
                                <td>Important Update</td>
                                <td>Details about the important update.</td>
                                <td>2024-08-01</td>
                                <td>General</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <!-- More rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
    </div>
</div>

@endsection
