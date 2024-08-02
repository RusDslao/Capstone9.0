@extends('layouts.admin')

@section('content')



<div class="container mt-6">
    <div class="container mt-5">
    <!-- Account Management Header and Description -->
      <h2 class="mb-4 text-primary">Account Management</h2>
    <p class="mb-4">Manage and maintain user accounts within your system. Add new accounts, edit existing ones, and view a comprehensive list of all accounts to ensure proper oversight and management.</p>
    <!-- Account Management Tabs -->
            <ul class="nav nav-tabs mb-4" id="accountTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="add-tab" data-bs-toggle="tab" href="#addAccount" role="tab" aria-controls="addAccount" aria-selected="true">Add Account</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="edit-tab" data-bs-toggle="tab" href="#editAccount" role="tab" aria-controls="editAccount" aria-selected="false">Edit Account</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="list-tab" data-bs-toggle="tab" href="#accountList" role="tab" aria-controls="accountList" aria-selected="false">Account List</a>
                </li>
            </ul>



    <!-- Tab Content -->
    <div class="tab-content" id="accountTabContent">
        <!-- Add Account Form -->
        <div class="tab-pane fade show active" id="addAccount" role="tabpanel" aria-labelledby="add-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">Add Account</h3>
                <form id="addAccountForm">
                    <div class="mb-3">
                        <label for="accountType" class="form-label">Account Type</label>
                        <select class="form-select" id="accountType" required>
                            <option selected disabled>Choose account type...</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="accountName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="accountName" required>
                    </div>
                    <div class="mb-3">
                        <label for="accountEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="accountEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="accountPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="accountPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Account</button>
                </form>
            </div>
        </div>

        <!-- Edit Account Section -->
        <div class="tab-pane fade" id="editAccount" role="tabpanel" aria-labelledby="edit-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">Edit Account</h3>
                
                <!-- Search Account -->
                <div class="mb-4">
                    <label for="searchEditAccount" class="form-label">Search Account</label>
                    <input type="text" class="form-control" id="searchEditAccount" placeholder="Enter account name or email">
                </div>
                
                <!-- Account Details -->
                <div id="editAccountDetails" class="d-none">
                    <form id="editAccountForm">
                        <div class="mb-3">
                            <label for="editAccountType" class="form-label">Account Type</label>
                            <select class="form-select" id="editAccountType" required>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editAccountName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editAccountName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAccountEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editAccountEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAccountStatus" class="form-label">Status</label>
                            <select class="form-select" id="editAccountStatus" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>

                <!-- No Account Found Message -->
                <div id="noAccountFound" class="alert alert-warning d-none" role="alert">
                    No account found with the given details.
                </div>
            </div>
        </div>


        <!-- Account List Section -->
        <div class="tab-pane fade" id="accountList" role="tabpanel" aria-labelledby="list-tab">
            <div class="bg-white shadow-sm p-4 rounded border border-light">
                <h3 class="h5 mb-4 text-secondary">Account List</h3>
                <div class="mb-4">
                    <input type="text" class="form-control mb-3" id="searchAccounts" placeholder="Search accounts...">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <select class="form-select" id="filterAccountType">
                            <option value="">Filter by Account Type</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                        <select class="form-select" id="filterStatus">
                            <option value="">Filter by Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="accountTableBody">
                            <!-- Placeholder for account list -->
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john.doe@example.com</td>
                                <td>Teacher</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Deactivate</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>jane.smith@example.com</td>
                                <td>Student</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Deactivate</button>
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
