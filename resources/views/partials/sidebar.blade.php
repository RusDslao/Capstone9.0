<nav class="sidebar">
    <div class="sidebar-header mt-4 d-flex justify-content-between align-items-center">
        <h5>Navigation</h5>
        <a class="sidebar-toggle" id="sidebarToggle">
            <i class="bi bi-chevron-left"></i>
        </a>
    </div>
    <ul class="nav flex-column mt-4 text-dark">
        <!-- Dashboard Section -->
        <li class="nav-item" id="dashboardNavItem">
            <a href="{{ route('admin.dashboard') }}" class="nav-link" aria-label="Dashboard" id="dashboardLink">
                <i class="bi bi-grid"></i> <span>Dashboard</span>
            </a>
        </li>
        
        <!-- Enrollment Section -->
        <li class="nav-item" id="enrollmentNavItem">
            <a href="{{ route('admin.enrollment') }}" class="nav-link" id="enrollmentLink">
                <i class="bi bi-pencil-square"></i> <span>Enrollment</span>
            </a>
        </li>
        
        <!-- Masterlist Section -->
        <li class="nav-item" id="masterlistNavItem">
            <a href="{{ route('admin.masterlist') }}" class="nav-link" id="masterlistLink">
                <i class="bi bi-list-ul"></i> <span>Masterlist</span>
            </a>
        </li>
        
        <!-- Schedule Section -->
        <li class="nav-item" id="scheduleNavItem">
            <a href="{{ route('admin.schedule') }}" class="nav-link" id="scheduleLink">
                <i class="bi bi-calendar"></i> <span>Schedule</span>
            </a>
        </li>
        <li class="nav-item" id="scheduleNavItem">
            <a href="{{ route('admin.sections') }}" class="nav-link" id="scheduleLink">
                <i class="bi bi-file-text"></i></i> <span>Sections</span>
            </a>
        </li>
        
        <!-- Accounts Section -->
        <li class="nav-item" id="accountsNavItem">
            <a href="{{ route('admin.accounts') }}" class="nav-link" id="accountsLink">
                <i class="bi bi-people"></i> <span>Accounts</span>
            </a>
        </li>
        
        <!-- Announcements Section -->
        <li class="nav-item" id="announcementsNavItem">
            <a href="{{ route('admin.announcements') }}" class="nav-link" id="announcementsLink">
                <i class="bi bi-megaphone"></i> <span>Announcements</span>
            </a>
        </li>
        
        <!-- Settings Section -->
        <li class="nav-item" id="settingsNavItem">
            <a href="{{ route('admin.settings') }}" class="nav-link" id="settingsLink">
                <i class="bi bi-gear"></i> <span>Settings</span>
            </a>
        </li>
    </ul>
</nav>
