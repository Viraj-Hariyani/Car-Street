<?php
include "conf.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.min2977.css" >
</head>
<body>
    
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

            <form action="" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" require/>
                    <label class="form-label" for="firstName" >First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" require/>
                    <label class="form-label" for="lastName" >Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" name="birthdayDate" class="form-control form-control-lg" id="birthdayDate" require/>
                    <label for="birthdayDate" class="form-label" >Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="r1" id="femaleGender"
                      value="Female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="r1" id="maleGender"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="r1" id="otherGender"
                      value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" require/>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" require/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                          <input type="tel" id="phoneNumber" name="username" class="form-control form-control-lg" require/>
                          <label class="form-label" for="phoneNumber">username</label>
                    </div>
                  </div>

                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="password" id="phoneNumber" name="password" class="form-control form-control-lg" require/>
                      <label class="form-label" for="phoneNumber">password</label>
                    </div>
                </div>

              </div>

              <div class="row">
                <div class="col-12">
                <input type="tel" id="phoneNumber" name="address" class="form-control form-control-lg" require/>
                    <label class="form-label" for="phoneNumber">Address</label>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                <input type="tel" id="phoneNumber" name="state" class="form-control form-control-lg" require/>
                    <label class="form-label" for="phoneNumber">State</label>
                </div>
              
                <div class="col-6">
                <input type="tel" id="phoneNumber" name="city" class="form-control form-control-lg" require/>
                    <label class="form-label" for="phoneNumber">City</label>
                </div>
              </div>

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

<!-- <?php include "footer.php"; ?> -->

</body>
</html>

<?php

 if (isset($_POST['submit'])) 
 {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $birthday = $_POST['birthdayDate'];
    $gender = $_POST['r1'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];


    $sql = "INSERT INTO `user_tbl`(`first_name`, `last_name`, `birthdate`, `gender`, `phone_no`,`username`,`password`, `email`, `address`, `state`, `city`) VALUES 
    ('".$firstname."','".$lastname."','".$birthday."','".$gender."','".$phone."','".$username."','".$password."','".$email."','".$address."','".$state."','".$city."')";

    $result = mysqli_query($conn,$sql);

    if($result){
      echo 'data insert success';
      echo "<script language='javascript'>window.location='index.php';</script>";
    }else{
      echo "error";
    }
 }

?>