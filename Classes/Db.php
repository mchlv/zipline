<?php
Class Database
{
  var $connect;

  public function __construct($connect)
  {
    $this->con = $connect;
  }

  public static function con()
  {
    // $ini = parse_ini_file("../../config.ini");
    // $connect = mysqli_connect($ini["host"], $ini["user"], $ini["pass"], $ini["db"]); use when uploading to server

    $connect = mysqli_connect("localhost", "root", "", "zipline");
    return $connect;

    $oDatabase = new ConnectToDb($connect);
    return $oDatabase;
  }

 

  public static function getData($sql)
  {
    return ConnectToDb::con()->query($sql);
  }

  

}
?>