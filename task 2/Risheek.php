<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Risheek - Personal Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/component.css" rel="stylesheet">
  <link href="css/circle.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/skins/yellow.css" rel="stylesheet">
  <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css">
  <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css">
  <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css">
  <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css">
  <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css">
  <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css">
  <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css">
  <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css">
  <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css">
  <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css">
  <link rel="stylesheet" type="text/css" href="css/styleswitcher.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="js/modernizr.min.js"></script>

</head>

<body class="dark home-page">
  <!-- Live Style Switcher Starts -->
  <div id="switcher" class="">
    <div class="content-switcher">
      <h4>COLOR SWITCHER</h4>
      <ul>
        <li>
          <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color">
            <img src="img/styleswitcher/purple.png" alt="purple">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color">
            <img src="img/styleswitcher/red.png" alt="red">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color">
            <img src="img/styleswitcher/blueviolet.png" alt="blueviolet">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color">
            <img src="img/styleswitcher/blue.png" alt="blue">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color">
            <img src="img/styleswitcher/goldenrod.png" alt="goldenrod">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color">
            <img src="img/styleswitcher/magenta.png" alt="magenta">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color">
            <img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color">
            <img src="img/styleswitcher/orange.png" alt="orange">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color">
            <img src="img/styleswitcher/green.png" alt="green">
          </a>
        </li>
        <li>
          <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color">
            <img src="img/styleswitcher/yellow.png" alt="yellow">
          </a>
        </li>
      </ul>
      <h4>TRANSITION DIRECTION</h4>
      <div class="flex justify-between transition-direction">
        <div id="cornertopleft">
          <div class="arrow cornertopleft"></div>
        </div>
        <div class="active" id="top">
          <div class="arrow top"></div>
        </div>
        <div id="cornertopright">
          <div class="arrow cornertopright"></div>
        </div>
      </div>
      <div class="flex justify-between transition-direction">
        <div id="left">
          <div class="arrow left"></div>
        </div>
        <div id="right">
          <div class="arrow right"></div>
        </div>
      </div>
      <div class="flex justify-between transition-direction">
        <div id="cornerbottomleft">
          <div class="arrow cornerbottomleft"></div>
        </div>
        <div id="bottom">
          <div class="arrow bottom"></div>
        </div>
        <div id="cornerbottomright">
          <div class="arrow cornerbottomright"></div>
        </div>
      </div>
      <span>Navigate between sections to see the effect.</span>
      <div id="hideSwitcher">&times;</div>
    </div>
  </div>
  <div id="showSwitcher" class="styleSecondColor">
    <i class="fa fa-cog fa-spin"></i>
  </div>
  <!-- Live Style Switcher Ends -->
  <!-- PRELOADER STARTS -->
  <div id="preloader">
    <div class="line"></div>
  </div>
  <!-- PRELOADER ENDS -->
  <!-- Header Starts -->
  <header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul id="desktop-nav" class="icon-menu d-none d-lg-block">
      <li class="icon-box desktop-nav-element active">
        <i class="fa fa-home"></i>
        <div>
          <h2>Home</h2>
        </div>
      </li>
      <li class="icon-box desktop-nav-element">
        <i class="fa fa-user"></i>
        <div>
          <h2>About</h2>
        </div>
      </li>
      <li class="icon-box desktop-nav-element">
        <i class="fa fa-envelope-open"></i>
        <div>
          <h2>Contact</h2>
        </div>
      </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav class="d-block d-lg-none">
      <div class="inputmobile" id="inputmobile">
        <div id="trigger-mobile" class="trigger-mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul class="list-unstyled" id="mobile-nav">
          <li class="mobile-nav-element home-link active">
            <div>
              <i class="fa fa-home"></i>
              <span>Home</span>
            </div>
          </li>
          <li class="mobile-nav-element">
            <div>
              <i class="fa fa-user"></i>
              <span>About</span>
            </div>
          </li>
          <li class="mobile-nav-element">
            <div>
              <i class="fa fa-envelope-open"></i>
              <span>Contact</span>
            </div>
          </li>
          
        </ul>
      </div>
    </nav>
    <!-- Mobile Menu Ends -->
  </header>
  <!-- Header Ends -->
  <!-- Main Content Starts -->
  <div class="pages">
    <!-- Home Starts -->
    <div class="page page--current" id="home">
      <div class="home">
        <div class="container-fluid main-container container-home p-0">
          <div class="color-block d-none d-lg-block"></div>
          <div class="row home-details-container align-items-center">
            <img class="col-lg-4 position-fixed d-none d-lg-block" src="img/risheek.png" alt="">
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
              <div>
                <img src="img/risheek.png" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none"
                  alt="my picture">
                <h1 class="text-uppercase poppins-font">I'm Risheek Shrestha. <span>web developer</span>
                </h1>
                <p class="open-sans-font">"I'm a web developer passionate about creating functional and user-friendly
                  websites, with a strong focus on backend development and coding. Eager to start a career building
                  robust software and seamless web experiences."</p>
                <a id="link-about" class="button">
                  <span class="button-text">more about me</span>
                  <span class="button-icon fa fa-arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Home Ends -->
    <!-- About Starts -->
    <div class="page" id="about">
      <!-- Main Content Starts -->
      <!-- Section Title Starts -->
      <div class="title-section text-left text-sm-center">
        <h2>ABOUT <span>ME</span>
        </h2>
        <span class="title-bg">Resume</span>
      </div>
      <!-- Section Title Ends -->
      <div class="about">
        <div class="main-content">
          <div class="container">
            <div class="row">
              <!-- Personal Info Starts -->
              <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                  <div class="col-12">
                    <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                  </div>
                  <div class="col-12 d-block d-sm-none">
                    <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture">
                  </div>
                  <div class="col-6">
                    <ul class="about-list list-unstyled open-sans-font">
                      <li>
                        <span class="title">first name :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Risheek</span>
                      </li>
                      <li>
                        <span class="title">last name :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Shrestha</span>
                      </li>
                      <li>
                        <span class="title">Age :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">22 Years</span>
                      </li>
                      <li>
                        <span class="title">Nationality :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indian</span>
                      </li>
                      <li>
                        <span class="title">Freelance :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="about-list list-unstyled open-sans-font">
                      <li>
                        <span class="title">Address :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Patna, Bihar</span>
                      </li>
                      <li>
                        <span class="title">phone :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+91-8102992890</span>
                      </li>
                      <li>
                        <span class="title">Email :</span>
                        <span
                          class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">shrestharisheek@gmail.com</span>
                      </li>
                      <li>
                        <span class="title">Linkedin :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Risheek
                          Shrestha</span>
                      </li>
                      <li>
                        <span class="title">languages :</span>
                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">English, Hindi</span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 mt-3">
                    <a class="button" href="Risheek shrestha.pdf" target="_blank">
                      <span class="button-text">Download CV</span>
                      <span class="button-icon fa fa-download"></span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Personal Info Ends -->
              <!-- Boxes Starts -->
              <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0 align-content-center">
                <div class="row">
                  <div class="col-6">
                    <div class="box-stats with-margin">
                      <h3 class="poppins-font position-relative">1</h3>
                      <p class="open-sans-font m-0 position-relative text-uppercase">years of <span
                          class="d-block">experience</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="box-stats with-margin">
                      <h3 class="poppins-font position-relative">6</h3>
                      <p class="open-sans-font m-0 position-relative text-uppercase">completed <span
                          class="d-block">projects</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Skills Starts -->
            <div class="row">
              <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My
                  Skills</h3>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p89">
                  <span>89%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                  <span>70%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Asp.net</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p80">
                  <span>80%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">java</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p66">
                  <span>66%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p50">
                  <span>50%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Javascript</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p75">
                  <span>75%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">C++</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                  <span>72%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">DSA</h6>
              </div>
              <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p45">
                  <span>45%</span>
                  <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                  </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">React</h6>
              </div>
            </div>
            <!-- Skills Ends -->
            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row">
              <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience
                  <span>&</span> Education
                </h3>
              </div>
              <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                  <ul>
                    <li>
                      <div class="icon">
                        <i class="fa fa-briefcase"></i>
                      </div>
                      <span class="time open-sans-font text-uppercase">2025 February - 2025 - April</span>
                      <h5 class="poppins-font text-uppercase">Web Developer <span
                          class="place open-sans-font">TutorSchool</span>
                      </h5>
                      <p class="open-sans-font">Lorem ipsum dolor sit amet, tempor incididunt ut laboreconsectetur elit,
                        sed do eiusmod tempor duntt</p>
                    </li>
                    <li>
                      <div class="icon">
                        <i class="fa fa-briefcase"></i>
                      </div>
                      <span class="time open-sans-font text-uppercase">2024 October - 2025 January</span>
                      <h5 class="poppins-font text-uppercase">Internship<span class="place open-sans-font">Dotplus
                          Technology</span>
                      </h5>
                      <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor
                        incididunt ut labore</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                  <ul>

                    <li>
                      <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                      </div>
                      <span class="time open-sans-font text-uppercase">2025-Current</span>
                      <h5 class="poppins-font text-uppercase">Master Degree <span class="place open-sans-font">Shoolini
                          University</span>
                      </h5>
                      <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                        incididunt ut adipisicing</p>
                    </li>
                    <li>
                      <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                      </div>
                      <span class="time open-sans-font text-uppercase">2022-25</span>
                      <h5 class="poppins-font text-uppercase">Bachelor Degree <span class="place open-sans-font">Oxford
                          Business College</span>
                      </h5>
                      <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor ut labore</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Experience & Education Ends -->
          </div>
        </div>
      </div>
      <!-- Main Content Ends -->
    </div>
    <!-- About Ends -->
    <!-- Contact Starts -->
    <div class="page" id="contact">
      <div class="contact">
        <div class="title-section text-left text-sm-center">
          <h2>get in <span>touch</span>
          </h2>
          <span class="title-bg">contact</span>
        </div>
        <div class="main-content">
          <div class="container">
            <div class="row">
              <!-- Left Side Starts -->
              <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new
                  projects, creative ideas or opportunities to be part of your visions.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                  <i class="fa fa-envelope-open position-absolute"></i>
                  <span class="d-block">mail me</span>
                  <a href="mailto:shrestharisheek@gmail.com" style = 'color: white;'>shrestharisheek@gmail.com</a>
                </p>

                <p class="open-sans-font custom-span-contact position-relative">
                  <i class="fa fa-phone-square position-absolute"></i>
                  <span class="d-block">call me</span>
                  <a href="tel:+918102992890" style = 'color: white;'>+91-8102992890</a>
                </p>

                <ul class="social list-unstyled pt-1 mb-5">
                  <li class="facebook">
                    <a title="WhatsApp" href="https://wa.me/918102992890" target="_blank" rel="noopener">
                      <i class="fa fa-whatsapp"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a title="Twitter" href="https://www.linkedin.com/in/risheek-shrestha/" target="_blank">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li class="dribbble">
                    <a title="Dribbble" href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Left Side Ends -->
              <!-- Contact Form Starts -->
              <div class="col-12 col-lg-8">
                <form class="contactform" method="post" action="contact_action.php">
                  <div class="contactform">
                    <div class="row">
                      <div class="col-12 col-md-4">
                        <input autocomplete="off" type="text" name="name" placeholder="YOUR NAME">
                      </div>
                      <div class="col-12 col-md-4">
                        <input autocomplete="off" type="email" name="email" placeholder="YOUR EMAIL">
                      </div>
                      <div class="col-12 col-md-4">
                        <input autocomplete="off" type="text" name="subject" placeholder="YOUR SUBJECT">
                      </div>
                      <div class="col-12">
                        <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                        <button type="submit" class="button">
                          <span class="button-text">Send Message</span>
                          <span class="button-icon fa fa-send"></span>
                        </button>
                      </div>
                      <div class="col-12 form-message">
                        <span class="output_message text-center font-weight-600 text-uppercase"></span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Contact Form Ends -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Ends -->
  </div>
  <!-- Main Content Ends -->
  <!-- Template JS Files -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/styleswitcher.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/main.js"></script>
  <script src="js/cbpGridGallery.js"></script>
  <script src="js/jquery.hoverdir.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/custom.js"></script>

  <?php if (isset($_SESSION['status'])): ?>
    <script>
      toastr.options = {
        "closeButton": true,
        "progressBar": true
      };
      toastr.<?php echo $_SESSION['status']['type']; ?>('<?php echo $_SESSION['status']['message']; ?>');
    </script>
  <?php unset($_SESSION['status']);
  endif; ?>


</body>

</html>