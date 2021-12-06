<?php 
  //creating connection to database

$con=mysqli_connect("localhost","root","","college_id") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
    $Name = $con->real_escape_string($_POST['name']);
    $Branch = $con->real_escape_string($_POST['branch']);
    $Profile = $_FILES['avatar'];

      $bid="";

      if($Branch=='Computer Science and Engineering')
      {  
        $bid="101"; 
      }
      else if($Branch=='Information Technology')
      {
        $bid="102"; 
      }
      else if($Branch=='Elex & Tele. Engg.')
      {
        $bid="103"; 
      }
      else if($Branch=='Electrical Engineering')
      {
        $bid="104"; 
      }
      else if($Branch=='Mechanical Engineering')
      {
        $bid="105"; 
      }
      
      else if($Branch=='Civil Engineering')
      {
        $bid="106"; 
      }
      else if($Branch=='Mining Engineering')
      {
        $bid="107"; 
      }
      else if($Branch=='Metallurgical Engineering')
      {
        $bid="108"; 
      }
      else if($Branch=='Bio Medical Engineering')
      {
        $bid="109"; 
      }
      else if($Branch=='Bio Technology')
      {
        $bid="110"; 
      }
      else if($Branch=='Chemical Engineering')
      {
        $bid="111"; 
      }
      else if($Branch=='Architecture Ebgineering')
      {
        $bid="112"; 
      }

      $PassoutYear = $con->real_escape_string($_POST['passoutyear']);
      $user_check_query = "SELECT * FROM users where branch='$Branch' and passoutyear='$PassoutYear' ";
      $mx=0;
      $result = mysqli_query($con, $user_check_query);
      
      while ($row = $result->fetch_assoc()) {
          if($mx<$row['uid'])
          $mx=$row['uid'];
    }

    if($mx==0)
    {
      $uuid="101";
      $UID =$PassoutYear. $bid . $uuid;
    }
    else
    {
      $uuid = substr($mx, -3);
      $uuid=$uuid+1;
      
      $UID =$PassoutYear. $bid . $uuid;
    }

        $p_file_name = $Profile['name'];
        $p_file_type = $Profile['type'];
        $p_file_size = $Profile['size'];
       
        $p_file_tmp_loc = $Profile['tmp_name'];
        $p_file_store_location = "../assets/avatar/".$UID. ' ' .$p_file_name; 
        move_uploaded_file($p_file_tmp_loc, $p_file_store_location);

        $profile_pic_name =$UID. ' ' .$p_file_name;
        
        if (empty($p_file_name)) { $profile_pic_name= 'prof1.jpg';}







        //query to insert the variable data into the database
      $sql="INSERT INTO users (uid,name,branch,passoutyear,avatar) VALUES ('".$UID."','".$Name."','".$Branch."','".$PassoutYear."','".$profile_pic_name."')";
	        
      if(!$result = $con->query($sql)){
          die('Error occured [' . $con->error . ']');
        }
  }
  else
      echo "Thank you! We will get in touch with you soon";

?>