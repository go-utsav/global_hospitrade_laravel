@extends('layout')

@section('page_content')

    <div class="container pt-3 pb-4">
        <h1>Contact Us</h1>

    </div>

    <section class="container mt-3 mb-3">
        <div class="row justify-content-around align-items-center">
            <div class="col text-center">
                <i class="fa fa-envelope share_icons_product"></i>
                <h5>Email</h5>
                <p>info@hospitradeglobal.com</p>
            </div>
            <div class="col text-center">
                <i class="fa fa-phone share_icons_product"></i>
                <h5>Contact Number</h5>
                <p>info@hospitradeglobal.com</p>
            </div>
            <div class="col text-center">
                <i class="fa fa-location-arrow share_icons_product"></i>
                <h5>Location</h5>
                <p>12 Peterborough Rd, Harrow HA1 2BQ</p>
            </div>
        </div>
    </section>
    

    <!-- signup form -->
    <section class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-6">
                <!-- contact us form -->
                <div class="row d-flex flex-column justify-content-center align-items-center">
                 <h3>Drop Your Message</h3>
                    <form action="" method=""
                        class="d-flex flex-column justify-content-between align-items-center text-left">
                        <label for="" class="text-left"> Name* :</label>
                        <input type="text" name="first_name" id="" class="form-control" required>
                        <span name="first_name" class="text-danger"></span>

                        <label for=""> Email* :</label>
                        <input type="email" name="email" id=" " class="form-control" required>
                        <span name="input_email" class="text-danger"></span>

                        <label for="">Message* :</label>
                        <textarea name="message" id="" class="form-control" rows="5" required></textarea>
                        <span name="login_password" class="text-danger"></span>

                        <input type="submit" class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <!-- map embedded -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.489390326472!2d-0.33640642240900087!3d51.577593505571684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761325a4a3db91%3A0xc85ca10daf60df8!2sHospitrade%20Ltd!5e0!3m2!1sen!2suk!4v1707564744351!5m2!1sen!2suk"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <script>
        // Function for validating name
        function hg_contact_validateName(name) {
            return name.trim().length > 0; // Check if name is not empty
        }

        // Function for validating email
        function hg_contact_validateEmail(email) {
            // Regular expression for email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Function for validating message
        function hg_contact_validateMessage(message) {
            return message.trim().length > 0; // Check if message is not empty
        }

        // Function to handle form submission
        function hg_contact_handleFormSubmission(event) {
            event.preventDefault(); // Prevent form submission

            // Selecting form inputs and error message spans
            const nameInput = document.querySelector('input[name="first_name"]');
            const emailInput = document.querySelector('input[name="email"]');
            const messageInput = document.querySelector('textarea[name="message"]');
            const nameErrorMessage = document.querySelector('span[name="first_name"]');
            const emailErrorMessage = document.querySelector('span[name="input_email"]');
            const messageErrorMessage = document.querySelector('span[name="login_password"]');

            // Validating name
            if (!hg_contact_validateName(nameInput.value)) {
                nameErrorMessage.textContent = "Please enter your name.";
                return;
            } else {
                nameErrorMessage.textContent = ""; // Clear error message
            }

            // Validating email
            if (!hg_contact_validateEmail(emailInput.value)) {
                emailErrorMessage.textContent = "Please enter a valid email address.";
                return;
            } else {
                emailErrorMessage.textContent = ""; // Clear error message
            }

            // Validating message
            if (!hg_contact_validateMessage(messageInput.value)) {
                messageErrorMessage.textContent = "Please enter your message.";
                return;
            } else {
                messageErrorMessage.textContent = ""; // Clear error message
            }

            // If all validations pass, submit the form
            // You can add your form submission logic here or remove this block if you want to handle form submission differently
            event.target.submit();
        }

        // Add event listener to the form for submission
        document.querySelector('form').addEventListener('submit', hg_contact_handleFormSubmission);
    </script>


@endsection

