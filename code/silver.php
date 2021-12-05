<!DOCTYPE html>
<html lang="en">
<head>
  <title>Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="card.css">
</head>
<body>
 
<div class="container row">


    <?php

include "dbconn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>  



  <div class="card mb-2 mr-2 silver">
    <div class="card-header row ">
      <div class="left text-left ">
        <img src="gec_logo.png" height="66px">
      </div>
      <div class="middle text-center ml-1 mr-1  font-weight-bolder">
        <p>ALUMNI ASSOCIATION OF GECNIT RAIPUR</p>
        <p  style="font-size:9px;">NATIONAL INSTITUTE OF TECHNOLOGY RAIPUR<br>
                 +91 0771 2990317, secretary@gecnitrralumni.org
                <br>
                www.gecnitrralumni.org
         </p>
          
      </div>
      <div class="right text-right "  >
        <img src="nitrr_logo.png" height="70px" >
      </div>
    </div>
    <div class="card-body row">
      <!-- <img src="sketchnitrr.jpg"" class="img-responsive"> -->
   
      <div class="user-img" >
        <img class="rounded-circle" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" height="100px">
      </div>
      <div class="user-details ml-3">
        <p class="font-weight-bold" >Name - <span ><?php echo $data['name']; ?></span></p>
        <p class="font-weight-bold">Year - <span><?php echo $data['passoutyear']; ?></span></p>
        <p class="font-weight-bold">Branch - <span><?php echo $data['branch']; ?></span></p>
        <p class="font-weight-bold">UID - <span><?php echo $data['uid']; ?></span></p>
      </div>
    </div> 
    <div class="card-footer row">
      <div class="col-md-6">
        <p class="font-weight-bold">Silver Jubilee - <span class="passoutyear"><?php echo date("Y"); ?></span></p>
      </div>
      <div class="col-md-6">
        <p class="font-weight-bold ">Secretary <span class="signature"> <img src="sign.png" height="50px"> </span></p>
      </div>
      
  </div>
</div>
<?php
}
?>
</body>
</html>
