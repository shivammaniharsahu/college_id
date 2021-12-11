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
  <link rel="stylesheet" href="../assets/css/card.css">

   <!-- Normalize or reset CSS with your favorite library -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> -->

  <!-- Load paper.css for happy printing -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <style>@page { size: A4 }</style> -->

</head>
<body >
 
<div class="row" >

    <?php

      include "../server/dbconn.php"; // Using database connection file here

      $records = mysqli_query($db,"select * from users"); // fetch data from database

      while($data = mysqli_fetch_array($records))
      {
   ?>  


<div class="col-md-6">
  <div class="card mb-4  lifetime"   >
    <div class="card-header row ">
      <div class="left text-left ">
        <img src="../assets/image/gec_logo.png" height="80px" >
      </div>
      <div class="middle text-center ml-1 mr-1  font-weight-bolder">
        <p style="font-size:18px;">ALUMNI ASSOCIATION OF GECNIT RAIPUR</p>
        <p  style="font-size:15px;">NATIONAL INSTITUTE OF TECHNOLOGY RAIPUR<br>
        </p>
        <p  style="font-size:13px;">        
               +91 0771 2990317, secretary@gecnitrralumni.org
                <br>
                www.gecnitrralumni.org
        </p>
          
        <!-- <div class="header-border"></div> -->
      </div>
      <div class="right text-right "  >
        <img src="../assets/image/nitrr_logo1.png" height="80px" >
      </div>
    </div>
    <div class="card-body row" style="" >
      <div class="user-img" >
      
      
      <img src="../assets/avatar/<?php echo $data['avatar']; ?> " class="img-responsive" height="100px" width="100px" alt=""> 
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
        <p class="font-weight-bold ">Secretary <span class="signature"> <img src="../assets/image/sign.png" height="50px"> </span></p>
      </div>
      
    </div>
  </div>
 </div>
<?php
}
?>
</body>
</html>
