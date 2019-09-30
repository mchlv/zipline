<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- css stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  <!-- font awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- bootstrap -->
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script> <!-- jquery -->

  <title>ZipLine Bitch</title>
</head>
<body>
  <div id="pageContainer">
  <!-- above the fold -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="mainNav">
            <ul class="nav">
              <li><a href="#">About</a></li>
              <li><a href="#">Benefits</a></li>
              <img src="logo.jpg" alt="logo">
              <li><a href="#">International</a></li>
              <li><a href="#">Our Team</a></li>
            </ul>
          </div>
          <div class="row">
            <div class="col-lg-6">
            <h2>Zipline</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat culpa repudiandae ea vero aliquid id. Laborum repellat aut nihil dolores sed quos ipsam iste, eveniet aliquam consequatur explicabo tempore expedita!</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of above the fold -->

  <!-- about -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>about</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim iusto, sequi labore velit alias fuga quos, non qui vero saepe aspernatur illo nesciunt laboriosam excepturi laudantium, porro inventore iure atque.</p>
        </div>
        <div class="col-lg-6">
          <img src="assets/photo.jpg" alt="image">
        </div>
      </div>
    </div> <!-- end about -->

    <!-- benefits  -->
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-12">
          <img src="assets/icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum</p>
        </div>
        <div class="col-lg-2 col-sm-12">
          <img src="assets/icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum</p>
        </div>
        <div class="col-lg-2 col-sm-12">
          <img src="assets/icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum</p>
        </div>
        <div class="col-lg-2 col-sm-12">
          <img src="assets/icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum</p>
        </div>
        <div class="col-lg-2 col-sm-12">
          <img src="assets/icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum</p>
        </div>
      </div>
    </div><!-- end benefits -->

    <!-- international applicants -->
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img src="icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum nostrum, accusamus.</p>
        </div>
        <div class="col-lg-4">
          <img src="icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum nostrum, accusamus.</p>
        </div>
        <div class="col-lg-4">
          <img src="icon.jpg" alt="icon">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum nostrum, accusamus.</p>
        </div>
      </div>
    </div> <!-- end international -->

    <!-- team -->
    <div class="container">
      <div class="row">
       <div class="col-lg-12">
       <!-- here will be a slider -->
        <div class="testimonialbox"> 
          <img src="team.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem aperiam, voluptas cumque dolorum debitis nihil ullam? Quisquam perferendis maxime beatae laudantium, deserunt natus, totam magni esse asperiores ut ratione?</p>
        </div>
       </div>
      </div>
    </div> <!-- end team -->

    <!-- application -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h2>Apply here!</h2>
          <?php
            if (isset($_GET["success"]))
            {
              ?>
              <p class="msg success">Thank you for your application!</p>
              <?php
            }
          ?>
          <div class="appForm">
            <form action="saveApp.php" method="post" enctype="multipart/form-data">
              <input type="text" name="firstname" id="first" placeholder="First Name">
              <input type="text" name="lastname" id="last" placeholder="Last Name">
              <input type="text" name="email" id="email" placeholder="Email Address">
          
          
              <select name="position" id="position">
                <option value="Zipline Guide">Zipline Guide</option>
                <option value="Aerial Park Rescue Guide">Aerial Park Rescue Guide</option>
                <option value="Kiosk Attendant">Kiosk Attendant</option>
              </select>

              
              <h3>Season Available</h3>
              <label>Summer</label>
              <input type="checkbox" name="arrSeason[]" value="Summer" id="season">
              <label>Fall</label>
              <input type="checkbox" name="arrSeason[]" value="Fall" id="season">
              <label>Winter</label>
              <input type="checkbox" name="arrSeason[]" value="Winter" id="season">
              <label>Spring</label>
              <input type="checkbox" name="arrSeason[]" value="Spring" id="season">
              
              <h3>Hours Available</h3>
              <label>Morning</label>
              <input type="checkbox" name="arrHours[]" value="Morning" id="hours">
              <label>Afternoon</label>
              <input type="checkbox" name="arrHours[]" value="Afternoon" id="hours">
              <label>Evening</label>
              <input type="checkbox" name="arrHours[]" value="Evening" id="hours">
              <label>Weekends Only</label>
              <input type="checkbox" name="arrHours[]" value="Weekend" id="hours">

            
              <!-- <img src="../assets/<?=['strImage']?>" width=100>    : code to show image that was uploaded ... use for admin side -->
              <input type="file" name="photo"> <br/>

              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div> <!-- end application -->

    <footer>

    </footer>

  </div> <!-- page container end -->



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>