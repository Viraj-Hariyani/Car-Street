<?php
include 'conf.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-color: #525f68; /* Blue background color */
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
        }
        input[type="text"], input[type="password"] {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #525f68;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #525f68; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login" name="submit">
        </form>
        <p>If New User <a href="register.php">Register</a> Hear</p>
    </div>
</body>
</html>
<?php

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $check = "SELECT `username`, `password` FROM `user_tbl` WHERE username = '".$username."' and password = '".$password."'";
  $check_qry = mysqli_query($conn,$check);

  // if ($check_qry){
  //   echo $username;
  // }


  if($check_row = mysqli_fetch_array($check_qry))
  {
    $_SESSION['username'] = $check_row['username'];
    echo "<script language='javascript'>window.location='home.php';</script>";
  }

}

?>
