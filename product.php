<?php
include "conf.php";
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.min2977.css" >
</head>
<body>

<?php

$sql = "SELECT * FROM `product_tbl` ";
$res = mysqli_query($conn,$sql);

?>
    <section class="pt-3 pb-3 grey-bg">
            <div class="container-mid">
                <div class="section-heading mb-2">
                    <h2>Cars</h2>
                </div>
                <div class="section-css-slider d-flex flex-row tjrow">

                <?php
                if (mysqli_num_rows($res) > 0) {

                    while($row = mysqli_fetch_array($res))
                
                    {   
                ?>
                    <div class="tjcol new-tractor-block">
                        <div class="new-tractor-main box-shadow mt-2 b-t-1">
                            <div class="new-tractor-img text-center">
                                <a href="#" title="Mahindra JIVO 245 VINEYARD">
                                    <img width="300" height="200" class="img-fluid" src="upload/<?php echo $row['image']; ?>" >
                                </a>
                            </div>
                            <div class="new-tractor-content text-center b-t-1">
                                <a href="#" title="Mahindra JIVO 245 VINEYARD" class="weblink">
                                    <h5><?php echo $row['model_name']; ?></h5>
                                </a>
                                <p class="new-tractor-info mt-2 mb-0">
                                    <?php echo $row['price']; ?>
                                </p>
                            </div>
                            <a href="hundaiexter.php?userid=<?php echo $row['id']; ?>">
                                <p class="mb-2 new-tractor-anchor d-flex flex-row">
                                    <span class="tractor_initiate anchor-price oneline boldfont text-center requestModal" data-toggle="modal" data-target="#getonroadprice" data-brand="55" data-id="727" data-title="Mahindra JIVO 245 VINEYARD" data-type="tractor" data-reqfor="OnRoadRequest" data-url="#" title="Get on road price">Details</span>
                                </p>
                            </a>
                        </div>
                    </div>

                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </section>

    <?php include "footer.php"; ?>
</body>
</html>