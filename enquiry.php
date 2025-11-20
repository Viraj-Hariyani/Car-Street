<?php
include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Car Selling Website Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .inquiry-form {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        textarea {
            resize: vertical;
            height: 150px;
        }
        input[type="submit"] {
            background-color: #0074D9;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
    <div class="container">
        <h1>Car Inquiry</h1>
        <div class="inquiry-form">
            <form action="enquiry.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="phone">Your Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
                <br>
                <label for="car_model">Car Model of Interest:</label>
                <input type="text" id="car_model" name="car_model" required>
                <br>
                <label for="message">Your Budget:</label>
                <input type="text" id="Your_Price" name="your_Price" required>
                <br>
                <input type="submit" value="Submit Inquiry" name="submitinquiry">
            </form>
        </div>
    </div>
</body>
</html>

<?php

 if (isset($_POST['submitinquiry'])) 
 {
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone'];
    $car_model = $_POST['car_model'];
    $user_price = $_POST['your_Price'];


    $sql = "INSERT INTO `car_inquiry` (`user_name`, `email`, `phone_no`, `car_model`, `user_price`) VALUES 
    ('".$user_name."','".$email."','".$phone_no."','".$car_model."','".$user_price."')";

    $result = mysqli_query($conn,$sql);

    if($result){
      echo "data insert successfully";
      echo "<script language='javascript'>window.location='order.php';</script>";
    }else{
      echo "error";
    }
 }

?>