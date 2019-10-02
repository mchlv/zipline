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

  <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- css stylesheet -->
  <!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

  <!-- bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

  <!-- jquery -->
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script> 

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Montserrat:400,900&display=swap" rel="stylesheet">
  <!-- font-family: 'Montserrat', sans-serif;
      font-family: 'Quicksand', sans-serif; -->
</head>
<body>

<div class="container-fluid">
    <div class="row">
      <div class="loginWrapper test col-lg-12">
      <div class="loginBox">
        <div class="row">
        <div class="loginSideBar col-lg-6 col-sm-12">
          <article>
            <div class="sbHead">
          
              <h1>Welcome</h1>
            </div>
            <ul>
              <li><i class="fas fa-business-time"></i> Save time with our simple management system</li>
              <li><i class="fas fa-copy"></i>View applicants with ease</li>
              <li><i class="fas fa-drafting-compass"></i>Simple interface allows for ease of use</li>
            </ul>
            </article>
          </div>
          <div class="login col-lg-6 col-sm-12">
            <article>
              <h1>Login</h1>
              <p>Login to view your applicants</p>

                <form action="verifyLogin.php" method="post">
                  <div class="form-group">
      
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" name="username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group form-check">
                  </div>
                  <input type="submit" value="Login" class="btn elegant black">
                </form>
              </form>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container">
  <div class="row">
    <div class="col-lg-6">
    <h2>Register</h2>
    <form action="saveRegister.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-primary"></form>

    </div>
  </div> -->
</div>


</body>
</html>