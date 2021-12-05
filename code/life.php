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

   <!-- Normalize or reset CSS with your favorite library -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

  <!-- Load paper.css for happy printing -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <style>@page { size: A4 }</style> -->

</head>
<body >
 
<div class="container row" >

    <?php

      include "dbconn.php"; // Using database connection file here

      $records = mysqli_query($db,"select * from users"); // fetch data from database

      while($data = mysqli_fetch_array($records))
      {
   ?>  


<div class="col-md-6">
  <div class="card mb-2  lifetime"   >
    <div class="card-header row ">
      <div class="left text-left ">
        <img src="gec_logo.png" height="66px" >
      </div>
      <div class="middle text-center ml-1 mr-1  font-weight-bolder">
        <p style="font-size:17px;">ALUMNI ASSOCIATION OF GECNIT RAIPUR</p>
        <p  style="font-size:14px;">NATIONAL INSTITUTE OF TECHNOLOGY RAIPUR<br>
        </p>
        <p  style="font-size:10px;">        
               +91 0771 2990317, secretary@gecnitrralumni.org
                <br>
                www.gecnitrralumni.org
        </p>
          
        <!-- <div class="header-border"></div> -->
      </div>
      <div class="right text-right "  >
        <img src="nitrr_logo.png" height="70px" >
      </div>
    </div>
    <div class="card-body row" >
      <div class="user-img" >
        <!-- <img class="rounded-circle" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" height="100px">
       -->
      <img src="img46.png"  class="img-responsive" height="100px" width="100px">
      
      </div>
      <div class="user-details ml-3">
        <p class="font-weight-bold" style="font-size:15px;">Name - <span ><?php echo $data['name']; ?></span></p>
        <p class="font-weight-bold" style="font-size:15px;">Year - <span><?php echo $data['passoutyear']; ?></span></p>
        <p class="font-weight-bold" style="font-size:15px;">Branch - <span><?php echo $data['branch']; ?></span></p>
        <p class="font-weight-bold"  style="font-size:15px;">UID - <span><?php echo $data['uid']; ?></span></p>
      </div>
    </div> 
    <div class="card-footer row">
      <div class="col-md-6">
        <p class="font-weight-bold">Lifetime Member</p>
      </div>
      <div class="col-md-6">
        <p class="font-weight-bold ">Secretary <span class="signature"> <img src="sign.png" height="50px"> </span></p>
      </div>
      
    </div>
  </div>
 </div>
<?php
}
?>
</body>
</html>
