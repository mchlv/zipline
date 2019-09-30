<?php
Class Functions extends Database
{
  public static function insertData($sql)
  {
    $con = Database::con();
    mysqli_query($con, $sql); 
  } // inserting data into db with sql statement
  
  public static function getData($sql)
  {
    return Database::con()->query($sql);
  } // getting data from database to display using html

  public static function query(){
    $result = mysqli_query($this->con, $sql);
    return $result;
  } // initiating a sql query

  static function deleteData($table, $id){
    $con = Database::con();
    mysqli_query($con, "DELETE FROM $table WHERE id='".$id."'");
  }
  static function showTomorrowDate(){
    $time = mktime(0, 0, 0, date("m"), date("d")+1, date("Y")); //h, min, s, month
    return date('l jS \of F Y',$time)."<br>";
  }
  static function outputData($sql)
  {
    $data = array();
    $con = Database::con();
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $data[] = $row;
    }
    return $data;
  }

  
  static function showTableHeader($arrFields){
    ?>
    <div class="container">
      <div class="thead row">
      <?php
      $sort = !empty($_GET["sort"]) ? $_GET['sort']:'';
        foreach($arrFields as $fieldName){            
          $active = ($fieldName == $sort)?'active':'';
          ?>
          <div class="chead col-sm-3 col-md-3 col-lg-1 <?=$active?>">
            <a href="?sort=<?=$fieldName?>"><?=$fieldName?></a>
          </div>
          <?php 
        }
        ?>
          <div class="chead col-sm-3 col-md-3 col-lg-1">Delete</div>
        </div>
      </div>
    <?php
  }
  
  static function showData($sql, $arrFields){
    $result = self::outputData($sql);
    if(!empty($result)){
      foreach($result as $user){
      ?>
      <div class="trow col-sm-12 col-md-12 col-lg-12 row">
      <?php   
        foreach($user as $fieldName => $fieldValue){
          if($fieldName != 'id'){
            ?>
            <div class="info col-sm-3 col-md-3 col-lg-1">
              <?=($fieldName=='utcDatems')?gmdate('d M Y', $fieldValue):$fieldValue;?>
            </div>
            <?php 
          }
        }
        ?>
        <div class="del col-sm-3 col-md-3 col-lg-1">
            <a href="../admin/delete.php?id=<?=$user["id"]?>"><i class="far fa-trash-alt"></i></a>
        </div>
      </div>
      <?php
      }
    } else {
      echo '<h2>There are no applicants.</h2>';
    }
  }
}
?>