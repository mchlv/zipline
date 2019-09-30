<?php
  include("Classes/Db.php");
  include("Classes/Functions.php");

  // $sql = "SELECT * FROM applicants WHERE strFirstName='".$_POST['firstname']."', strLastName='".$_POST['lastname']."', strEmail='".$_POST['email']."', strPosition='".$_POST['position']."'";

  $con = Database::con();

  $newvalues = implode(",", $_POST['arrSeason']);
  $first = $_POST['firstname'];
  $last = $_POST['lastname'];
  $email = $_POST['email'];

  $statement = $con->prepare("INSERT INTO applicants (
        strFirstName,
        strLastName,
        strEmail,
        arrSeasons
        )
      VALUES (
        ?,
        ?,
        ?,
        ?)");

  $statement->bind_param("ssss", $first, $last, $email, $newvalues);
  $statement->execute();


  Functions::insertData($sql);

  header("location: index.php?success=savedApplication");
?>