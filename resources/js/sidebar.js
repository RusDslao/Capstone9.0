import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'bootstrap-icons/font/bootstrap-icons.css';

document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.querySelector(".sidebar");
    const navLinks = document.querySelectorAll(".sidebar .nav-link");
    const sidebarToggle = document.getElementById("sidebarToggle");
    const submenus = document.querySelectorAll(".submenu");

    // Function to handle link activation
    function setActiveLink(clickedLink) {
        navLinks.forEach(link => link.classList.remove("active"));
        clickedLink.classList.add("active");
    }

    navLinks.forEach(link => {
        link.addEventListener("click", function() {
            // Set the clicked link as active
            setActiveLink(this);

            // If sidebar is collapsed, expand it
            if (sidebar.classList.contains("collapsed")) {
                sidebar.classList.remove("collapsed");
            }
        });
    });

    sidebarToggle.addEventListener("click", function() {
        sidebar.classList.toggle("collapsed");

        if (sidebar.classList.contains("collapsed")) {
            submenus.forEach(submenu => {
                submenu.classList.remove("show");
                submenu.classList.add("collapse");
            });
        } else {
            submenus.forEach(submenu => {
                submenu.classList.remove("collapse");
            });
        }
    });
});




document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('horizontalBarChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // or 'horizontalBar' for horizontal bar chart
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: '# of Enrollments',
                data: [12, 19, 3, 5, 2, 3, 9],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true
                }
            }
        }
    });
});
