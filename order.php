<?php
    include "conf.php";
?>



<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 50%;
            margin: 0 auto;
        }
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        {
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
<?php include "header.php"; ?>
<body>
    <div class="container">
        <h1>Payment Form</h1>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required><br>

            <label>Payment Type:</label>
            <input type="radio" id="cash" name="r1" value="Cash" required>
            <label for="cash">Cash</label>
            <input type="radio" id="cod" name="r1" value="UPI" required>
            <label for="cod">UPI</label><br>

            <label for="visiting_charge">Visiting Charge:</label>
            <input type="radio" id="charge_500" name="v1" value="500" required>
            <label for="charge_500">$500</label><br>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

<?php
 if (isset($_POST['submit'])) 
 {
// Retrieve and sanitize form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$payment_type = mysqli_real_escape_string($conn, $_POST['r1']);
$visiting_charge = mysqli_real_escape_string($conn, $_POST['v1']);

// Insert data into the database
$sql = "INSERT INTO `payment_info` (`name`, `address`, `phone`, `payment_type`, `visiting_charge`) VALUES ('".$name."', '".$address."', '".$phone."', '".$payment_type."', '".$visiting_charge."')";

$result = mysqli_query($conn,$sql);

if($result){
    $_SESSION['last_insert_id'] = mysqli_insert_id($conn);
    echo "<script language='javascript'>window.location='invoice.php';</script>";
}else{
  echo "error";
}
}
?>

