document.addEventListener('DOMContentLoaded', function () {
    const formWizard = document.getElementById('formWizard');
    const tabs = document.querySelectorAll('#pills-tab .nav-link');
    let currentTab = 0;

    function showTab(index) {
        // Display the correct tab and button state
        tabs.forEach((tab, i) => {
            tab.classList.toggle('active', i === index);
            document.querySelector(`#pills-${tab.getAttribute('id').split('-')[1]}`).classList.toggle('show', i === index);
            document.querySelector(`#pills-${tab.getAttribute('id').split('-')[1]}`).classList.toggle('active', i === index);
        });
        updateButtons();
    }

    function updateButtons() {
        const nextButton = document.querySelector(`#nextButton-${tabs[currentTab].getAttribute('id').split('-')[1]}`);
        const backButton = document.querySelector(`#backButton-${tabs[currentTab].getAttribute('id').split('-')[1]}`);
        const submitButton = document.getElementById('submitButton');
        
        if (currentTab === 0) {
            backButton?.classList.add('d-none');
        } else {
            backButton?.classList.remove('d-none');
        }
        if (currentTab === tabs.length - 1) {
            nextButton?.classList.add('d-none');
            submitButton?.classList.remove('d-none');
        } else {
            nextButton?.classList.remove('d-none');
            submitButton?.classList.add('d-none');
        }
    }

    function validateCurrentTab() {
        const currentTabElement = document.querySelector(`#pills-${tabs[currentTab].getAttribute('id').split('-')[1]}`);
        const inputs = currentTabElement.querySelectorAll('input[required], select[required]');
        let valid = true;

        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.classList.add('is-invalid');
                valid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        return valid;
    }

    function handleTabChange(event) {
        if (!validateCurrentTab()) return;

        if (event.target.id.includes('nextButton')) {
            if (currentTab < tabs.length - 1) {
                currentTab++;
                showTab(currentTab);
            }
        } else if (event.target.id.includes('backButton')) {
            if (currentTab > 0) {
                currentTab--;
                showTab(currentTab);
            }
        }
    }

    document.querySelectorAll('[id^=nextButton-], [id^=backButton-]').forEach(button => {
        button.addEventListener('click', handleTabChange);
    });

    showTab(currentTab);

    // Dynamically update grades based on selected education level
    const educationLevelSelect = document.getElementById('educationLevel');
    const gradeSelect = document.getElementById('grade');

    educationLevelSelect.addEventListener('change', function () {
        const selectedLevel = educationLevelSelect.value;
        let gradeOptions = '';

        switch (selectedLevel) {
            case 'preschool':
                gradeOptions = '<option value="kindergarten">Kindergarten</option><option value="daycare">Daycare</option>';
                break;
            case 'primary':
                gradeOptions = '<option value="" disabled selected>Select grade</option>';
                for (let i = 1; i <= 6; i++) {
                    gradeOptions += `<option value="${i}">Grade ${i}</option>`;
                }
                break;
            case 'secondary':
                gradeOptions = '<option value="" disabled selected>Select grade</option>';
                for (let i = 7; i <= 10; i++) {
                    gradeOptions += `<option value="${i}">Grade ${i}</option>`;
                }
                break;
            default:
                gradeOptions = '<option value="" disabled selected>Select grade</option>';
                break;
        }

        gradeSelect.innerHTML = gradeOptions;
    });
});
