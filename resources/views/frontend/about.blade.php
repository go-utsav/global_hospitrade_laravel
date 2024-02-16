@extends('layout')

@section('page_content')

    
    <!-- login form -->
    <section class="container mt-4 mb-4">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <h2>Login</h2>
            <form action="" method="" class="d-flex flex-column justify-content-between align-items-center">
                <label for=""> Email :</label>
                <input type="email" name="email" id="">
                <span name="input_email" class="text-danger"></span>

                <label for="">Password</label>
                <input type="password" name="" id="">
                <span name="login_password" class="text-danger"></span> <br>

                <input type="submit">
            </form>
        </div>
    </section>

    <script>
        // Function for email validation
        function hg_login_validateEmail(email) {
            const re = /\S+@\S+\.\S+/;
            return re.test(String(email).toLowerCase());
        }

        // Function for password validation
        function hg_login_validatePassword(password) {
            // Add your password validation logic here
            // For example, check if the password meets certain criteria like length, containing special characters, etc.
            return password.length >= 8; // Just an example, you can customize this validation
        }

        // Function to handle form submission
        function hg_login_handleFormSubmission(event) {
            event.preventDefault(); // Prevent form submission

            const emailInput = document.querySelector('input[type="email"]');
            const passwordInput = document.querySelector('input[type="password"]');
            const emailErrorMessage = document.querySelector('span[name="input_email"]');
            const passwordErrorMessage = document.querySelector('span[name="login_password"]');

            // Validate email
            if (!hg_login_validateEmail(emailInput.value)) {
                emailErrorMessage.textContent = "Please enter a valid email address.";
                return;
            } else {
                emailErrorMessage.textContent = ""; // Clear error message
            }

            // Validate password
            if (!hg_login_validatePassword(passwordInput.value)) {
                passwordErrorMessage.textContent = "Password must be at least 8 characters long.";
                return;
            } else {
                passwordErrorMessage.textContent = ""; // Clear error message
            }

            // If both email and password are valid, submit the form
            // You can add your form submission logic here or remove this block if you want to handle form submission differently
            event.target.submit();
        }

        // Add event listener to the form for submission
        document.querySelector('form').addEventListener('submit', hg_login_handleFormSubmission);
    </script>

@endsection

