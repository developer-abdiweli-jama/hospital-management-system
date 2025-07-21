document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Dynamic population of doctor and department dropdowns
    const doctorSelect = document.querySelector('select[name="doctor"]');
    const departmentSelect = document.querySelector('select[name="department"]');

    if (doctorSelect) {
        fetch('/api/doctors')
            .then(response => response.json())
            .then(doctors => {
                doctors.forEach(doctor => {
                    const option = document.createElement('option');
                    option.value = doctor.id;
                    option.textContent = doctor.name;
                    doctorSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching doctors:', error));
    }

    if (departmentSelect) {
        fetch('/api/departments')
            .then(response => response.json())
            .then(departments => {
                departments.forEach(dept => {
                    const option = document.createElement('option');
                    option.value = dept.id;
                    option.textContent = dept.name;
                    departmentSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching departments:', error));
    }

    // Newsletter form submission via AJAX
    const newsletterForm = document.querySelector('footer form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = newsletterForm.querySelector('input[type="email"]');
            const email = emailInput.value;

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.textContent = 'Please enter a valid email address.';
                newsletterForm.appendChild(errorDiv);
                return;
            }

            fetch('/api/newsletter/subscribe', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email })
            })
            .then(response => response.json())
            .then(data => {
                newsletterForm.querySelectorAll('.error-message').forEach(el => el.remove());
                const successDiv = document.createElement('div');
                successDiv.className = 'text-green-500 text-sm mt-2';
                successDiv.textContent = 'Subscribed successfully!';
                newsletterForm.appendChild(successDiv);
                newsletterForm.reset();
            })
            .catch(error => {
                newsletterForm.querySelectorAll('.error-message').forEach(el => el.remove());
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.textContent = 'Failed to subscribe. Please try again.';
                newsletterForm.appendChild(errorDiv);
            });
        });
    }

    // Contact form submission via AJAX
    const contactForm = document.querySelector('form[action="/contact/submit"]');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = contactForm.querySelector('input[name="name"]').value;
            const email = contactForm.querySelector('input[name="email"]').value;
            const phone = contactForm.querySelector('input[name="phone"]').value;
            const subject = contactForm.querySelector('input[name="subject"]').value;
            const message = contactForm.querySelector('textarea[name="message"]').value;
            const csrfToken = contactForm.querySelector('input[name="csrf_token"]').value;

            if (!name || !email || !phone || !subject || !message) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.textContent = 'Please fill out all required fields.';
                contactForm.appendChild(errorDiv);
                return;
            }

            fetch('/contact/submit', {
                method: 'POST',
                headers: { 
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': csrfToken
                },
                body: JSON.stringify({ name, email, phone, subject, message })
            })
            .then(response => response.json())
            .then(data => {
                contactForm.querySelectorAll('.error-message').forEach(el => el.remove());
                const successDiv = document.createElement('div');
                successDiv.className = 'text-green-500 text-sm mt-2';
                successDiv.textContent = 'Message sent successfully!';
                contactForm.appendChild(successDiv);
                contactForm.reset();
            })
            .catch(error => {
                contactForm.querySelectorAll('.error-message').forEach(el => el.remove());
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.textContent = 'Failed to send message. Please try again.';
                contactForm.appendChild(errorDiv);
            });
        });
    }
});