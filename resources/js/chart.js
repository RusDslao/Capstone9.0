import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Chart from 'chart.js/auto';


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
