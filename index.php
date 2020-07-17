<!--
Name: Cade Rosche
Project: Portfolio Site
Start Date: 7/12/20
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- link CSS and google font CDN-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <!--end link CSS-->
  <!--start page title and SVG favicon-->
  <title>Cade Rosche</title>
  <link rel="icon" type="image/svg+xml" href="img/favicon/code.svg" />
  <link rel="alternate icon" href="img/favicon/code.ico" />
  <link rel="mask-icon" href="img/favicon/code.svg" color="#ff8a01" />
  <!--end page title and SVG favicon-->
</head>

<body>
  <!--start Navbar -->
  <nav class="white" role="navigation" id="top">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Cade Rosche</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#top">Home</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="https://github.com/cprosche/portfolio-website/tree/master">GitHub</a></li>
        <li><a href="#">Resume</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#top">Home</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="https://github.com/cprosche/portfolio-website/tree/master">GitHub</a></li>
        <li><a href="#">Resume</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
  </nav>
  <!--End navbar-->

  <!-- start Hero section-->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br /><br />
        <h1 class="header center green-text">
          Hi, my name is Cade Rosche.
        </h1>
        <div class="row center">
          <h5 class="header col s12 light">
            I am a full stack web developer based in Rockford, IL. I have
            experience with HTML, CSS, SASS, JavaScript, PHP, and MySQL.
          </h5>
        </div>
        <div class="row center"></div>

        <br /><br />
      </div>
    </div>
    <div class="parallax">
      <img src="img/background1.jpg" alt="Unsplashed background img 1" />
    </div>
  </div>
  <!--end Hero section-->

  <div class="container">
    <div class="section">
      <!--  start Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text">
              <i class="material-icons">school</i>
            </h2>
            <h5 class="center">University of Illinois at Urbana-Champaign</h5>

            <p class="light">
              At UIUC, I received a bachelor's degree in Chemical Engineering.
              I completed my degree in 2017. During my studies, I heavily
              utilized Excel and it's functions. I creating many spreadsheets
              that were the entirety of the technical work behind our group
              projects.
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text">
              <i class="material-icons">code</i>
            </h2>
            <h5 class="center">Programming Origins</h5>

            <p class="light">
              My first experience with programming was making simple
              VisualBasic games in a class I took for 2 years. Since then, I
              have been intrigued by programming. Along with my Excel
              experience at university, I had a 3D printer and experimented
              with that quite a bit. My prefered CAD program was OpenSCAD, a
              code based 3D modeling software.
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text">
              <i class="material-icons">trending_up</i>
            </h2>
            <h5 class="center">Continued Learning</h5>

            <p class="light">
              I'm currently learning as much as I can, as quickly as I can. I'm building applications using HTML, CSS, JaveScript, PHP, and MySQL and how to deploy them using cPanel and Git. Check out my github and the projects section of this website to see my progress. This site is an example of that progress.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end ICON section-->

  <!--start middle Paralax section-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax">
      <img src="img/background2.jpg" alt="Unsplashed background img 2" />
    </div>
  </div>
  <!--end middle Paralax section-->

  <!--start Projects section-->
  <div class="container">
    <div class="section">
      <div class="row" id="projects">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Projects</h4>
        </div>
        <div class="row" id="tictactoe">
          <div class="col s12">
            <div class="card">
              <div class="card-image">
                <!--image is also a link-->
                <a href="projects/tictactoe/index.html"><img src="img/tictactoe.jpg" /></a>
                <span class="card-title black-text">TicTacToe</span>
              </div>
              <div class="card-content">
                <p>
                  This example of TicTacToe is built out of HTML, CSS, and
                  JavaScript.
                </p>
              </div>
              <div class="card-action">
                <a href="projects/tictactoe/index.html">try it out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end Projects section-->

  <!--start paralax section 3-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax">
      <img src="img/background3.jpg" alt="Unsplashed background img 3" />
    </div>
  </div>
  <!-- end paralax section 3-->

  <!-- start footer section-->
  <footer class="page-footer green">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">
            Contact Me
          </h5>
          <p class="white-text">
            (815) 742-1496<br />
            <a href="mailto:caderosche@gmail.com" class="white-text">caderosche@gmail.com</a>
          </p>
          <!--start contact form-->
          <div class="row" id="contact">
            <!--start form tag-->
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" name="first-name" />
                  <label for="first_name" class="white-text">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate" name="last-name" />
                  <label for="last_name">Last Name</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="mail" />
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="subject" type="text" class="validate" name="subject" />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="message" type="text" class="materialize-textarea" name="message"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <button class="btn waves-effect waves-dark white black-text" type="submit" name="action">
                    Send Message
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>
            <!--end form tag-->
          </div>
        </div>
        <!--end contact form-->

        <div class="col l3 s12">
          <h5 class="white-text">Projects</h5>
          <ul>
            <li><a class="white-text" href="#tictactoe">TicTacToe</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Socials</h5>
          <ul>
            <li>
              <a class="white-text" href="https://www.linkedin.com/in/cade-rosche-5263b1a0/">LinkedIn</a>
            </li>
            <li><a class="white-text" href="https://github.com/cprosche/portfolio-website/tree/master">GitHub</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <!--span with year id automatically inserts current year-->
        Copyright <span id="year"></span> Cade Rosche | This page was built using HTML, CSS, JS,
        PHP, and Materialize. </nobr>
      </div>
    </div>
  </footer>
  <!--end footer section-->

  <!--start  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script>
    //inserts the year into any tag with "year" id
    var d = new Date();
    document.getElementById("year").innerHTML = d.getFullYear();
  </script>
  <!--End scripts-->
  <!--PHP to include-->
  <?php
  include 'include/contactform.php';
  ?>
</body>

</html>