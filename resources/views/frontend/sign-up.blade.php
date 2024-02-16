@extends('layout')

@section('page_content')
    
    <!-- signup form -->
    <section class="container mt-4 mb-4">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <h2>Sign Up</h2>
            <form action="" method="" class="d-flex flex-column justify-content-between align-items-center text-left">
                <label for="" class="text-left"> First Name :</label>
                <input type="text" name="first_name" id="" required>
                <span name="first_name" class="text-danger"></span>

                <label for=""> Last Name :</label>
                <input type="text" name="last_name" id="" required>
                <span name="last_name" class="text-danger"></span>

                <label for=""> Email :</label>
                <input type="email" name="email" id=" " required>
                <span name="input_email" class="text-danger"></span>

                <label for="">Password</label>
                <input type="password" name="" id="" required>
                <span name="login_password" class="text-danger"></span> <br>

                <input type="submit">
            </form>
        </div>
    </section>

    <script>
        // Function for validating first name
        function hg_signup_validateFirstName(firstName) {
            return firstName.length <= 10; // Corrected condition
        }

        // Function for validating last name
        function hg_signup_validateLastName(lastName) {
            return lastName.length <= 10; // Corrected condition
        }
        
            // Function for validating email
            function hg_signup_validateEmail(email) {
                // Regular expression for email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
        
            // Function for validating password
            function hg_signup_validatePassword(password) {
                return password.length >= 8; // Example: Password should be at least 8 characters long
            }
        
            // Function to handle form submission
            function hg_signup_handleFormSubmission(event) {
                event.preventDefault(); // Prevent form submission
        
                // Selecting form inputs and error message spans
                const firstNameInput = document.querySelector('input[name="first_name"]');
                const lastNameInput = document.querySelector('input[name="last_name"]');
                const emailInput = document.querySelector('input[name="email"]');
                const passwordInput = document.querySelector('input[type="password"]');
                const firstNameErrorMessage = document.querySelector('span[name="first_name"]');
                const lastNameErrorMessage = document.querySelector('span[name="last_name"]');
                const emailErrorMessage = document.querySelector('span[name="input_email"]');
                const passwordErrorMessage = document.querySelector('span[name="login_password"]');
        
                if (!hg_signup_validateFirstName(firstNameInput.value)) {
                firstNameErrorMessage.textContent = "First name must be 10 characters or less."; // Updated error message
                return;
            } else {
                firstNameErrorMessage.textContent = ""; // Clear error message
            }

            // Validating last name
            if (!hg_signup_validateLastName(lastNameInput.value)) {
                lastNameErrorMessage.textContent = "Last name must be 10 characters or less."; // Updated error message
                return;
            } else {
                lastNameErrorMessage.textContent = ""; // Clear error message
            }
        
                // Validating email
                if (!hg_signup_validateEmail(emailInput.value)) {
                    emailErrorMessage.textContent = "Please enter a valid email address.";
                    return;
                } else {
                    emailErrorMessage.textContent = ""; // Clear error message
                }
        
                // Validating password
                if (!hg_signup_validatePassword(passwordInput.value)) {
                    passwordErrorMessage.textContent = "Password must be at least 8 characters long.";
                    return;
                } else {
                    passwordErrorMessage.textContent = ""; // Clear error message
                }
        
                // If all validations pass, submit the form
                // You can add your form submission logic here or remove this block if you want to handle form submission differently
                event.target.submit();
            }
        
            // Add event listener to the form for submission
        document.querySelector('form').addEventListener('submit', hg_signup_handleFormSubmission);
    </script>
    
@endsection

