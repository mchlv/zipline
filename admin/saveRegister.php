<?php
  include("../Classes/Db.php");
  include("../Classes/Functions.php");

  $con = Database::con();

  // $username = $_POST['username'];
  $cleanUser['username'] = mysqli_real_escape_string($con, $_POST['username']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


  $statement = $con->prepare("INSERT INTO users (
    strUsername,
    strPassword)
    VALUES (
      ?,
      ?
    )");

  $statement->bind_param("ss", $cleanUser['username'], $password);
  $statement->execute();

  Functions::insertData($sql);

  header("location: dashboard.php?success=registerSuccess");
?>

<!-- NOT WORKINGGG!!!!!!! move on and figure out later
      - not pushing data to the DB
      - function insertData is working on other pages
      - con() definitely working
 -->