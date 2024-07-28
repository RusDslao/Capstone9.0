@extends('layouts.admin')

@section('content')


    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
        </nav>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ Auth::user()->name }}
                        <br>
                        {{$msg}}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Container for the dashboard content -->
        <div class="container mt-4">

            <!-- Dashboard Overview -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Enrollments</h5>
                            <p class="card-text">Overview of recent enrollments...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Enrollment Statuses</h5>
                            <p class="card-text">Statistics on enrollment statuses...</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Enrollment List -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enrollment List</h5>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Search by name or grade">
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Repeat this <tr> for each enrollment -->
                                <tr>
                                    <td>John Doe</td>
                                    <td>Grade 5</td>
                                    <td>Pending</td>
                                    <td>2024-07-28</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">View</button>
                                        <button class="btn btn-success btn-sm">Approve</button>
                                        <button class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollment Details -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enrollment Details</h5>
                        <!-- Detailed information here -->
                        <dl class="row">
                            <dt class="col-sm-3">Full Name</dt>
                            <dd class="col-sm-9">John Doe</dd>
                            <dt class="col-sm-3">Date of Birth</dt>
                            <dd class="col-sm-9">2005-08-15</dd>
                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9">john@example.com</dd>
                            <!-- Add more fields as necessary -->
                        </dl>
                    </div>
                </div>
            </div>
        </div>

@endsection
