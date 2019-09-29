<?php

include("Classes/Db.php");
include("Classes/Db.php");

// $sql = "SELECT * FROM applicants WHERE strFirstName='".$_POST['firstname']."', strLastName='".$_POST['lastname']."', strEmail='".$_POST['email']."', strPosition='".$_POST['position']."'";

$sql = "INSERT INTO applicants (
      strFirstName,
      strLastName,
      strEmail,
      strPosition,
      strImage
      )
    VALUES (
      '".$_POST['firstname']."',
      '".$_POST['lastname']."',
      '".$_POST['email']."',
      '".$_POST['position']."'),
      '".$_POST['strImage']."')";
    echo $sql;

    Database::insertData($sql);

    // header("location: index.php?success=savedApplication");
?>