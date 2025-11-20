<?php
    include "conf.php";
?>

<?php include "adminheader.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
            background-color: #EEFDEF;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        th {
            background-color: #ccc;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</head>
<body bgcolor="#EEFDEF">

<?php

$sql = "SELECT * FROM `car_inquiry` ";

$res = mysqli_query($conn,$sql);

?>
<h1 align="center">User inquiry</h1>
<table border="1px" align="center" >
        <thead>
            <tr>
                <th>Id</th>
                <th>user_name</th>
                <th>email</th>
                <th>phone_n0</th>
                <th>car_model</th>
                <th>user_price</th>
                

                <!-- <th colspan="2">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
                if (mysqli_num_rows($res) > 0) {

                    while($row = mysqli_fetch_array($res))
                
                    {   
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td>
                    <td><?php echo $row['car_model']; ?></td>
                    <td><?php echo $row['user_price']; ?></td>
                       
                   
                    <tr>
            <?php
                    }
                }
                mysqli_close($conn);
            ?>
        </tbody>
    </table>

</body>
</html>-