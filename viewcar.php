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

$sql = "SELECT * FROM `product_tbl` ";

$res = mysqli_query($conn,$sql);

?>
<h1 align="center">List of cars</h1>
<table border="1px" align="center">
        <thead>
            <tr>
                <th>Id</th>
                <th>car_company</th>
                <th>car_category</th>
                <th>model_name</th>
                <th>year</th>
                <th>fule</th>
                <th>price</th>
                <th>other_details</th>
                <th>image</th>
                <th colspan="2">Action</th>
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
                    <td><?php echo $row['car_company']; ?></td>
                    <td><?php echo $row['car_category']; ?></td>
                    <td><?php echo $row['model_name']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['fule']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['other_details']; ?></td>
                    <td><img src="upload/<?php echo $row['image']; ?>" style="width: 100px; height: 100px;" ></td>
                    <td><a href="updatecar.php?userid=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="deleteproduct.php?edit=<?php echo $row['id']; ?>" class="btn btn-success">Delete</a></td>
                <tr>
            <?php
                    }
                }
                mysqli_close($conn);
            ?>
        </tbody>
    </table>

</body>
</html>