<?php
Class Functions extends ConnectToDB
{

  public static function insertData($sql){
    $con = ConnectToDB::con();
    mysqli_query($con, $sql); 
  }

  public static function getData($sql)
  {
    return ConnectToDB::con()->query($sql);
  }

}

?>