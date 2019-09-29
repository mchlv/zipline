<?php

include("Classes/Db.php");
include("Classes/Functions.php");

// $sql = "SELECT * FROM applicants WHERE strFirstName='".$_POST['firstname']."', strLastName='".$_POST['lastname']."', strEmail='".$_POST['email']."', strPosition='".$_POST['position']."'";

$con = Database::con();

$seasonarr = $_POST["arrSeason"];
$newvalues = implode(",", $seasonarr);

$statement = $con->prepare("INSERT INTO applicants (
      strFirstName,
      strLastName,
      strEmail,
      nSeasonID
      )
    VALUES (
      '".$_POST['firstname']."',
      '".$_POST['lastname']."',
      '".$_POST['email']."',
      '$newvalues')");

    $statement->bind_param("ssss", $first, $last, $email, $newvalues);

    $first = ($_POST['firstname']);
    $last = ($_POST['lastname']);
    $email = ($_POST['email']);

    $statement->execute();


    Functions::insertData($sql);

    // header("location: index.php?success=savedApplication");
?>