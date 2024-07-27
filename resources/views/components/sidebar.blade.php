<aside id="sidebar" class="sidebar-wrapper bg-light shadow-lg d-flex flex-column mt-auto mb-auto">
    <div class="flex-grow-1">
        <div class="list-group list-group-flush">
            <!-- Dashboard Section -->
            <div class="sidebar-section">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} py-3 d-flex align-items-center" aria-label="Dashboard">
                    <i class="bi bi-house me-2"></i> Dashboard
                </a>
            </div>

            <!-- Management Section -->
            <div class="sidebar-section">
                <h5 class="section-title px-3 py-2">Management</h5>
                <a href="#admissionSubmenu" class="list-group-item list-group-item-action py-3 d-flex align-items-center" data-bs-toggle="collapse" aria-expanded="false" aria-controls="admissionSubmenu">
                    <i class="bi bi-mortarboard me-2"></i> Admission
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="admissionSubmenu">
                    <a href="#" class="list-group-item list-group-item-action py-2 ps-5" aria-label="New Admission">
                        <i class="bi bi-plus-circle me-2"></i> New Admission
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ps-5" aria-label="View Admissions">
                        <i class="bi bi-eye me-2"></i> View Admissions
                    </a>
                </div>
                <a href="#masterlistSubmenu" class="list-group-item list-group-item-action py-3 d-flex align-items-center" data-bs-toggle="collapse" aria-expanded="false" aria-controls="masterlistSubmenu">
                    <i class="bi bi-list-task me-2"></i> Masterlist
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="masterlistSubmenu">
                    <a href="#" class="list-group-item list-group-item-action py-2 ps-5" aria-label="Student Masterlist">
                        <i class="bi bi-person me-2"></i> Student Masterlist
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ps-5" aria-label="Teacher Masterlist">
                        <i class="bi bi-person-badge me-2"></i> Teacher Masterlist
                    </a>
                </div>
                <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Accounts">
                    <i class="bi bi-people me-2"></i> Accounts
                </a>
            </div>

            <!-- Communication Section -->
            <div class="sidebar-section">
                <h5 class="section-title px-3 py-2">Communication</h5>
                <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Announcement">
                    <i class="bi bi-megaphone me-2"></i> Announcement
                </a>
            </div>

            <!-- Settings Section -->
            <div class="sidebar-section">
                <h5 class="section-title px-3 py-2">Settings</h5>
                <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Settings">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action py-3" aria-label="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <!-- Footer or Additional Content -->
    <div class="d-flex justify-content-center py-3 d-md-none">
        <button id="sidebarClose" class="btn btn-secondary" aria-label="Close Sidebar">✖</button>
    </div>
</aside>
<style>

.sidebar-wrapper {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 100%;
    max-width: 260px;
    display: flex;
    flex-direction: column;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    overflow-y: auto;
    background-color: #f8f9fa; /* Light background for a modern look */
}
    .list-group-item.active {
        background-color: #007bff;
        color: white;
    }
    .list-group-item {
        transition: background-color 0.3s, color 0.3s;
    }
    .list-group-item:hover {
        background-color: rgba(0, 123, 255, 0.1);
        color: #007bff;
    }
    .section-title {
        color: #6c757d;
        font-size: 0.875rem;
        text-transform: uppercase;
    }
    .bg-dark {
        background-color: #343a40 !important;
    }
</style>

<!-- Ensure this JavaScript is included -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.list-group-item');

        links.forEach(link => {
            link.addEventListener('click', () => {
                links.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });
    });
</script>