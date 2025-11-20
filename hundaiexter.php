<?php
    include "conf.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.min2977.css" >
</head>
<body>
    <?php include "header.php"; ?>

<?php

$sql = "SELECT * FROM `product_tbl` WHERE id='" . $_GET['userid'] . "' ";

$res = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($res);

?>
    <div class="row">
        <div class="col-sm-6" style="margin-top: 10px; margin-bottom: 10px;">
            <img width="600" height="300" src="upload/<?php echo $row['image']; ?>" class="img-fluid"
                alt="Car">
        </div>
        <div class="col-sm-6" style="">
            <h1 style="text-align: center;">CarStreet</h1>

            <p>car company : <?php echo $row['car_company']; ?></p>
            <p>car category : <?php echo $row['car_category']; ?></p>
            <p>Car Model : <?php echo $row['model_name']; ?></p>
            <p>Fule : <?php echo $row['fule']; ?></p>
            <p>Year : <?php echo $row['year']; ?></p>
            <p>Price : <?php echo $row['price']; ?></p>
            <p>other details : <?php echo $row['other_details']; ?></p>

            
            
            <a href="enquiry.php"><button type="submit">Inquiry</button></a>

        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>