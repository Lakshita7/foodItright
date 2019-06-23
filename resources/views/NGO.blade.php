<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FoodItRight</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.PNG" rel="icon">
  

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/home.css" rel="stylesheet">
  <link href="css/ngo.css" rel="stylesheet">

 
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="home">FOOD IT RIGHT</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
       
    </div>
  </nav>
    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image:url(img/bg8.jpg)">
                
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
            </div>  
          </div>
        </div>
      </div>



      <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-shadow-full">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-sm-6 col-md-9">
                            <div class="about-img">
                              <img src="img/NGO.jpg" class="img-fluid rounded b-shadow-a" alt="">
                            
                            </div>
                          </div>
                          <div class="col-sm-6 col-md-7">
                            
                          </div>
                        </div>
                       
                      </div>
                      <div class="col-md-6">
                        <div class="about-me pt-4 pt-md-0">
                          <div class="title-box-2">
                            <h5 class="title-left">
                             Help Bring Smiles to other Beautiful Faces!
                            </h5>
                          </div>
                          <p class="lead">
                               We appreciate your spirit and welcome you to help us achieve our mission of removing hunger and preventing food wastage. You are required to sign up on our platform, to recieve updates regarding latest pickup of food available near your location. Get it scheduled, and you are good to go!
                               Thank you! Keep serving the hunger! 
                               The world need more heroes like you.
                          </p>
                          <p>
                                    
                        



  <form class="modal-content" action="/NGO1" method = "POST">
  {{ csrf_field() }}

    <div class="container">
      <h1>Sign Up</h1>
      <hr>
    
      <label for="NGO Name"><b>NGOName</b></label>
      <input type="text" placeholder="Enter the name of your NGO" name="NGOName" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="NGO Address"><b>Address</b></label>
      <input type="text" placeholder="Enter the address of your NGO" name="NGOAddress" required>

      <label for="NGO City"><b>City</b></label>
      <input type="text" placeholder="Enter the city in which NGO located" name="NGOCity" required>

      <label for="NGO SPOC"><b>SPOC</b></label>
      <input type="text" placeholder="Enter the name of the person of contact" name="NGOspoc" required>

      <label for="NGO Number"><b>Contact Number</b></label>
      <input type="tel" placeholder="Enter the contact number of your NGO" name="NGOumber" >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

    
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
     
     
     <button><a href="dashboard" class="signupbtn" type="submit">SIGN UP</a></button>
        
        
      </div>
    </div>
  </form>

=
                          </p>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



          
    
    