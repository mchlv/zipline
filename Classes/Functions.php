<?php
Class Functions extends Database
{
  public static function insertData($sql)
  {
    $con = Database::con();
    mysqli_query($con, $sql); 
  }
  
  public static function getData($sql)
  {
    return Database::con()->query($sql);
  }
}
?>