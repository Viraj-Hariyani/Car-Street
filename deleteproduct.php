<?php

     include "conf.php";
     
     $id = $_GET['edit'];

     $res = mysqli_query($conn,"SELECT * from product_tbl WHERE id = $id limit 1");

     if($row=mysqli_fetch_array($res)) 
     {
          $deleteimage = $row['image'];
     }
     $folder = "upload/";
          unlink($folder.$deleteimage);

          $result = mysqli_query($conn,"DELETE from product_tbl WHERE id = $id ");

          if($result)
          {
               header("location:viewcar.php");
               echo " data delete successfully";
          }else{
               echo "data not delete";
          }

?>