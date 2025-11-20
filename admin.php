<?php
include 'conf.php';

if(isset($_POST['submit'])){
  $username = $_POST['uname'];
  $password = $_POST['psw'];

  $check = "SELECT `user_name`, `password` FROM `admin` WHERE user_name = '".$username."' and password = '".$password."'";
  $check_qry = mysqli_query($conn,$check);

  // if ($check_qry){
  //   echo $username;
  // }


  if($check_row = mysqli_fetch_array($check_qry))
  {
    $_SESSION['user_name'] = $check_row['user_name'];
    echo "<script language='javascript'>window.location='dashboard.php';</script>";
  }
  if($_SESSION['islogged'] !="1")
  {
  ?>
    <script language="JavaScript" type="text/javascript"> 
      alert("Invalid Credentials, Please try again.");
      window.location='admin.php';
    </script>
  <?php
    die;
  }


}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

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
            width: 100%;
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
  

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="login-container">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="uname" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="psw" required>
            <br>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>

</body>
</html>
