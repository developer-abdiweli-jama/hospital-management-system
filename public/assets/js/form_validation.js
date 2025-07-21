document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            const email = form.querySelector('input[name="email"]');
            const password = form.querySelector('input[name="password"]');
            const confirmPassword = form.querySelector('input[name="confirm_password"]');
            const role = form.querySelector('select[name="role"]');
            const fullName = form.querySelector('input[name="full_name"]');
            const phone = form.querySelector('input[name="phone"]');
            const date = form.querySelector('input[name="date"]');
            const time = form.querySelector('input[name="time"]');
            const doctor = form.querySelector('select[name="doctor"]');
            const department = form.querySelector('select[name="department"]');
            const name = form.querySelector('input[name="name"]');
            const subject = form.querySelector('input[name="subject"]');
            const message = form.querySelector('textarea[name="message"]');

            let errors = [];

            // General validations
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                errors.push('Please enter a valid email address.');
                email.classList.add('border-red-500');
            }
            if (password && password.value.length < 8) {
                errors.push('Password must be at least 8 characters long.');
                password.classList.add('border-red-500');
            }
            if (confirmPassword && confirmPassword.value !== password.value) {
                errors.push('Passwords do not match.');
                confirmPassword.classList.add('border-red-500');
            }
            if (role && !role.value) {
                errors.push('Please select a role.');
                role.classList.add('border-red-500');
            }
            if (fullName && fullName.value.trim().length < 2) {
                errors.push('Full name must be at least 2 characters long.');
                fullName.classList.add('border-red-500');
            }

            // Appointment form-specific validations
            if (phone && form.action.includes('/appointments/book') && !/^\+?\d{10,15}$/.test(phone.value)) {
                errors.push('Please enter a valid phone number (10-15 digits).');
                phone.classList.add('border-red-500');
            }
            if (date && form.action.includes('/appointments/book')) {
                const today = new Date().toISOString().split('T')[0];
                if (date.value < today) {
                    errors.push('Appointment date cannot be in the past.');
                    date.classList.add('border-red-500');
                }
            }
            if (time && form.action.includes('/appointments/book') && !/^(0?[8-9]|1[0-7]):[0-5][0-9]$/.test(time.value)) {
                errors.push('Appointment time must be between 08:00 and 17:59.');
                time.classList.add('border-red-500');
            }
            if (doctor && form.action.includes('/appointments/book') && !doctor.value) {
                errors.push('Please select a doctor.');
                doctor.classList.add('border-red-500');
            }
            if (department && form.action.includes('/appointments/book') && !department.value) {
                errors.push('Please select a department.');
                department.classList.add('border-red-500');
            }
            if (name && form.action.includes('/appointments/book') && name.value.trim().length < 2) {
                errors.push('Name must be at least 2 characters long.');
                name.classList.add('border-red-500');
            }

            // Contact form-specific validations
            if (form.action.includes('/contact/submit')) {
                if (name && name.value.trim().length < 2) {
                    errors.push('Name must be at least 2 characters long.');
                    name.classList.add('border-red-500');
                }
                if (phone && !/^\+?\d{10,15}$/.test(phone.value)) {
                    errors.push('Please enter a valid phone number (10-15 digits).');
                    phone.classList.add('border-red-500');
                }
                if (subject && subject.value.trim().length < 3) {
                    errors.push('Subject must be at least 3 characters long.');
                    subject.classList.add('border-red-500');
                }
                if (message && message.value.trim().length < 10) {
                    errors.push('Message must be at least 10 characters long.');
                    message.classList.add('border-red-500');
                }
            }

            // Display errors and prevent submission if needed
            if (errors.length > 0) {
                event.preventDefault();
                // Clear previous error messages
                form.querySelectorAll('.error-message').forEach(el => el.remove());
                // Add new error messages
                errors.forEach(error => {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'error-message';
                    errorDiv.textContent = error;
                    form.appendChild(errorDiv);
                });
            } else {
                // Clear error styles if validation passes
                form.querySelectorAll('.border-red-500').forEach(el => el.classList.remove('border-red-500'));
                form.querySelectorAll('.error-message').forEach(el => el.remove());
            }
        });
    });
});