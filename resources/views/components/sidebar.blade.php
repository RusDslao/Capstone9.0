<div class="sidebar-wrapper bg-white shadow-sm" id="sidebar-wrapper">
    <!-- Sidebar Menu -->
    <div class="list-group list-group-flush">
        <!-- Dashboard Section -->
        <div class="sidebar-section">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} py-3" aria-label="Dashboard">
                <i class="bi bi-house icon-black" role="img" aria-label="Dashboard Icon"></i> Dashboard
            </a>
        </div>
        
        <!-- Management Section -->
        <div class="sidebar-section">
            <h5 class="section-title px-3 py-2">Management</h5>
            <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Admission">
                <i class="bi bi-mortarboard icon-black" role="img" aria-label="Admission Icon"></i> Admission
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Masterlist">
                <i class="bi bi-list-task icon-black" role="img" aria-label="Masterlist Icon"></i> Masterlist
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Accounts">
                <i class="bi bi-people icon-black" role="img" aria-label="Accounts Icon"></i> Accounts
            </a>
        </div>
        
        <!-- Communication Section -->
        <div class="sidebar-section">
            <h5 class="section-title px-3 py-2">Communication</h5>
            <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Announcement">
                <i class="bi bi-megaphone icon-black" role="img" aria-label="Announcement Icon"></i> Announcement
            </a>
        </div>
        
        <!-- Settings Section -->
        <div class="sidebar-section">
            <h5 class="section-title px-3 py-2">Settings</h5>
            <a href="#" class="list-group-item list-group-item-action py-3" aria-label="Settings">
                <i class="bi bi-gear icon-black" role="img" aria-label="Settings Icon"></i> Settings
            </a>
        </div>
    </div>
</div>


<script>
    // Select the sidebar wrapper element
const sidebarWrapper = document.getElementById('sidebar-wrapper');

// Add an event listener to the sidebar wrapper to toggle the active state of links
sidebarWrapper.addEventListener('click', (event) => {
  // Check if the clicked element is a link
  if (event.target.tagName === 'A') {
    // Remove the active class from all links
    const links = sidebarWrapper.querySelectorAll('a.list-group-item-action');
    links.forEach((link) => link.classList.remove('active'));

    // Add the active class to the clicked link
    event.target.classList.add('active');
  }
});

// Add an event listener to the window to toggle the sidebar on small screens
window.addEventListener('resize', () => {
  // Check if the screen width is less than 768px (Bootstrap's default breakpoint for small screens)
  if (window.innerWidth < 768) {
    // Toggle the sidebar wrapper's class to show or hide the sidebar
    sidebarWrapper.classList.toggle('d-md-block', window.innerWidth >= 768);
  }
});
</script>