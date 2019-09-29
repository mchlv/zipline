<?php
Class Functions extends Database
{
  public static function insertData($sql){
    $con = Database::con();
    mysqli_query($con, $sql); 
  }
  
  public static function getData($sql)
  {
    return Database::con()->query($sql);
  }

  public static function insertCheckbox($value)
  {
    $con = Database::con();
    $sql = "INSERT INTO applicants (nSeasonID) VALUES ('$value')";
    $result = $this->query($sql) or die($this->error);
  }
}
?>