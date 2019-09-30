<?php
Class Database
{
  var $con;

  public function __construct($con)
  {
    $this->con = $con;
  } // run connection automatically

  public static function con()
  {
    // $ini = parse_ini_file("../../config.ini");
    // $connect = mysqli_connect($ini["host"], $ini["user"], $ini["pass"], $ini["db"]); use when uploading to server

    $con = mysqli_connect("localhost", "root", "", "zipline");
    return $con;

    $oDatabase = new Database($con);
    return $oDatabase;
  } // connect to db using ini file for security
}
?>