<?php
  include("Classes/Db.php");
  include("Classes/Functions.php");

  $con = Database::con();

  $seasons = implode(",", $_POST['arrSeason']);
  $hours = implode(",", $_POST['arrHours']);
  $first = $_POST['firstname'];
  $last = $_POST['lastname'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $photo = $_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'], "assets/".$photo);
  // $resume = $_FILES['resume']['name'];
  // move_uploaded_file($_FILES['resume']['tmp_name'], "assets/".$resume);
  

  $statement = $con->prepare("INSERT INTO applicants (
        strFirstName,
        strLastName,
        strEmail,
        strPosition,
        arrSeasons,
        arrHours,
        strImage
        )
      VALUES (
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?)");

  $statement->bind_param("sssssss", $first, $last, $email, $position, $seasons, $hours, $photo);
  $statement->execute();


  // Functions::insertData($sql);

  header("location: thanksApp.php");
?>