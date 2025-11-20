<?php
include "conf.php";
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

if (isset($_POST['submit'])) 
 {
    $targetDir = "upload/";
    
    $car_company = $_POST['car_company'];
    $car_category = $_POST['car_category'];
    $modelname = $_POST['modelname'];
    $year = $_POST['year'];
    $fule = $_POST['fule'];
    $price = $_POST['price'];
    $other_details = $_POST['other_details'];
    $image = $_FILES['image']['name'];

    $targetFilePath = $targetDir . $image;
    
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(!empty($_FILES['image']['name'])){

        if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)){

            $sql = "INSERT INTO `product_tbl`(`car_company`,`car_category`,`model_name`, `year`, `fule`, `price`, `other_details`, `image`) VALUES 
            ('".$car_company."','".$car_category."','".$modelname."','".$year."','".$fule."','".$price."','".$other_details."','".$image."')";

            $result = mysqli_query($conn,$sql);

            if($result){
              $_SESSION['success_message'] = "Data inserted successfully!";
              header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
              exit();

            }else{
                $statusMsg = "error";
            }

        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = "Please select a file to upload.";
    }
    echo $statusMsg;
 }

?>
<?php include "adminheader.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        /* Add custom CSS styles for the form container */
        .form-container {
            background-color: #f8f9fa; /* Background color */
            border-radius: 15px; /* Rounded corners */
            padding: 20px; /* Spacing inside the form */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
            max-width: 600px; /* Maximum width of the form */
            margin: 0 auto; /* Center the form horizontally */
        }

        /* Add custom CSS styles for form labels */
        .form-label {
            font-weight: bold; /* Bold text for labels */
        }
    </style>
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

<?php
// Check if a success message is stored in the session
if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
    // Clear the session variable to prevent displaying the message on subsequent visits
    unset($_SESSION['success_message']);
}
?>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Car</h3>

            <form action="" method="post" enctype="multipart/form-data">

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
                <div class="col-12">
                  <div class="form-outline">
                    <label class="form-label" for="firstName" >Model Name</label>
                    <input type="text" id="firstName" name="modelname" class="form-control form-control-lg" required />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="form-outline">
                    <label class="form-label" for="firstName" >Year</label>
                    <input type="text" id="firstName" name="year" class="form-control form-control-lg" required />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="form-outline">
                    <label class="form-label" for="firstName" >Fule</label>
                    <input type="text" id="firstName" name="fule" class="form-control form-control-lg" required/>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="form-outline">
                    <label class="form-label" for="firstName" >Price</label>
                    <input type="text" id="firstName" name="price" class="form-control form-control-lg" required/>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="form-outline">
                    <label class="form-label" for="firstName" >other details</label>
                    <textarea type="t" id="firstName" name="other_details" class="form-control form-control-lg" required></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="form-outline">
                    <label class="form-label" for="firstName" >Image</label>
                    <input type="file" id="firstName" name="image" class="form-control form-control-lg" required/>
                  </div>
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <?php include "footer.php"; ?> -->



</body>
</html>

