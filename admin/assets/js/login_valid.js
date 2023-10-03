 // Email input element
 const emailInput = document.getElementById('email');
 // Error message element for email
 const emailError = document.getElementById('emailError');

 // Password input element
 const passwordInput = document.getElementById('password');
 // Error message element for password
 const passwordError = document.getElementById('passwordError');

 // Login button
 const loginButton = document.getElementById('loginButton');

 // Email input event listener
 emailInput.addEventListener('input', function () {
   const email = emailInput.value;

   if (email === '') {
     emailInput.classList.remove('is-invalid');
     emailError.textContent = '';
   } else if (!isValidEmail(email)) {
     emailInput.classList.add('is-invalid');
     emailError.textContent = 'Invalid email address';
   } else {
     emailInput.classList.remove('is-invalid');
     emailError.textContent = '';
   }

   toggleLoginButton();
 });

 // Password input event listener
 passwordInput.addEventListener('input', function () {
   const password = passwordInput.value;

   if (password === '') {
     passwordInput.classList.add('is-invalid');
     passwordError.textContent = 'Password is required';
   } else {
     passwordInput.classList.remove('is-invalid');
     passwordError.textContent = '';
   }

   toggleLoginButton();
 });

 // Toggle login button state
 function toggleLoginButton() {
   if (emailInput.value !== '' && passwordInput.value !== '' && !emailInput.classList.contains('is-invalid') && !passwordInput.classList.contains('is-invalid')) {
     loginButton.disabled = false;
   } else {
     loginButton.disabled = true;
   }
 }

 // Email validation function
 function isValidEmail(email) {
   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   return emailRegex.test(email);
 }