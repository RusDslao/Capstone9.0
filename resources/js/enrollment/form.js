document.addEventListener('DOMContentLoaded', function() {
    // Select buttons and tabs
    const nextBtn = document.querySelector('.nextBtn');
    const backBtn = document.querySelector('.backBtn');
    const form = document.querySelector('.form-details');

    
    let currentTab = 0; // Start at the first tab

    

    // Function to show the current tab
    function showTab(tabIndex) {
        const tabs = document.querySelectorAll('.tab-pane');
        tabs.forEach((tab, index) => {
            if (index === tabIndex) {
                tab.classList.add('show', 'active');
            } else {
                tab.classList.remove('show', 'active');
            }
        });
    }

    // Validate form inputs
    function validateForm() {
        let valid = true;
        const inputs = document.querySelectorAll('.tab-pane.active .form-control, .tab-pane.active .form-select');
        inputs.forEach(input => {
            if (input.required && !input.value.trim()) {
                input.classList.add('is-invalid');
                valid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });
        return valid;
    }

    // Show next tab
    nextBtn.addEventListener('click', () => {
        if (validateForm()) {
            currentTab++;
            if (currentTab >= document.querySelectorAll('.tab-pane').length) {
                currentTab = document.querySelectorAll('.tab-pane').length - 1; // Stay on last tab
            }
            showTab(currentTab);
        }
    });

    // Show previous tab
    backBtn.addEventListener('click', () => {
        currentTab--;
        if (currentTab < 0) {
            currentTab = 0; // Stay on first tab
        }
        showTab(currentTab);
    });

    // Initialize the form by showing the first tab
    showTab(currentTab);
});
