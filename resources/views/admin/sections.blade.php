@extends('layouts.admin')

@section('content')


<div class="container mt-6">
    <div class="container mt-5">
        <h2 class="mb-4 text-primary">Section Management</h2>
        <p class="mb-4">Manage the sections for different classes or groups within your institution.</p>
        
        <!-- Tabs for switching between forms -->
        <ul class="nav nav-tabs mb-4" id="sectionTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="add-tab" data-bs-toggle="tab" href="#addSection" role="tab" aria-controls="addSection" aria-selected="true">Add Section</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="edit-tab" data-bs-toggle="tab" href="#editSection" role="tab" aria-controls="editSection" aria-selected="false">Edit Section</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="view-tab" data-bs-toggle="tab" href="#viewSection" role="tab" aria-controls="viewSection" aria-selected="false">View Section</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#aboutSection" role="tab" aria-controls="aboutSection" aria-selected="false">About Sections</a>
            </li>
        </ul>
        
        <!-- Tabs Content -->
        <div class="tab-content" id="sectionTabsContent">
            <!-- Add Section Form -->
            <div class="tab-pane fade show active" id="addSection" role="tabpanel" aria-labelledby="add-tab">
                <div class="bg-white shadow-sm p-4 rounded border border-light">
                    <h3 class="h5 mb-4 text-secondary">Create New Section</h3>
                    <form id="addSectionForm">
                        <div class="mb-4">
                            <label for="sectionName" class="form-label">Section Name</label>
                            <input type="text" class="form-control form-control-lg" id="sectionName" placeholder="Enter section name" required>
                        </div>
                        <div class="mb-4">
                            <label for="sectionCode" class="form-label">Section Code</label>
                            <input type="text" class="form-control form-control-lg" id="sectionCode" placeholder="Enter section code" required>
                        </div>
                        <div class="mb-4">
                            <label for="sectionDescription" class="form-label">Description</label>
                            <textarea class="form-control form-control-lg" id="sectionDescription" rows="4" placeholder="Provide a description of the section" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Add Section</button>
                    </form>
                </div>
            </div>
            
            <!-- Edit Section Form -->
            <div class="tab-pane fade" id="editSection" role="tabpanel" aria-labelledby="edit-tab">
                <div class="bg-white shadow-sm p-4 rounded border border-light">
                    <h3 class="h5 mb-4 text-secondary">Update or Remove Section</h3>
                    <form id="editSectionForm">
                        <div class="mb-4">
                            <label for="editSectionId" class="form-label">Section ID</label>
                            <input type="text" class="form-control form-control-lg" id="editSectionId" placeholder="Enter Section ID" required>
                        </div>
                        <div class="mb-4">
                            <label for="editSectionName" class="form-label">Section Name</label>
                            <input type="text" class="form-control form-control-lg" id="editSectionName" placeholder="Enter new section name">
                        </div>
                        <div class="mb-4">
                            <label for="editSectionCode" class="form-label">Section Code</label>
                            <input type="text" class="form-control form-control-lg" id="editSectionCode" placeholder="Enter new section code">
                        </div>
                        <div class="mb-4">
                            <label for="editSectionDescription" class="form-label">Description</label>
                            <textarea class="form-control form-control-lg" id="editSectionDescription" rows="4" placeholder="Update the section description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Update Section</button>
                        <button type="button" class="btn btn-danger btn-lg">Remove Section</button>
                    </form>
                </div>
            </div>
            
            <!-- View Section Table -->
            <div class="tab-pane fade" id="viewSection" role="tabpanel" aria-labelledby="view-tab">
                <div class="bg-white shadow-sm p-4 rounded border border-light">
                    <h3 class="h5 mb-4 text-secondary">View Sections</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Section Name</th>
                                    <th>Section Code</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sample Section</td>
                                    <td>S001</td>
                                    <td>Sample description for the section</td>
                                </tr>
                                <!-- More rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- About Section Management -->
            <div class="tab-pane fade" id="aboutSection" role="tabpanel" aria-labelledby="about-tab">
                <div class="bg-white shadow-sm p-4 rounded border border-light">
                    <h3 class="h5 mb-4 text-secondary">About Section Management</h3>
                    <p class="mb-4">The section management system allows you to create, update, and view sections within your institution. Sections represent different classes or groups, and managing them effectively is crucial for organizing academic or training activities.</p>
                    <p class="mb-4">In this system, you can add new sections, update existing sections with new details, and view a list of all sections. Each section includes a name, code, and description, which helps in identifying and categorizing different groups or classes.</p>
                    <p class="mb-4">If you need any assistance with managing sections, please contact the support team or refer to the documentation provided in the help section.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
