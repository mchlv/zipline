<?php

include("Classes/Db.php");
include("Classes/Functions.php");

// $sql = "SELECT * FROM applicants WHERE strFirstName='".$_POST['firstname']."', strLastName='".$_POST['lastname']."', strEmail='".$_POST['email']."', strPosition='".$_POST['position']."'";

$con = Database::con();

if(isset($_POST['submit']))
{
      $seasonsarray = $_POST["arrSeason"];
      $newvalues = implode(" ", $seasonsarray);
      
      $oFunctions = new Functions();
      $Functions->insertCheckbox($newvalues);

}

print_r($_POST["arrSeason"]);


$statement = $con->prepare("INSERT INTO applicants (
      strFirstName,
      strLastName,
      strEmail
      )
    VALUES (
      '".$_POST['firstname']."',
      '".$_POST['lastname']."',
      '".$_POST['email']."')");

    $statement->bind_param("sss", $first, $last, $email);

    $first = ($_POST['firstname']);
    $last = ($_POST['lastname']);
    $email = ($_POST['email']);

    $statement->execute();


    Functions::insertData($sql);

    // header("location: index.php?success=savedApplication");
?>