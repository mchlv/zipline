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

  static function showData($sql, $arrFields){
    $result = self::outputData($sql);
    $sort = !empty($_GET["sort"]) ? $_GET['sort']:'';
    if(!empty($result)){
      foreach($result as $applicant){
      ?>

      <div class="panel-group container" id="accordion">
        <div class="panel panel-default row">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$applicant['id'];?>">
         
          <?php   
            foreach($applicant as $fieldName => $fieldValue){
              if($fieldName == 'strFirstName')
              {
          ?>

          
          <div class="info">
            <?=$fieldValue;?></div>
          </h4></a> <a href="../admin/delete.php?id=<?=$applicant["id"]?>"><i class="far fa-trash-alt"></i></a> 
            <a href="mailto:"><i class="far fa-envelope"></i></a> 
          </div>
      </div>
    
    
            <?php
              foreach($applicant as $fieldName => $fieldValue){
                if($fieldName != 'id')
            {?>

            <div id="collapse<?=$applicant['id'];?>" class="panel-collapse collapse in">
    
                
            <table>
              <div class="panel-body th"><b><?=$fieldName;?></b>
              <div class="td"></div><?=$fieldValue;?>
            </table>
            </div>
            </div>

              <?php
                      
                  }
                }

                  ?>
            <?php 
          }
        }
        ?>
       
      </div>
      <?php
      }
    } else {
      echo '<h2>There are no applicants.</h2>';
    }
  }

  public static function sortData()
  {
    // sort stuff
    $orderByField = (isset($_GET['orderByField'])) ? $_GET['orderByField'] : "strFirstName";
    //defining varaiable
    $strNameSorted = ($orderByField == "strFirstName")?"sorted":"";
  }
}
?>