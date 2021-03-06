<?php
include('contactform.php')
?>

<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<h2>Register</h2>
  <div class="container">
  <form class="form" action="register.php" method="POST" enctype="multipart/form-data">
      <?php include('errors.php'); ?>
      <div class="form-group">
      
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Full Name">
      
    </div>
    
    <div class="form-group">
      
    <label for="name">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">    
      </div>
    
    <div class="form-group">
      <label for="branch">Branch:</label>

          <select id="branch" placeholder="Enter your branch" name="branch">
            
          <option>Select</option>
            <option value="Computer Sc. & Engg.">Computer Sc. & Engg.</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Elex & Tele. Engg.">Elex & Tele. Engg.</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Metallurgical Engineering">Metallurgical Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Mining Engineering">Mining Engineering</option>
            <option value="Bio Medical Engineering">Bio Medical Engineering</option>
            <option value="Bio Technology">Bio Technology</option>
            <option value="Chemical Engineering">Chemical Engineering</option>
            <option value="Architecture Engineering">Architecture Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
          </select>

    </div>    
     <div class="form-group" >
      <label for="passoutyear">Batch:</label>
      <input type="number" class="form-control" id="passoutyear" name="passoutyear" placeholder="Enter Year YYYY">
    </div>
    <div class="form-group">
                <label for="img">Select image of NGO owner:</label>
                <input type="file" name="avatar" id="avatar"  accept="image/*">
    </div>
  
    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>
  </div>


</body>
</html>

