document.addEventListener('DOMContentLoaded', function() {
    // Active navigation link highlighting
    const currentLocation = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.sidebar-nav a, .public-nav a');

    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href').split('/').pop();
        if (linkPage === currentLocation) {
            link.classList.add('active');
        }
    });

    // Gallery Modal
    const modal = document.getElementById('galleryModal');
    if (modal) {
        const modalImg = document.getElementById("modalImage");
        const captionText = document.getElementById("caption");
        const galleryImages = document.querySelectorAll('.gallery-item img');
        const span = document.getElementsByClassName("close-button")[0];

        galleryImages.forEach(img => {
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
        });

        span.onclick = function() {
            modal.style.display = "none";
        }
    }

    // Generic Modal Handling
    const modalTriggers = document.querySelectorAll('[data-toggle="modal"]');
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const targetModalId = this.getAttribute('data-target');
            const targetModal = document.querySelector(targetModalId);
            if (targetModal) {
                targetModal.style.display = 'block';
            }
        });
    });

    const modalDismissers = document.querySelectorAll('[data-dismiss="modal"]');
    modalDismissers.forEach(dismisser => {
        dismisser.addEventListener('click', function() {
            const modalToDismiss = this.closest('.modal');
            if (modalToDismiss) {
                modalToDismiss.style.display = 'none';
            }
        });
    });

    // Basic Form Validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value) {
                    isValid = false;
                    field.classList.add('invalid');
                } else {
                    field.classList.remove('invalid');
                }
            });

            if (!isValid) {
                event.preventDefault();
                alert('Please fill out all required fields.');
            }
        });
    });

    // Mobile Sidebar Toggle
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.sidebar');
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });
    }

    // Role-based passcode field visibility on registration form
    const roleSelector = document.getElementById('role');
    if (roleSelector) {
        const passcodeField = document.getElementById('passcodeField');
        roleSelector.addEventListener('change', function() {
            if (this.value === 'president' || this.value === 'superadmin') {
                passcodeField.style.display = 'block';
                passcodeField.querySelector('input').setAttribute('required', 'required');
            } else {
                passcodeField.style.display = 'none';
                passcodeField.querySelector('input').removeAttribute('required');
            }
        });
    }
});
