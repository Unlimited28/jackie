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

    // Auth page tabs
    const tabs = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.target);

            tabContents.forEach(tc => {
                tc.classList.remove('active');
            });
            target.classList.add('active');

            tabs.forEach(t => {
                t.classList.remove('active');
            });
            tab.classList.add('active');
        });
    });

    // Check for URL params to set active tab
    const urlParams = new URLSearchParams(window.location.search);
    const tabParam = urlParams.get('tab');
    if (tabParam) {
        // We need to find the button that targets the tab, not the tab itself
        const tabToActivate = document.querySelector(`.tab-link[data-target="#${tabParam}"]`);
        if (tabToActivate) {
            tabToActivate.click();
        }
    }

    // Exam Timer
    const timerElement = document.getElementById('timer');
    if (timerElement) {
        let time = 60 * 60; // 60 minutes
        setInterval(() => {
            const minutes = Math.floor(time / 60);
            let seconds = time % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timerElement.textContent = `${minutes}:${seconds}`;
            time--;
        });
    }

    // Add question to exam creation form
    const addQuestionBtn = document.getElementById('addQuestionBtn');
    if (addQuestionBtn) {
        const questionsContainer = document.getElementById('questionsContainer');
        let questionCount = 0;

        addQuestionBtn.addEventListener('click', () => {
            questionCount++;
            const questionBlock = document.createElement('div');
            questionBlock.classList.add('question-block');
            questionBlock.innerHTML = `
                <h4>Question ${questionCount}</h4>
                <div class="form-group">
                    <label for="question${questionCount}">Question Text</label>
                    <input type="text" id="question${questionCount}" name="question${questionCount}" required>
                </div>
                <div class="form-group">
                    <label>Options</label>
                    <div class="option-group">
                        <input type="radio" name="correctAnswer${questionCount}" value="a" required>
                        <input type="text" name="option${questionCount}a" placeholder="Option A" required>
                    </div>
                    <div class="option-group">
                        <input type="radio" name="correctAnswer${questionCount}" value="b" required>
                        <input type="text" name="option${questionCount}b" placeholder="Option B" required>
                    </div>
                    <div class="option-group">
                        <input type="radio" name="correctAnswer${questionCount}" value="c" required>
                        <input type="text" name="option${questionCount}c" placeholder="Option C" required>
                    </div>
                </div>
            `;
            questionsContainer.appendChild(questionBlock);
        }, 1000);
    }
});
