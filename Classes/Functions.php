<?php
Class Functions extends Database
{


  public static function insertData($sql)
  {
    $con = Database::con();
    mysqli_query($con, $sql); 
  } // inserting data into db with sql statement, uncessary because prepare statement 
  
  public static function getData($sql)
  {
    return Database::con()->query($sql);
  } // getting data from database to display using html

  public static function query(){
    $result = mysqli_query($this->con, $sql);
    return $result;
  } // initiating a sql query


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

  static function deleteData($table, $id){
    $con = Database::con();
    mysqli_query($con, "DELETE FROM $table WHERE id='".$id."'");
  }

  static function showData($sql, $arrFields){
    $result = self::outputData($sql);
    $sort = !empty($_GET["sort"]) ? $_GET['sort']:'';    
    if(!empty($result)){
      foreach($result as $applicant){
      ?>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$applicant['id'];?>">
            <?php   
              foreach($applicant as $fieldName => $fieldValue){

                    $fullname = $applicant['strFirstName']." ".$applicant['strLastName'];

                    if($fieldName == 'id')
                    {
                ?>

                <div class="info row">
                  <div class="appName col-lg-10">
                    <h2><?=$fullname;?></h2></a>    
                  </div>
                  <div class="col-lg-2 icons">
                    <a href="../admin/delete.php?id=<?=$applicant["id"]?>"><i class="far fa-trash-alt"></i></a> 
                    <a href="mailto:"><i class="far fa-envelope"></i></a> 
                  </div>
                </div> <!-- end info row -->
            </div>
          </div>
        </div>
        <?php

        $con = Database::con();
        $results = mysqli_query($con, 
        "SELECT * FROM applicants WHERE id=$applicant[id]");
        
          while($arrApplicants = mysqli_fetch_assoc($results)){
        ?>


      <div id="info" class="col-lg-12">
        <div id="collapse<?=$applicant['id'];?>" class="panel-collapse collapse in">          <!-- when name is clicked, find id and display the data for that id -->
          <!-- hidden table of details -->
          <table width="100%">
            <thead>
              <tr>
                  <th class="table-head">Application ID</th>
                  <th class="table-head">First Name</th>
                  <th class="table-head">Last Name</th>
                  <th class="table-head">Email Address</th>
                  <th class="table-head">Position</th>
                  <th class="table-head">Season Available</th>
                  <th class="table-head">Shifts Available</th>
              </tr>
            </thead>
            <tr>
              <td><?=$arrApplicants['id']?></td>
              <td><?=$arrApplicants['strFirstName']?></td>
              <td><?=$arrApplicants['strLastName']?></td>
              <td><?=$arrApplicants['strEmail']?></td>
              <td><?=$arrApplicants['strPosition']?></td>
              <td><?=$arrApplicants['arrSeasons']?></td>
              <td><?=$arrApplicants['arrHours']?></td>
            </tr>
          </table>
        </div>
      </div>
          <?php  
          } // end of if statement   
        } // end of for each applicant as key value 1
      } // end of if fieldname is strFirstName      
    } // end of for each applicant as key value 2
  } // end of foreach result as applicant
 // end of if statement determining if there are applicants
else {
    echo '<h2>There are no applicants.</h2>';
  } // end of else statement
} // end of showData function 
  
  
  public static function sortData()
  {

    $con = Database::con();
    $sql = "SELECT * FROM applicants ORDER BY $orderByField";
    $result = mysqli_query($sql);

    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
      ?>

      <div>
        <select name="sort" id="">
          <option value="">Name</option>
          <option value="">Position</option>
        </select>
      </div>
  <?php
    }

    // sort stuff
    $orderByField = (isset($_GET['orderByField'])) ? $_GET['orderByField'] : "strFirstName";

    //defining varaiable
    $strNameSorted = ($orderByField == "strFirstName")?"sorted":"";
  }

  
}
?>