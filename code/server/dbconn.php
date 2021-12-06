<?php

$db = mysqli_connect("localhost","root","","college_id");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>