<?php
    include "conf.php";
    
    // echo $id = $_GET['userid'];
?>

<?php include "adminheader.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Car</h3>

            <form method="post" action="" enctype="multipart/form-data">
            <?php
              
              $sql = "SELECT * FROM `product_tbl` WHERE id='" . $_GET['userid'] . "'";
              $res = mysqli_query($conn,$sql);
              if (mysqli_num_rows($res) > 0) {

                while($row = mysqli_fetch_array($res))
            
                { 
            ?>
               
           <label for="car_company">Select a Car Company:</label>
           <select id="car_company" name="car_company">
           <option value="ford">Ford</option>
           <option value="chevrolet">Chevrolet</option>
           <option value="toyota">Toyota</option>
           <option value="honda">Honda</option>
            <option value="bmw">BMW</option>
            <option value="bmw">Suzuki</option>
            <option value="bmw">Hyundai</option>
            <option value="bmw">Kia</option>

           </select>


           <label for="car_category">Select a Car Type:</label>
           <select id="car_category" name="car_category">
           <option value="sedan">Sedan</option>
           <option value="suv">Suv</option>
           <option value="minivan">Minivan</option>
           <option value="hatchback">Hatchback</option>
            <option value="convertible">Convertable</option>
           </select>

             <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="model_name" value="<?php echo $row['model_name']; ?>" type="text" id="firstName" class="form-control form-control-lg" />
                    <input type="hidden" name="userid" value="<?php echo $row['id']; ?>">
                    <label class="form-label"  for="firstName">Model Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="year" value="<?php echo $row['year']; ?>" type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Year</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input name="fule" value="<?php echo $row['fule']; ?>" type="text" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Fule</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input name="price" value="<?php echo $row['price']; ?>" type="text" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Price</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                <img name="images" src="upload/<?php echo $row['image']; ?>" style="width: 100px; height: 100px;" >
                <input type="file" name="newimage">
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
              </div>
              <?php
                    }
                }
            ?>
            </form>

            <?php
                    if(isset($_POST['submit'])) {

                      $userid = $_POST['userid'];
                      $car_company = $_POST['car_company'];
                      $car_category = $_POST['car_category'];
                      $model_name = $_POST['model_name'];
                      $year = $_POST['year'];
                      $fule = $_POST['fule'];
                      $price = $_POST['price'];
                      $newimage = $_FILES["newimage"]["name"];
                      $oldimage = $_POST['image']; 

                      $oldprofilepic = "upload/" . $oldimage;

                      if (!empty($newimage)) {

                        move_uploaded_file($_FILES["newimage"]["tmp_name"], "upload/" . $newimage);
                        // Update image field in the database
                        mysqli_query($conn, "UPDATE `product_tbl` SET `image` = '".$newimage."' WHERE id='".$userid."' ");
                        
                        if (file_exists($oldprofilepic) && is_file($oldprofilepic)) {
                            unlink($oldprofilepic);
                        }
                    }
            
                    // Update other fields in the database
                    // mysqli_query($conn, "UPDATE `product_tbl` SET model_name='".$model_name."', year='".$year."', fule='".$fule."', price='".$price."' WHERE id='".$userid."'");

                    $updateQuery = "UPDATE `product_tbl` SET car_company='".$car_company."',car_category='".$car_category."',model_name='".$model_name."', year='".$year."', fule='".$fule."', price='".$price."' WHERE id='".$userid."' ";
                    $result = mysqli_query($conn, $updateQuery);

                        if($result){
                            $statusMsg = "data insert successfully";
                        }else{
                            $statusMsg = "error";
                        }
                        echo $statusMsg;
                      }
                        

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>