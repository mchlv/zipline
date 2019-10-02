<?php
  include("../Classes/Db.php");
  include("../Classes/Functions.php");

  $con = Database::con();

  $user = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $sql = "SELECT * FROM users WHERE strUsername='".$_POST["username"]."'";
  $results = Functions::con()->query($sql);
  $user = mysqli_fetch_assoc($results);

  if(password_verify($_POST["password"], $user["strPassword"]))
  {
    header("location: dashboard.php?success=true");
  } else
  {
    header("location: index.php?error=true");
  }
?>