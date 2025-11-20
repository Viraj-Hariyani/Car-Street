<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Include your JavaScript and CSS libraries here -->
</head>
<body>
    <style>
        /* Add custom CSS styles for the form container */
        .form-container {
            background-color: #f8f9fa; /* Background color */
            border-radius: 15px; /* Rounded corners */
            padding: 20px; /* Spacing inside the form */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
            max-width: 600px; /* Maximum width of the form */
            margin: 0 auto; /* Center the form horizontally */
        }

        /* Add custom CSS styles for form labels */
        .form-label {
            font-weight: bold; /* Bold text for labels */
        }
    </style>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <!-- Apply the form-container class to the card div -->
                    <div class="card shadow-2-strong card-registration form-container">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                            <form action="" method="post">
                                <!-- Your form elements remain unchanged -->

                                <!-- Example label with custom style -->
                                <label class="form-label" for="firstName">First Name</label>

                                <!-- Example input with custom style -->
                                <div class="form-outline">
                                    <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" required />
                                </div>

                                <!-- Continue styling other form elements as needed -->

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include your JavaScript libraries here -->
</body>
</html>
