<?php

Class Checkbox extends Database
{
  public static function insertCheckbox($value)
    {
      $con = Database::con();
      
      $sql = "INSERT INTO applicants (nSeasonID) VALUES ('$value')";
      $result = $this->query($sql);
      
      if($result)
      {
        return "<h2>updated</h2>";
      }
      else 
      {
        return "<h2>not updated</h2>";
      }
    }
}

?>