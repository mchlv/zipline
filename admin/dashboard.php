<?php
// include("verifyLogin.php"); //  starts session once logged in
include("../Classes/Db.php");
include("../Classes/Functions.php");
if (isset($_GET["success"]))
{
  ?>
  <p class="successMsg alert alert-primary" role="alert">Hey, welcome back!</p>
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

  
  <link rel="stylesheet" href="../css/main.css"> <!-- compiled css -->
</head>
<body class="dash">
  <div class="mainContainer">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3">
          <div class="sideBar">
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            <p>details</p>
            
          </div>
        </div>

        <div class="col-lg-9 appBox">
          <div class="appDetails">
          
            <div class="row">

            <div class="col-lg-12">
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


                if(!isset($_POST['sort'])){
                  $sql  = "SELECT * FROM applicants";
                }
              // }else{
              //   $sortTable = ($_GET['sort'])?$_GET['sort']:'strEmail';
              //   $sql  = "SELECT * FROM applicants ORDER BY ".$sortTable;
              // }

              
              Functions::showData($sql, $arrFields);
            ?>

           
            </div>
          </div>
        </div>
      </div>

        </div>
      </div> <!-- end of main row -->
  </div> <!-- end of main container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <!-- bootstrap -->
</body>
</html>