<?php
include("../Classes/Db.php");
include("../Classes/Functions.php");
if (isset($_GET["success"]))
{
  ?>
  <p class="alert alert-primary" role="alert">Hey, welcome back!</p>
  <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zipline - Administrator</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!-- font awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- bootstrap -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> <!-- jquery -->

<script src="js/filter.js"></script>
  
  <link rel="stylesheet" href="css/main.css"> <!-- compiled css -->
</head>
<body>
  <div class="mainContainer">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-2 col-sm-1">
          <div class="sideBar">
          <img src="../assets/logo.svg" alt="" height="70" width="70">
          <br><br><br>
            <p>There are</p>
            <h2>2</h2>
            <p>Applicants</p>
            <br>
            <select name="filter" id="filter">
              <option value="" disabled selected>Filter by</option>
              <option value="strName" class="filterName">Name</option>
              <option value="Position" class="filterPosition">Position</option>
            </select>
            <br> <br> <br> <br><br> <br><br> <br><br> <br>

            <?php

              $con = Database::con();
            
                $orderByField = (isset($_GET['orderByField'])) ? $_GET['orderByField'] : "strName"; // we will 

                $strNameSorted = ($orderByField == "strName")?"sorted":"";
                $strEmailSorted = ($orderByField == "strEmail")?"sorted":"";
              
              


            ?>

            
            <a href="logout.php">Logout</a>
          </div>
        </div>



       
          <div class="displayApplicant col-lg-8 col-md-12 col-sm-12">
          <h1>Applicants</h1>


                <?php
                  $arrFields = array(
                    "strFirstName", 
                    "strLastName",
                    "strEmail",
                    "strPosition",
                    "arrSeason",
                    "arrHours",
                    "strImage"
                  );
            
                  $sql  = "SELECT
                  applicants.id,
                  applicants.strFirstName,
                  applicants.strLastName,
                  applicants.strEmail,
                  applicants.strPosition,
                  applicants.arrSeasons,
                  applicants.arrHours,
                  applicants.strImage
                  FROM applicants";

                  Functions::showData($sql, $arrFields);
                ?>

          <nav aria-label="Page navigation" class="pager">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
       
        </div>


        </div>
      </div> <!-- end of main row -->
  </div> <!-- end of main container -->

  

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <!-- bootstrap -->
</body>
</html>