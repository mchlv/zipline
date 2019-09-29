<?php
include("Classes/Db.php");

if(isset($_POST['submit']))
{
  if($_POST['strUsername'] !== '')
  {
    $con = Db::con();
    $clean = mysqli_real_escape_string($con,$_POST['strUsername']);
    (clear)? $validUsername = true: $validUsername = false;
  }
}



?>