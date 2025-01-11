// Initialize Select2 elements
function initializeSelect2() {
    $('.select2').select2({
        placeholder: 'Sélectionnez des options',
        allowClear: true,
        width: '100%'
    });
}

// Initialize tooltips
function initializeTooltips() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

// Handle file input change for avatar upload
function handleFileInput() {
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
}

// Handle dynamic form validation
function handleFormValidation() {
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}

// Handle confirmation dialogs
function handleConfirmation() {
    $('[data-confirm]').on('click', function(e) {
        if (!confirm($(this).data('confirm'))) {
            e.preventDefault();
        }
    });
}

// Initialize all components
document.addEventListener('DOMContentLoaded', function() {
    initializeSelect2();
    initializeTooltips();
    handleFileInput();
    handleFormValidation();
    handleConfirmation();
});
