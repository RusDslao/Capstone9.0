<!-- Header -->
<header class="header py-3 bg-light mb-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Header Title -->
            <h5 class="mb-0">Admin Dashboard</h5>
            
            <!-- Header Right Section -->
            <div class="header-right d-flex align-items-center">
                <!-- Notifications -->
                <div class="dropdown me-3">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                        <li><a class="dropdown-item" href="#">New enrollment request</a></li>
                        <li><a class="dropdown-item" href="#">Payment received</a></li>
                        <li><a class="dropdown-item" href="#">Document submission</a></li>
                    </ul>
                </div>

                <!-- User Profile -->
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i> Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="profile-pic.jpg" alt="Profile Picture" class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <h6 class="mb-0">Admin Name</h6>
                                        <small class="text-muted">admin@example.com</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item" aria-label="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
