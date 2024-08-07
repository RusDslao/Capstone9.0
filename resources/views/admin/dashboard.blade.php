@extends('layouts.admin')

@section('content')

            <!-- Main Content Sections -->
            <div class="container mt-6">
                <div class="container mt-5">
                    <div class="row">
                        <!-- New Enrollments Card -->
                        <div class="col-md-3">
                            <div class="card status-card">
                                <div class="card-header">New Enrollments</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $newEnrollments }}</h5>
                                    <p class="card-text">Awaiting approval</p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Pending Verification Card -->
                        <div class="col-md-3">
                            <div class="card status-card">
                                <div class="card-header">Pending Verification</div>
                                <div class="card-body">
                                    <h5 class="card-title">16</h5>
                                    <p class="card-text">Needs verification</p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Completed Enrollments Card -->
                        <div class="col-md-3">
                            <div class="card status-card">
                                <div class="card-header">Completed Enrollments</div>
                                <div class="card-body">
                                    <h5 class="card-title">12</h5>
                                    <p class="card-text">Successfully enrolled</p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Total Students Card -->
                        <div class="col-md-3">
                            <div class="card status-card">
                                <div class="card-header">Total Students</div>
                                <div class="card-body">
                                    <h5 class="card-title">12</h5>
                                    <p class="card-text">Total enrolled</p>
                                </div>
                            </div>
                        </div>
                    </div>                                                         
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 d-flex">
                        <div class="card shadow-sm border-light rounded flex-fill">
                            <div class="card-header bg-light border-bottom">
                                <h5 class="mb-0">Recent Submissions</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Grade</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jane Doe</td>
                                            <td>Grade 10</td>
                                            <td>2024-07-30</td>
                                            <td><a href="#" class="btn btn-primary btn-sm">Review</a></td>
                                        </tr>
                                        <tr>
                                            <td>John Smith</td>
                                            <td>Grade 11</td>
                                            <td>2024-07-29</td>
                                            <td><a href="#" class="btn btn-primary btn-sm">Review</a></td>
                                        </tr>
                                        <tr>
                                            <td>Emily Johnson</td>
                                            <td>Grade 9</td>
                                            <td>2024-07-28</td>
                                            <td><a href="#" class="btn btn-primary btn-sm">Review</a></td>
                                        </tr>
                                        <tr>
                                            <td>Michael Brown</td>
                                            <td>Grade 12</td>
                                            <td>2024-07-27</td>
                                            <td><a href="#" class="btn btn-primary btn-sm">Review</a></td>
                                        </tr>
                                        <tr>
                                            <td>Sarah Williams</td>
                                            <td>Grade 10</td>
                                            <td>2024-07-26</td>
                                            <td><a href="#" class="btn btn-primary btn-sm">Review</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
            
                    <div class="col-md-6 d-flex">
                        <div class="card shadow-sm border-light rounded flex-fill">
                            <div class="card-header bg-light border-bottom">
                                <h5 class="mb-0">Enrollment Stats</h5>
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <canvas id="horizontalBarChart" style="height: 100%; width: 100%;"></canvas>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card shadow-sm border-light rounded card-equal-height">
                            <div class="card-header">Recent Activities</div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">John Doe - Grade 10</li>
                                    <li class="list-group-item">Jane Smith Approved</li>
                                    <li class="list-group-item">New Announcement</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm border-light rounded card-equal-height">
                            <div class="card-header">New Students</div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Alice Johnson</li>
                                    <li class="list-group-item">Bob Brown</li>
                                    <li class="list-group-item">Charlie Davis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
