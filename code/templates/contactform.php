<?php 
  //creating connection to database


$con=mysqli_connect("localhost","root","","college_idcard") or die(mysqli_error());

  //check whether submit button is pressed or not
$errors = array(); 
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables

              $Name1 = $con->real_escape_string($_POST['name']);
              $Branch = $con->real_escape_string($_POST['branch']);
              
              $Name="";
              $Name=$Name.strtoupper($Name1[0]);
                
              for($i=1;$i<strlen($Name1);$i=$i+1)
              {
                if($Name1[$i]==" " && $i+1<strlen($Name1))
                {
                  
                  $Name=$Name.$Name1[$i];
                  $Name=$Name.strtoupper($Name1[$i+1]);
                  $i=$i+1;
                }
                else
                {
                  $Name=$Name.strtolower($Name1[$i]); 
                }
              }
              $Profile = $_FILES['avatar'];
              $PassoutYear = $con->real_escape_string($_POST['passoutyear']);
              
              $Email = $con->real_escape_string($_POST['email']);

              if (empty($Name)) { array_push($errors, "Name is required"); }
              if ($Branch=='Select') { array_push($errors, "Branch is required"); }
              if (empty($PassoutYear)) { array_push($errors, "Batch is required"); }
              
              if (empty($Email)) { array_push($errors, "Email is required"); }

              
              $isPresent = "SELECT * FROM alumni_information__responses_ where email='$Email'";
              
              $result = mysqli_query($con, $isPresent);
                      
                        while ($row = $result->fetch_assoc()) {
                            if($Email==$row['email'])
                            {
                              { array_push($errors, "Email already exist"); }
                            }
                      }
                      
              if (count($errors) == 0) 
              {  
                    
                      $bid="";
                      if($Branch=='Computer Sc. & Engg.')
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

                      $user_check_query = "SELECT * FROM alumni_information__responses_ where branch='$Branch' and passoutyear='$PassoutYear' ";
                      $mx=0;
                     
                    $Profile = $_FILES['avatar'];

                        $p_file_name = $Profile['name'];
                        $p_file_type = $Profile['type'];
                        $p_file_size = $Profile['size'];
                        $p_file_tmp_loc = $Profile['tmp_name'];
                        $p_file_store_location = "../assets/avatar/".$UID. ' ' .$p_file_name; 
                        move_uploaded_file($p_file_tmp_loc, $p_file_store_location);

                        $profile_pic_name =$UID. ' ' .$p_file_name;
                        
                        if (empty($p_file_name)) { $profile_pic_name= 'prof1.jpg';}

                        //query to insert the variable data into the database
                      $sql="INSERT INTO alumni_information__responses_ (name,branch,passoutyear,avatar,email) VALUES ('".$Name."','".$Branch."','".$PassoutYear."','".$profile_pic_name."','".$Email."')";
                          
                      if(!$result = $con->query($sql)){
                          die('Error occured [' . $con->error . ']');
                        }
                        else{
                          echo '
                          
                             <script>
                                        alert("Your Response have been submited")
                                        
                                        if ( window.history.replaceState ) {
                                          window.history.replaceState( null, null, window.location.href );
                                        }
                             </script>
                          
                          ';
                         
                        }

            }

            
            

}
?>

