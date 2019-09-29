<?php

$con = mysqli_connect("localhost", "root", "", "firstcms");

$sql  = "SELECT * FROM users WHERE strUserName='".mysqli_real_escape_string($_POST['username'])."'";

echo $sql;

?>