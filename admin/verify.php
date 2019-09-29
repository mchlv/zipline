<?php

include("../Classes/Db.php");

$con = mysqli_connect("localhost", "root", "", "zipline");

$sql = "SELECT * FROM users WHERE strUsername='".$_POST["username"]."'";

$results = mysqli_query($con,$sql);

$user = mysqli_fetch_assoc($results);

if(password_verify($_POST["password"], $user["strPassword"]))
{
  echo "you aight. come on in";
} else
{
  echo "watch out lil bitch. we don't know you";
}



?>

