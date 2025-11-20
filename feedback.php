<?php
include "conf.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <style>
        body {
            background-color: #fff; /* White background color */
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
        .feedback-form {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
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

        <h1>Feedback</h1>
        <div class="feedback-form">
            <form method="post" action="">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Your Email:</label>
                <input type="text" id="email" name="email" required>
                <br>
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" required></textarea>
                <br>
                <input type="submit" value="Submit Feedback" name="submitinquiry">
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
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO `feedback` (`user_name`, `email`, `feedback`) VALUES ('".$user_name."','".$email."','".$feedback."')";

    $result = mysqli_query($conn,$sql);

    if($result){
      echo "data insert successfully";
    }else{
      echo "error";
    }
 }