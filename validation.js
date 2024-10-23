document.addEventListener('DOMContentLoaded', () => {
    const signupForm = document.getElementById('signup-form');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    signupForm.addEventListener('submit', (event) => {
        const nameValue = nameInput.value.trim();
        const emailValue = emailInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        if (!nameValue) {
            alert('Name field cannot be empty or filled with only whitespace.');
            event.preventDefault(); // Prevent form submission
            return;
        }

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(emailValue)) {
            alert('Please enter a valid email address.');
            event.preventDefault(); // Prevent form submission
            return;
        }

        const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        if (!passwordPattern.test(passwordValue)) {
            alert('Password must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters.');
            event.preventDefault(); // Prevent form submission
            return;
        }
    });
});
