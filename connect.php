<?php

Class ConnectToDB
{
  var $connect;


  public static function con()
  {
    // $ini = parse_ini_file("../../config.ini");
    // $connect = mysqli_connect($ini["host"], $ini["user"], $ini["pass"], $ini["db"]); use when uploading to server

    $connect = mysqli_connect("localhost", "root", "", "zipline");
    return $connect;

    $oDb = new ConnectToDB($connect);
    return $oDb;

    if($con->connect_error)
    {
      die("Connection failed: " . $con->connect_error);
    } else
    {
      echo "Connected Successfully!";
    }

  }
}

?>