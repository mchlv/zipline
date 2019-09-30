<!-- <?php
  if(!isset($_GET["success"]))
  {
    ?>
    <p class="successMsg">We don't have records of that acount. Please try again.</p>
    <?php
  }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form action="verifyLogin.php" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" value="Submit">
  </form>



  <h2>Register</h2>
  <form action="saveRegister.php" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" value="Submit">
  </form>
</body>
</html>