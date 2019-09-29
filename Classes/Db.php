<?php
Class ConnectToDB {
  var $connect;
  public function __construct($connect){
      $this->con = $connect;
  }
  public static function con() {
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
  public static function query(){
    $result = mysqli_query($this->con, $sql);
    return $result;
  }
}


?>


<!-- <?php
Class Database
{
  var $con;

  public function __construct($con)
  {
    $this->con = $con;
  }

  public static function con()
  {
    // $ini = parse_ini_file("../../config.ini");
    // $connect = mysqli_connect($ini["host"], $ini["user"], $ini["pass"], $ini["db"]); use when uploading to server

    $con = mysqli_connect("localhost", "root", "", "zipline");
    return $connect;

    $oDatabase = new Db($con);
    return $oDatabase;
  }

  public static function query(){
    $result = mysqli_query($this->con, $sql);
    return $result;
  }


}
?> -->