/******/ (() => { // webpackBootstrap
/*!*****************************************!*\
  !*** ./resources/js/enrollment/form.js ***!
  \*****************************************/
document.addEventListener('DOMContentLoaded', function () {
  var nextButtons = document.querySelectorAll('.nextBtn');
  var backButtons = document.querySelectorAll('.backBtn');
  var steps = document.querySelectorAll('.nav-link.step');
  var currentStep = 0;
  function showStep(index) {
    var tabs = document.querySelectorAll('.tab-pane');
    tabs.forEach(function (tab, i) {
      tab.classList.toggle('show', i === index);
      tab.classList.toggle('active', i === index);
    });
    steps.forEach(function (step, i) {
      step.classList.toggle('active', i === index);
    });
    currentStep = index;
  }
  function validateCurrentStep() {
    var currentTab = document.querySelectorAll('.tab-pane')[currentStep];
    var inputs = currentTab.querySelectorAll('input[required], select[required]');
    var isValid = true;
    inputs.forEach(function (input) {
      var value = input.value.trim();
      var errorMessage = '';

      // Basic required field validation
      if (!value) {
        errorMessage = 'This field is required.';
      } else {
        // Additional validations based on input type
        if (input.type === 'text' && !/^[a-zA-Z\s]+$/.test(value)) {
          errorMessage = 'Please enter a valid name (letters only).';
        }
        if (input.type === 'tel' && !/^\d+$/.test(value)) {
          errorMessage = 'Please enter a valid mobile number (digits only).';
        }
        if (input.type === 'email' && !/^\S+@\S+\.\S+$/.test(value)) {
          errorMessage = 'Please enter a valid email address.';
        }
      }

      // Update input field classes and feedback
      if (errorMessage) {
        input.classList.add('is-invalid');
        if (input.nextElementSibling) {
          input.nextElementSibling.textContent = errorMessage;
        }
        isValid = false;
      } else {
        input.classList.remove('is-invalid');
        if (input.nextElementSibling) {
          input.nextElementSibling.textContent = ''; // Clear error message
        }
      }
    });
    return isValid;
  }
  nextButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      if (validateCurrentStep()) {
        if (currentStep < steps.length - 1) {
          showStep(currentStep + 1);
        }
      } else {
        // Optional: Show a general message or alert
        alert('Please fill out all required fields.');
      }
    });
  });
  backButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      if (currentStep > 0) {
        showStep(currentStep - 1);
      }
    });
  });

  // Initialize the form by showing the first step
  showStep(currentStep);
});
/******/ })()
;