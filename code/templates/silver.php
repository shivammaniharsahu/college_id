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
</head>
<body>
 
<div class="row">


    <?php

            include "../server/dbconn.php"; // Using database connection file here

       $records = mysqli_query($db,"select * from alumni_information__responses_"); // fetch data from database
         $id=1;
        while($data = mysqli_fetch_array($records))
        {
            ?>  
              <?php 
                if($id%2==0)
                  {
                    echo '<div class="col-md-6" style="margin-left:-15px">';
                  }
                  else
                  {
                    echo '<div class="col-md-6" >'; 
                        
                  }
                  $id=$id+1;
              ?>

  <div class="card mb-4 silver ml-1">
    <div class="card-header row ">
      <div class="left text-left ">
        <img src="../assets/image/gec_logo.png" height="75px">
      </div>
      <div class="middle text-center ml-1 mr-1  font-weight-bolder">
        <p style="font-size:18px; " >ALUMNI ASSOCIATION OF GECNIT RAIPUR</p>
        <p  style="font-size:15px;">NATIONAL INSTITUTE OF TECHNOLOGY RAIPUR<br>
        </p>
        <p  style="font-size:14px;">        
               +91 0771 2990317, secretary@gecnitrralumni.org
                <br>
                www.gecnitrralumni.org
        </p>
       
      </div>
      <div class="right text-right "  >

      <?php
            if($data['passoutyear']==1996)
                echo ' <img src="../assets/image/nitrr_logo.png" height="75px" >';
            else
                echo ' <img src="../assets/image/nitrr_logo1.png" height="75px" >';
            
        ?>
      </div>
    </div>
    <div class="card-body row">
      <!-- <img src="sketchnitrr.jpg"" class="img-responsive"> -->
   
      <div class="user-img" >
      <img src="<?php echo $data['avatar']; ?>" class="img-responsive" height="110px" width="100px" alt=""> 
      
      </div>
      <div class="user-details ml-3">
      <table>
            <tr>
              <td><p >Name</td><td>  <span ><?php echo $data['name']; ?></span></p></td>
           </tr>
           <tr>
              <td><p >Batch</td><td>  <span><?php echo $data['passoutyear']; ?></span></p></td>
           </tr>
           <tr>
              <td><p >Branch</td><td>  <span><?php echo $data['branch']; ?></span></p></td>
           </tr>
           
        </table>
      </div>
    </div> 
    <div class="card-footer row">
      <div class="col-md-12">
        <p class="font-weight-bold" style="font-size:22px">SILVER JUBILEE REUNION - <span class="passoutyear"><?php echo date("Y"); ?></span></p>
      </div>
      
    </div>
  </div>
</div>

<?php
}
?>
</body>
</html>
