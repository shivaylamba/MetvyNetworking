<?php 
include ("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/metvyweb.png">
  <title>
    Metvy Networking
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <!-- <link href="./assets/css/style-new.css" rel="stylesheet" /> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style>

@media screen and (max-width: 768px) {
  .page-header .content-center .row {
    text-align: center !important;
  }
  .content-center brand{
  width : 100%;

  }
  .page-header .content-center img {
    height: 25%;
    margin-top: 0px;
    width:50%;
  }
}
</style>
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        
          <!-- <span>BLK•</span> Design System -->
          <img src="./assets/img/metvy.png" width="8%" height="3%">
          <span style="font-size: 2rem; color: white">METVY</span> 
        
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                Metvy
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
            
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fa fa-cogs d-lg-none d-xl-none"></i> List of Contents
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="#1" class="dropdown-item">
                  <i class="tim-icons icon-paper"></i> Features
                </a>
                <a href="#2" class="dropdown-item">
                  <i class="tim-icons icon-bullet-list-67"></i>Subscribe
                </a>
                <a href="#3" class="dropdown-item">
                  <i class="tim-icons icon-image-02"></i>App
                </a>
                <a href="#4" class="dropdown-item">
                  <i class="tim-icons icon-single-02"></i>Our Team
                </a>
                <a href="#5" class="dropdown-item">
                  <i class="tim-icons icon-single-02"></i>Contact Us
                </a>
              </div>
            </li>
           
          </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header header-filter">
      <!-- <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div> -->
   
      <div class="container">
        
          <div id="particles-js">
        <div class="content-center brand">
                    <h2 class="h2-seo"style="margin-top: 15%;margin-bottom : 5%"><mark style="color : white; background-color : black">#MetAtMetvy</mark></h2>

          <img src="./assets/img/metvy.png" width="25%" height="3%">
          <h3 style="color : white">Metvy is an intuitive networking platform that helps you connect face to face with the kind of people you’re looking for. Anytime, Anywhere.</h3>
        </div>

      </div>

        
      </div>
      
    </div>
   
    <div class="container" id="1">
        <div>
          <section class="section-features">
          
                <ul class="features">
                    <li class="blue">
                        <div class="illustration timer"></div>
                        <div class="content">
                            <h2 class="heading">Intuitive Networking</h2>
                            <p class="text">We understand your needs and help you connect with right kind of people.</p>
                        </div>
                    </li>
                    <li class="blue">
                        <div class="illustration location"></div>
                        <div class="content">
                            <h2 class="heading">HyperLocal</h2>
                            <p class="text">Find suitable networks around you, wherever you are.</p>
                        </div>
                    </li>
                    <li class="blue">
                        <div class="illustration bag"></div>
                        <div class="content">
                            <h2 class="heading">Face to Face</h2>
                            <p class="text">Meetup with your networks for defining interactions.</p>
                        </div>
                    </li>
                    <li class="blue">
                        <div class="illustration gift"></div>
                        <div class="content">
                            <h2 class="heading">Exclusive</h2>
                            <p class="text">Become a part of an exclusive community and live the premium experience.</p>
                        </div>
                    </li>
                </ul>
               
            </div>
        </section>
    
        </div>
  
      </div>    
    <div class="container" id="2">
        <form name="form1" class="form-horizontal" method="POST" enctype="multipart/form-data">
      <div class="comp get-link-or-dl">
       
          <?php
                    if(isset($_POST['submit'])){
                      $email = $_POST['email'];
                                $query = "INSERT INTO `email` (`id`, `email`) VALUES (NULL, '$email')";
                                if(mysqli_query($link,$query)){
                                  $msg = "Email Submitted";
                                  //$category = "";
                                } else {
                                  $error_msg = "Failed to Add";
                                  //print_r($errors);
                                }
                              }
                              
                        ?>
          <div class="get-link">
              <label class="label">Enter your email to subscribe</label>
              <div class="wrap">
                  <p class="code">+91</p>
                 <button class ="btn-get-link  sendNum" type="submit" name="submit"  value="submit">Submit</button>
              </div>
               <input class="email" type="text" name="email" placeholder="Email Address" maxlength="30">
          </div>
         
      </div>
      </form>
     <div>
         
<div class="container" id="3">

    <section class="section-get-app-2">
        <img class="screenshots" src="./assets/img/iphone.png">
        <div class="container">
            <div class="col-grid">
                <!-- <h4 class="heading">Available Soon!<br></h4> -->
               <!-- <p class="text">The better way to get things done,</p> -->
               <!-- <h5 class="imp-text">On PlayStore And AppStore!!</h5> -->
               <img src="./assets/img/google.jpeg" width="75%" height="30%" style="float:left;">
               <img src="./assets/img/apple.jpeg" width="75%" height="30%" style="float:left;">

        </div>
    </section>
    








</div>
      <center>
          <h1 class="teamheading">The Team!</h1>
      <section class="our-team-section">
        <div class="container" id="4">
            <div >
<!-- 
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="our-team">
                        <div class="pic">
                            <img src="./assets/img/shaw.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Shawrya Mehrotra
                            </h3>
                            <span class="post">Founder and CEO</span>
                        </div>
                       
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="our-team">
                        <div class="pic">
                            <img src="./assets/img/raj.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Rajan Luthra 
                            </h3>
                            <span class="post">Co-Founder and COO</span>
                        </div>
                       
                    </div>
                </div> -->
                <div class="col-md-6 col-sm-6">
                  <div class="our-team">
                      <img src="./assets/img/shaw.jpeg">
                      <div class="team-content">
                          
                          <h3 class="name">Shawrya Mehrotra</h3>
                          <span class="post">Founder and CEO</span>
                      </div>
                  </div>
              </div>
      
              <div class="col-md-6 col-sm-6">
                  <div class="our-team">
                      <img src="./assets/img/raj.jpeg">
                    <div class="team-content">
                          <h3 class="name">Rajan Luthra</h3>
                          <span class="post">Co-Founder and COO</span>
                      </div>
                  </div>
              </div>
               
            </div>
        </div>

    </section>

</center>
     </div>
  </div>
  
    <footer class="footer">
      <div class="container" id="5">
        <div class="row">
          <div class="col-md-3">
            <h1 class="title">Metvy</h1>
          </div>
         
          <div class="col-md-3">
            <h3 class="title">Follow us:</h3>
            <div class="btn-wrapper profile">
              <a target="_blank" href="https://www.linkedin.com/company/metvynetworking" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                <i class="fab fa-linkedin"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/metvyapp" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
             
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>



<script type="text/javascript" src="./assets/js/app.js">  </script>
      <script type="text/javascript" src="./assets/js/particles.min.js">  </script>
      <script>
          particlesJS("particles-js", {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#eee"
          },
          "shape": {
            "type": "triangle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 3,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#eee",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": false,
              "mode": "grab"
            },
            "onclick": {
              "enable": false,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 140,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      });
          
          </script>

</body>

</html>