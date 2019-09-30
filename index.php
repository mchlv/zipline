<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

  <script src="js/thumbPreview.js"></script>
  <title>ZipTrip | ZipTrekking Adventures</title>
</head>
<body>


  <div id="pageContainer">


  <!-- above the fold -->
    <div class="container-fluid">
      <div class="row hero">
        <div class="col-lg-12 header">
          <div class="mainNav">
            <ul class="nav nav-pills">
              <img src="logo.jpg" alt="logo">
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Benefits</a></li>
              <li class="nav-item"><a class="nav-link" href="#">International</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Our Team</a></li>
            </ul>
          </div>

          <!-- hero text and image -->
          <div class="row">
            <div class="col-lg-5">
              <div class="heroText">
                <h1>Work for ZipTrip</h1>
                <p>Our dual-line, five-line circuit gives you an adrenaline-pumping tour across the peaks and canyons of Grouse and Dam Mountains.</p>
                <a href="#" class="btn btn-rounded mainBTN">Read More</a>
              </div>

              
            </div>

            <div class="col-lg-6">

              <img class="zipliner slide-in-right" src="assets/zipline.svg" alt="Zipline Guy Silhouette">
         
              <img class="zipline" src="assets/line.svg" alt="Zipline">
        
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
          <?php
            if (isset($_GET["success"]))
            {
              ?>
              <p class="msg success">Thank you for your application!</p>
              <?php
            }
          ?>

            <!-- application form-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Apply now</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">We're looking for the right person with the right attitude. Think you're a match. Let us know!</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="name" name="firstname" class="form-control" placeholder="First Name">
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="name" name="lastname" class="form-control" placeholder="Last Name">
                      </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                  <div class="col-md-12 col-lg-12">
                    <div class="md-form mb-0">
                      <input type="text" id="subject" name="email" class="form-control" placeholder="Email Address"><br>
                    </div>
                  </div>
                </div>



                    <!-- <label>Season Available</label>
                    <label>Summer</label><br>
                    <input type="checkbox" name="arrSeason[]" value="Summer" id="season">
                    <label>Fall</label><br>
                    <input type="checkbox" name="arrSeason[]" value="Fall" id="season">
                    <label>Winter</label>
                    <input type="checkbox" name="arrSeason[]" value="Winter" id="season">
                    <label>Spring</label>
                    <input type="checkbox" name="arrSeason[]" value="Spring" id="season">
                    </div>
                  </div> -->

             
                    <!-- <div class="md-form mb-0">
      -->

                   <!--Grid row-->
                   <div class="row">

                   <div class="col-md-3 col-lg-4 md-form mb-0">
                      <div class="form-check">
                        <label for="position">Position Preferred</label><br><br>
                        <select name="position" id="position">
                          <option value="" disabled>Choose a Position</option>
                          <option value="Zipline Guide">Zipline Guide</option>
                          <option value="Aerial Park Rescue Guide">Aerial Park Rescue Guide</option>
                          <option value="Kiosk Attendant">Kiosk Attendant</option>
                        </select>
                        </div>
                    </div>


                    <div class="col-lg-3">
                      <label for="arrSeason">Seasonal Availability</label>
                        <div class="form-check">
                            <input class="form-check-input" name="arrSeason[]" value="Summer" id="season" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Summer
                            </label><br>
                            <input class="form-check-input" name="arrSeason[]" value="Fall" id="season" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Fall
                            </label><br>
                            <input class="form-check-input" name="arrSeason[]" value="Winter" id="season" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Winter
                            </label><br>
                            <input class="form-check-input" name="arrSeason[]" value="Spring" id="season" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Spring
                            </label><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                      <label for="arrSeason">Shift Availability</label>
                      <div class="form-check">
                          <input class="form-check-input" name="arrHours[]" value="Morning" id="season" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Morning
                          </label><br>
                          <input class="form-check-input" name="arrHours[]" value="Afternoon"d="season" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Afternoon
                          </label><br>
                          <input class="form-check-input" name="arrHours[]" value="Evening" id="season" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Evening
                          </label><br>
                          <input class="form-check-input" name="arrHours[]" value="Weekend" id="season" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Weekends
                          </label><br>
                      </div>
                    </div>
                  </div> <!-- end of checkboxes -->

                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                        <label for="message">Upload A Photo of Yourself</label><br><br>
                        <input type="file" name="photo" onchange="readURL(this);"><br>
                        <img id="imgPrev" class="imgPrev" src="http://placehold.it/180" alt="Preview of Uploaded" />
                      </div>
                    </div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                      </div>
                    </div>
                  </div> -->
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
            <input type="submit" name="submit" class="btn elegant mainBTN" value="Apply">
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-2 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Victoria, BC Canada</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>778 698 4502</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>hello@ziptrip.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->


          <!-- <div class="appForm">
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