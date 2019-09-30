<?php
include("../Classes/Db.php");
include("../Classes/Functions.php");
Functions::deleteData("applicants", $_GET["id"]);
header("location: dashboard.php");
?>